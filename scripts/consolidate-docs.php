#!/usr/bin/env php
<?php

/**
 * Consolidate Lefthook documentation from mdbook source into a single markdown file
 */

class DocumentationConsolidator
{
    private string $sourceDir;
    private string $outputFile;
    private array $tocEntries = [];
    private array $processedFiles = [];
    private int $currentHeadingLevel = 1;

    public function __construct(string $sourceDir, string $outputFile)
    {
        $this->sourceDir = rtrim($sourceDir, '/');
        $this->outputFile = $outputFile;
    }

    public function consolidate(): void
    {
        echo "Starting documentation consolidation...\n";
        
        // Parse SUMMARY.md to get structure
        $summaryPath = $this->sourceDir . '/SUMMARY.md';
        if (!file_exists($summaryPath)) {
            throw new Exception("SUMMARY.md not found at: $summaryPath");
        }

        $output = $this->generateHeader();
        $output .= "\n# Table of Contents\n\n";
        $tocPlaceholder = "<!-- TOC_PLACEHOLDER -->\n\n";
        $output .= $tocPlaceholder;

        // Process documentation based on SUMMARY.md
        $summaryContent = file_get_contents($summaryPath);
        $output .= $this->processSummary($summaryContent);

        // Replace TOC placeholder with actual TOC
        $toc = $this->generateTOC();
        $output = str_replace($tocPlaceholder, $toc . "\n", $output);

        // Add footer
        $output .= $this->generateFooter();

        // Write output
        file_put_contents($this->outputFile, $output);
        echo "Documentation consolidated to: {$this->outputFile}\n";
        echo "Processed " . count($this->processedFiles) . " files\n";
    }

    private function generateHeader(): string
    {
        $date = date('Y-m-d H:i:s');
        return <<<HEADER
---
title: Lefthook Documentation (Complete)
description: Complete consolidated documentation for Lefthook - The fastest polyglot Git hooks manager
source: https://github.com/evilmartians/lefthook
generated: $date
---

# Lefthook Documentation

> **Note:** This is a consolidated single-file version of the official Lefthook documentation.
> 
> - **Official Repository:** [github.com/evilmartians/lefthook](https://github.com/evilmartians/lefthook)
> - **Official Documentation:** [lefthook.dev](https://lefthook.dev)
> - **License:** MIT License (see bottom of this document)

---

HEADER;
    }

    private function processSummary(string $summaryContent): string
    {
        $output = '';
        $lines = explode("\n", $summaryContent);
        $currentSection = '';
        $sectionLevel = 0;

        foreach ($lines as $line) {
            // Skip empty lines and pure markdown headers
            $trimmed = trim($line);
            if (empty($trimmed) || $trimmed === '---') {
                continue;
            }

            // Handle section headers (lines starting with #)
            if (preg_match('/^(#+)\s+(.+)$/', $trimmed, $matches)) {
                $level = strlen($matches[1]);
                $title = $matches[2];
                $currentSection = $title;
                $sectionLevel = $level;
                
                $output .= "\n" . str_repeat('#', $level) . " $title\n\n";
                $this->addTocEntry($title, $level, $this->slugify($title));
                continue;
            }

            // Handle list items with links
            if (preg_match('/^(-|\*)\s+\[([^\]]+)\]\(([^)]+)\)/', $trimmed, $matches)) {
                $title = $matches[2];
                $path = $matches[3];
                
                // Calculate heading level based on indentation
                $indentLevel = (strlen($line) - strlen(ltrim($line))) / 2;
                $headingLevel = $sectionLevel + $indentLevel + 1;
                
                // Process the linked file
                $content = $this->processFile($path, $title, $headingLevel);
                if ($content) {
                    $output .= $content;
                }
            }
        }

        return $output;
    }

    private function processFile(string $relativePath, string $title, int $headingLevel): string
    {
        // Clean up the path
        $relativePath = str_replace('./', '', $relativePath);
        $fullPath = $this->sourceDir . '/' . $relativePath;

        // Skip if already processed or doesn't exist
        if (in_array($fullPath, $this->processedFiles)) {
            return '';
        }

        if (!file_exists($fullPath)) {
            echo "Warning: File not found: $fullPath\n";
            return '';
        }

        $this->processedFiles[] = $fullPath;
        echo "Processing: $relativePath\n";

        $content = file_get_contents($fullPath);
        
        // Skip empty files or just redirects
        if (empty(trim($content))) {
            return '';
        }

        // Create section anchor
        $anchor = $this->slugify($title);
        
        // Add to TOC
        $this->addTocEntry($title, $headingLevel, $anchor);

        // Start with section header
        $output = "\n" . str_repeat('#', $headingLevel) . " $title\n\n";

        // Process content
        $output .= $this->processContent($content, $headingLevel, dirname($relativePath));

        return $output;
    }

    private function processContent(string $content, int $baseLevel, string $basePath): string
    {
        $lines = explode("\n", $content);
        $output = [];
        $inCodeBlock = false;
        $codeBlockDelimiter = '';

        foreach ($lines as $line) {
            // Handle code blocks
            if (preg_match('/^(```+|~~~+)/', $line, $matches)) {
                if (!$inCodeBlock) {
                    $inCodeBlock = true;
                    $codeBlockDelimiter = $matches[1][0];
                } elseif ($line[0] === $codeBlockDelimiter) {
                    $inCodeBlock = false;
                    $codeBlockDelimiter = '';
                }
                $output[] = $line;
                continue;
            }

            // Don't process lines inside code blocks
            if ($inCodeBlock) {
                $output[] = $line;
                continue;
            }

            // Adjust heading levels
            if (preg_match('/^(#+)\s+(.+)$/', $line, $matches)) {
                $originalLevel = strlen($matches[1]);
                $newLevel = $baseLevel + $originalLevel;
                
                // Don't let headings go below h6
                if ($newLevel > 6) {
                    $newLevel = 6;
                }
                
                $headingText = $matches[2];
                $line = str_repeat('#', $newLevel) . ' ' . $headingText;
                
                // Add to TOC if significant
                if ($originalLevel <= 2) {
                    $this->addTocEntry($headingText, $newLevel, $this->slugify($headingText));
                }
            }

            // Convert relative links to anchors
            $line = $this->convertLinks($line, $basePath);

            // Handle image paths
            $line = $this->convertImages($line, $basePath);

            $output[] = $line;
        }

        return implode("\n", $output) . "\n";
    }

    private function convertLinks(string $line, string $basePath): string
    {
        // Convert markdown links from [text](./file.md) to [text](#anchor)
        return preg_replace_callback(
            '/\[([^\]]+)\]\(([^)]+)\)/',
            function ($matches) use ($basePath) {
                $text = $matches[1];
                $link = $matches[2];
                
                // Skip external links
                if (preg_match('/^https?:\/\//', $link)) {
                    return $matches[0];
                }
                
                // Skip anchors that already start with #
                if (str_starts_with($link, '#')) {
                    return $matches[0];
                }
                
                // Convert relative .md links to anchors
                if (str_ends_with($link, '.md') || str_ends_with($link, '/')) {
                    $anchor = $this->slugify($text);
                    return "[$text](#$anchor)";
                }
                
                return $matches[0];
            },
            $line
        );
    }

    private function convertImages(string $line, string $basePath): string
    {
        // For now, keep image references as-is
        // In a production version, you might want to embed images or host them separately
        return $line;
    }

    private function slugify(string $text): string
    {
        // Remove markdown formatting
        $text = preg_replace('/`([^`]+)`/', '$1', $text);
        $text = preg_replace('/\*\*([^*]+)\*\*/', '$1', $text);
        $text = preg_replace('/\*([^*]+)\*/', '$1', $text);
        
        // Convert to lowercase and replace spaces/special chars with hyphens
        $text = strtolower($text);
        $text = preg_replace('/[^a-z0-9]+/', '-', $text);
        $text = trim($text, '-');
        
        return $text;
    }

    private function addTocEntry(string $title, int $level, string $anchor): void
    {
        $this->tocEntries[] = [
            'title' => $title,
            'level' => $level,
            'anchor' => $anchor
        ];
    }

    private function generateTOC(): string
    {
        $toc = '';
        $minLevel = PHP_INT_MAX;
        
        // Find minimum level
        foreach ($this->tocEntries as $entry) {
            $minLevel = min($minLevel, $entry['level']);
        }
        
        // Generate TOC with proper indentation
        foreach ($this->tocEntries as $entry) {
            $indent = str_repeat('  ', $entry['level'] - $minLevel);
            $toc .= $indent . "- [{$entry['title']}](#{$entry['anchor']})\n";
        }
        
        return $toc;
    }

    private function generateFooter(): string
    {
        $date = date('Y-m-d');
        return <<<FOOTER

---

## License

The Lefthook project is licensed under the MIT License:

```
The MIT License (MIT)

Copyright (c) 2019 Arkweid

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
```

---

*This documentation was automatically generated on $date from the [official Lefthook repository](https://github.com/evilmartians/lefthook).*

FOOTER;
    }
}

// Main execution
try {
    $sourceDir = $argv[1] ?? '/tmp/lefthook/docs/mdbook';
    $outputFile = $argv[2] ?? 'LEFTHOOK-DOCS.md';
    
    if (!is_dir($sourceDir)) {
        throw new Exception("Source directory not found: $sourceDir");
    }
    
    $consolidator = new DocumentationConsolidator($sourceDir, $outputFile);
    $consolidator->consolidate();
    
    echo "Success! Documentation has been consolidated.\n";
    exit(0);
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
    exit(1);
}