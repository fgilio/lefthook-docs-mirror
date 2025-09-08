# Lefthook Documentation Mirror

This repository contains a consolidated single-file version of the [Lefthook](https://github.com/evilmartians/lefthook) documentation.

## What is this?

This is an automated mirror that consolidates all Lefthook documentation from their mdbook source into a single searchable Markdown file. The documentation is automatically updated weekly via GitHub Actions.

## Why?

- **Single File Search**: Search through all documentation in one file
- **Offline Access**: Download and read the complete documentation offline
- **Quick Reference**: Navigate the entire documentation without loading multiple pages
- **Version Control**: Track documentation changes over time

## Files

- [`LEFTHOOK-DOCS.md`](./LEFTHOOK-DOCS.md) - The complete consolidated documentation
- [`scripts/consolidate-docs.php`](./scripts/consolidate-docs.php) - PHP script that generates the documentation
- [`.github/workflows/update-docs.yml`](./.github/workflows/update-docs.yml) - GitHub Actions workflow for automatic updates

## Official Resources

- **Official Repository**: [github.com/evilmartians/lefthook](https://github.com/evilmartians/lefthook)
- **Official Documentation**: [lefthook.dev](https://lefthook.dev)
- **Official Installation Guide**: [lefthook.dev/installation](https://lefthook.dev/installation)

## How it Works

1. GitHub Actions runs weekly (or on manual trigger)
2. Clones the latest Lefthook repository
3. Runs the PHP consolidation script
4. Processes all markdown files from `docs/mdbook/`
5. Generates a single consolidated markdown file
6. Commits and pushes changes if documentation was updated

## Manual Update

To manually trigger a documentation update:

1. Go to the [Actions tab](../../actions)
2. Select "Update Documentation"
3. Click "Run workflow"

## Local Development

To run the consolidation script locally:

```bash
# Clone this repository
git clone https://github.com/yourusername/lefthook-docs-mirror.git
cd lefthook-docs-mirror

# Clone Lefthook repository
git clone --depth 1 https://github.com/evilmartians/lefthook.git /tmp/lefthook

# Run the consolidation script
php scripts/consolidate-docs.php /tmp/lefthook/docs/mdbook LEFTHOOK-DOCS.md
```

## Contributing

This is an automated mirror. For documentation improvements, please contribute to the [official Lefthook repository](https://github.com/evilmartians/lefthook).

## License

- The Lefthook project and its documentation are licensed under the [MIT License](https://github.com/evilmartians/lefthook/blob/master/LICENSE)
- This mirror repository is also licensed under the MIT License

## Disclaimer

This is an unofficial mirror maintained for convenience. Always refer to the [official documentation](https://lefthook.dev) for the most up-to-date and authoritative information.