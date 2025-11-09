---
title: Lefthook Documentation (Complete)
description: Complete consolidated documentation for Lefthook - The fastest polyglot Git hooks manager
source: https://github.com/evilmartians/lefthook
generated: 2025-11-09 00:24:19
---

# Lefthook Documentation

> **Note:** This is a consolidated single-file version of the official Lefthook documentation.
> 
> - **Official Repository:** [github.com/evilmartians/lefthook](https://github.com/evilmartians/lefthook)
> - **Official Documentation:** [lefthook.dev](https://lefthook.dev)
> - **License:** MIT License (see bottom of this document)

---

# Table of Contents

- [User guide](#user-guide)
  - [Installation](#installation)
    - [Install lefthook](#install-lefthook)
    - [Ruby](#ruby)
        - [Ruby](#ruby)
    - [Node.js](#node-js)
        - [Node.js](#node-js)
    - [Swift](#swift)
        - [Swift](#swift)
    - [Go](#go)
        - [Go](#go)
    - [Python](#python)
        - [Python](#python)
    - [Scoop](#scoop)
        - [Scoop for Windows](#scoop-for-windows)
    - [Homebrew](#homebrew)
        - [Homebrew for MacOS and Linux](#homebrew-for-macos-and-linux)
    - [Winget](#winget)
        - [Winget for Windows](#winget-for-windows)
    - [Snap](#snap)
        - [Snap for Linux](#snap-for-linux)
    - [Debian-based distro](#debian-based-distro)
        - [APT packages for Debian/Ubuntu Linux](#apt-packages-for-debian-ubuntu-linux)
    - [RPM-based distro](#rpm-based-distro)
        - [RPM packages for CentOS/Fedora Linux](#rpm-packages-for-centos-fedora-linux)
    - [Alpine](#alpine)
        - [APK packages for Alpine](#apk-packages-for-alpine)
    - [Arch Linux](#arch-linux)
        - [AUR for Arch](#aur-for-arch)
    - [Mise](#mise)
        - [Mise](#mise)
    - [Manual](#manual)
        - [Manual installation with prebuilt executable](#manual-installation-with-prebuilt-executable)
  - [Commands](#commands)
      - [Commands](#commands)
    - [lefthook install](#lefthook-install)
        - [`lefthook install`](#lefthook-install)
    - [lefthook uninstall](#lefthook-uninstall)
        - [`lefthook uninstall`](#lefthook-uninstall)
    - [lefthook run](#lefthook-run)
        - [`lefthook run`](#lefthook-run)
    - [lefthook add](#lefthook-add)
        - [`lefthook add`](#lefthook-add)
    - [lefthook validate](#lefthook-validate)
        - [`lefthook validate`](#lefthook-validate)
    - [lefthook dump](#lefthook-dump)
        - [`lefthook dump`](#lefthook-dump)
    - [lefthook check-install](#lefthook-check-install)
        - [`lefthook check-install`](#lefthook-check-install)
    - [lefthook self-update](#lefthook-self-update)
        - [`lefthook self-update`](#lefthook-self-update)
  - [Features](#features)
      - [Features](#features)
    - [Local config](#local-config)
        - [Local config](#local-config)
    - [Pass Git args](#pass-git-args)
        - [Capture ARGS from git in the script](#capture-args-from-git-in-the-script)
    - [Git LFS](#git-lfs)
        - [Git LFS support](#git-lfs-support)
    - [Interactive commands](#interactive-commands)
        - [Using an interactive command or script](#using-an-interactive-command-or-script)
    - [Pass STDIN](#pass-stdin)
        - [Pass stdin to a command or script](#pass-stdin-to-a-command-or-script)
- [Reference guide](#reference-guide)
  - [Configuration](#configuration)
      - [Config file name](#config-file-name)
      - [Options](#options)
    - [`assert_lefthook_installed`](#assert-lefthook-installed)
        - [`assert_lefthook_installed`](#assert-lefthook-installed)
    - [`colors`](#colors)
        - [`colors`](#colors)
    - [`extends`](#extends)
        - [`extends`](#extends)
    - [`lefthook`](#lefthook)
        - [`lefthook`](#lefthook)
    - [`min_version`](#min-version)
        - [`min_version`](#min-version)
    - [`no_tty`](#no-tty)
        - [`no_tty`](#no-tty)
    - [`output`](#output)
        - [`output`](#output)
    - [`rc`](#rc)
        - [`rc`](#rc)
    - [`remotes`](#remotes)
        - [`remotes`](#remotes)
      - [`git_url`](#git-url)
          - [`git_url`](#git-url)
      - [`ref`](#ref)
          - [`ref`](#ref)
      - [`refetch`](#refetch)
          - [`refetch`](#refetch)
      - [`refetch_frequency`](#refetch-frequency)
          - [`refetch_frequency`](#refetch-frequency)
      - [`configs`](#configs)
          - [`configs`](#configs)
    - [`source_dir`](#source-dir)
        - [`source_dir`](#source-dir)
    - [`source_dir_local`](#source-dir-local)
        - [`source_dir_local`](#source-dir-local)
    - [`skip_lfs`](#skip-lfs)
        - [`skip_lfs`](#skip-lfs)
    - [`templates`](#templates)
        - [`templates`](#templates)
        - [Example](#example)
    - [{Git hook name}](#git-hook-name)
        - [Git hook](#git-hook)
      - [`files`](#files)
          - [`files` (global)](#files-global)
      - [`parallel`](#parallel)
          - [`parallel`](#parallel)
      - [`piped`](#piped)
          - [`piped`](#piped)
      - [`follow`](#follow)
          - [`follow`](#follow)
      - [`fail_on_changes`](#fail-on-changes)
        - [fail_on_changes](#fail-on-changes)
      - [`exclude_tags`](#exclude-tags)
          - [`exclude_tags`](#exclude-tags)
      - [`exclude`](#exclude)
          - [`exclude`](#exclude)
      - [`skip`](#skip)
          - [`skip`](#skip)
      - [`only`](#only)
          - [`only`](#only)
      - [`jobs`](#jobs)
          - [`jobs`](#jobs)
        - [`name`](#name)
          - [`name`](#name)
        - [`run`](#run)
          - [`run`](#run)
        - [`script`](#script)
          - [`script`](#script)
        - [`runner`](#runner)
          - [`runner`](#runner)
        - [`group`](#group)
          - [`group`](#group)
        - [`tags`](#tags)
          - [`tags`](#tags)
        - [`glob`](#glob)
          - [`glob`](#glob)
        - [`files`](#files)
          - [`files`](#files)
        - [`file_types`](#file-types)
          - [`file_types`](#file-types)
        - [`env`](#env)
          - [`env`](#env)
        - [`root`](#root)
          - [`root`](#root)
        - [`fail_text`](#fail-text)
          - [`fail_text`](#fail-text)
        - [`stage_fixed`](#stage-fixed)
          - [`stage_fixed`](#stage-fixed)
        - [`interactive`](#interactive)
          - [`interactive`](#interactive)
        - [`use_stdin`](#use-stdin)
          - [`use_stdin`](#use-stdin)
      - [`commands`](#commands)
          - [`commands`](#commands)
        - [`priority`](#priority)
          - [`priority`](#priority)
      - [`scripts`](#scripts)
          - [Scripts](#scripts)
  - [ENV variables](#env-variables)
      - [ENV variables](#env-variables)
    - [LEFTHOOK](#lefthook)
        - [`LEFTHOOK`](#lefthook)
    - [LEFTHOOK_VERBOSE](#lefthook-verbose)
        - [`LEFTHOOK_VERBOSE`](#lefthook-verbose)
    - [LEFTHOOK_OUTPUT](#lefthook-output)
        - [`LEFTHOOK_OUTPUT`](#lefthook-output)
    - [LEFTHOOK_CONFIG](#lefthook-config)
        - [`LEFTHOOK_CONFIG`](#lefthook-config)
    - [LEFTHOOK_EXCLUDE](#lefthook-exclude)
        - [`LEFTHOOK_EXCLUDE`](#lefthook-exclude)
    - [CLICOLOR_FORCE](#clicolor-force)
        - [`CLICOLOR_FORCE`](#clicolor-force)
    - [NO_COLOR](#no-color)
        - [`NO_COLOR`](#no-color)
    - [CI](#ci)
        - [`CI`](#ci)
- [Examples](#examples)
  - [Using local only config](#using-local-only-config)
      - [lefthook-local.yml](#lefthook-local-yml)
  - [Wrap commands locally](#wrap-commands-locally)
    - [Wrap commands in local config](#wrap-commands-in-local-config)
  - [Auto add linter fixes to commit](#auto-add-linter-fixes-to-commit)
      - [Stage fixed files](#stage-fixed-files)
  - [Filter files](#filter-files)
      - [Filters](#filters)
  - [Skip or run on condition](#skip-or-run-on-condition)
      - [Skip or run on condition](#skip-or-run-on-condition)
  - [Remote configs](#remote-configs)
      - [Remotes](#remotes)
  - [With commitlint](#with-commitlint)
      - [Commitlint and commitzen](#commitlint-and-commitzen)
      - [Install dependencies](#install-dependencies)
      - [Configure](#configure)
      - [Test it](#test-it)


# User guide


## Installation

### Install lefthook

As a dev dependency

- [Ruby](#ruby)
- [Node.js](#node-js)
- [Swift](#swift)

With package managers
- [Go](#go)
- [Python](#python)
- [Scoop](#scoop)
- [Homebrew](#homebrew)
- [Winget](#winget)
- [Snap](#snap)
- [Debian-based distro](#debian-based-distro)
- [RPM-based distro](#rpm-based-distro)
- [Alpine](#alpine)
- [Arch Linux](#arch-linux)
- [Mise](#mise)


[Manual installation](#manual-installation)


### Ruby

##### Ruby

```ruby
# Gemfile

group :development do
  gem "lefthook", require: false
end
```

Or globally

```bash
gem install lefthook
```

**Troubleshooting**

If you see the error `lefthook: command not found` you need to check your $PATH. Also try to restart your terminal.


### Node.js

##### Node.js

```bash
npm install --save-dev lefthook
```

```bash
yarn add --dev lefthook
```

```bash
pnpm add -D lefthook
```

> **Note:** If you use `pnpm` package manager make sure to update `pnpm-workspace.yaml`s `onlyBuiltDependencies` with `lefthook` and add `lefthook` to `pnpm.onlyBuiltDependencies` in your root `package.json`, otherwise the `postinstall` script of the `lefthook` package won't be executed and hooks won't be installed.

**Note**: lefthook has three NPM packages with different ways to deliver the executables

 1. [lefthook](https://www.npmjs.com/package/lefthook) installs one executable for your system

    ```bash
    npm install --save-dev lefthook
    ```

 1. **legacy**[^1] [@evilmartians/lefthook](https://www.npmjs.com/package/@evilmartians/lefthook)  installs executables for all OS

    ```bash
    npm install --save-dev @evilmartians/lefthook
    ```

 1. **legacy**[^1] [@evilmartians/lefthook-installer](https://www.npmjs.com/package/@evilmartians/lefthook-installer) fetches the right executable on installation

    ```bash
    npm install --save-dev @evilmartians/lefthook-installer
    ```
[^1]: Legacy distributions are still maintained but they will be shut down in the future.


### Swift

##### Swift

You can find the Swift wrapper plugin [here](https://github.com/csjones/lefthook-plugin).

Utilize lefthook in your Swift project using Swift Package Manager:

```swift
.package(url: "https://github.com/csjones/lefthook-plugin.git", exact: "2.0.2"),
```

Or, with [mint](https://github.com/yonaskolb/Mint):

```bash
mint run csjones/lefthook-plugin
```


### Go

##### Go

The minimum Go version required is 1.25 and you can install

- as global package

```bash
go install github.com/evilmartians/lefthook/v2@v2.0.2
```

- or as a go tool in your project

```bash
go get -tool github.com/evilmartians/lefthook/v2
```


### Python

##### Python

```sh
python -m pip install --user lefthook
```

```sh
uv add --dev lefthook
```

### Scoop

##### Scoop for Windows

```sh
scoop install lefthook
```


### Homebrew

##### Homebrew for MacOS and Linux

```bash
brew install lefthook
```


### Winget

##### Winget for Windows

```sh
winget install evilmartians.lefthook
```


### Snap

##### Snap for Linux

```sh
snap install --classic lefthook
```


### Debian-based distro

##### APT packages for Debian/Ubuntu Linux

```sh
curl -1sLf 'https://dl.cloudsmith.io/public/evilmartians/lefthook/setup.deb.sh' | sudo -E bash
sudo apt install lefthook
```
See all instructions: https://cloudsmith.io/~evilmartians/repos/lefthook/setup/#formats-deb

[![Hosted By: Cloudsmith](https://img.shields.io/badge/OSS%20hosting%20by-cloudsmith-blue?logo=cloudsmith&style=flat-square)](https://cloudsmith.com "Debian package repository hosting is graciously provided by Cloudsmith")



### RPM-based distro

##### RPM packages for CentOS/Fedora Linux

```sh
curl -1sLf 'https://dl.cloudsmith.io/public/evilmartians/lefthook/setup.rpm.sh' | sudo -E bash
sudo yum install lefthook
```

See all instructions: https://cloudsmith.io/~evilmartians/repos/lefthook/setup/#repository-setup-yum

[![Hosted By: Cloudsmith](https://img.shields.io/badge/OSS%20hosting%20by-cloudsmith-blue?logo=cloudsmith&style=flat-square)](https://cloudsmith.com "RPM package repository hosting is graciously provided by Cloudsmith")


### Alpine

##### APK packages for Alpine

```sh
sudo apk add --no-cache bash curl
curl -1sLf 'https://dl.cloudsmith.io/public/evilmartians/lefthook/setup.alpine.sh' | sudo -E bash
sudo apk add lefthook
```

See all instructions: https://cloudsmith.io/~evilmartians/repos/lefthook/setup/#formats-alpine

[![Hosted By: Cloudsmith](https://img.shields.io/badge/OSS%20hosting%20by-cloudsmith-blue?logo=cloudsmith&style=flat-square)](https://cloudsmith.com "RPM package repository hosting is graciously provided by Cloudsmith")


### Arch Linux

##### AUR for Arch

- Official [AUR package](https://aur.archlinux.org/packages/lefthook) (compiles from sources)
- Community [AUR package](https://aur.archlinux.org/packages/lefthook-bin) (delivers pre-compiled binaries)

```sh
# To compile from sources
yay -S lefthook

# To install only executable
yay -S lefthook-bin
```


### Mise

##### Mise

> See [https://github.com/jdx/mise](https://github.com/jdx/mise)

```bash
mise use lefthook@latest
```

**Note**: The mise plugin for lefthook is maintained by the community. While we appreciate their contribution, the lefthook team cannot provide direct support for mise-specific installation issues.


### Manual

##### Manual installation with prebuilt executable

Download binaries from [latest release](https://github.com/evilmartians/lefthook/releases/latest) and install manually.


## Commands

#### Commands

> **Tip:** Use `lefthook help` or `lefthook <command> -h/--help` to discover available commands and their options

- [`lefthook install`](#lefthook-install)
- [`lefthook uninstall`](#lefthook-uninstall)
- [`lefthook add`](#lefthook-add)
- [`lefthook run`](#lefthook-run)
- [`lefthook version`](#lefthook-version)
- [`lefthook self-update`](#lefthook-self-update)
- [`lefthook validate`](#lefthook-validate)
- [`lefthook dump`](#lefthook-dump)

{{#include ./commands/install.md}}
{{#include ./commands/uninstall.md}}
{{#include ./commands/add.md}}
{{#include ./commands/run.md}}
{{#include ./commands/version.md}}
{{#include ./commands/self-update.md}}
{{#include ./commands/validate.md}}
{{#include ./commands/dump.md}}


### lefthook install

##### `lefthook install`

Creates an empty `lefthook.yml` if a configuration file does not exist.

Installs configured hooks to Git hooks.

> **Note:** NPM package `lefthook` installs the hooks in a postinstall script automatically. For projects not using NPM package run `lefthook install` after cloning the repo.

###### Installing specific hooks

You can install only specific hooks by running `lefthook install <hook-1> <hook-2> ...`.


### lefthook uninstall

##### `lefthook uninstall`

Clears Git hooks installed by lefthook.



### lefthook run

##### `lefthook run`

Executes the commands and scripts configured for a given hook. Installed Git hooks call `lefthook run` implicitly.

**Example**

```yml
# lefthook.yml

pre-commit:
  jobs:
    - name: lint
      run: yarn lint --fix {staged_files}

test:
  jobs:
    - name: test
      run: yarn test
```

Install the hook.

```bash
$ lefthook install
```

```bash
$ lefthook run test # will run 'yarn test'
$ git commit # will run pre-commit hook ('yarn lint --fix')
$ lefthook run pre-commit # will run pre-commit hook (`yarn lint --fix`)
```

###### Run specific jobs

You can specify which jobs to run (also `--tag` supported).

```bash
$ lefthook run pre-commit --job lints --job pretty --tag checks
```

###### Specify files

You can force replacing files templates (like `{staged_files}`) with either all files (will acts as `{all_files}` template) or a list of files.

```bash
$ lefthook run pre-commit --all-files
$ lefthook run pre-commit --file file1.js --file file2.js
```

(if both are specified, `--all-files` is ignored)


### lefthook add

##### `lefthook add`

Installs the given hook to Git hook.

With argument `--dirs` creates a directory `.git/hooks/<hook name>/` if it doesn't exist. Use it before adding a script to configuration.

**Example**

```bash
$ lefthook add pre-push  --dirs
```

Describe pre-push commands in `lefthook.yml`:

```yml
pre-push:
  jobs:
    - script: "audit.sh"
      runner: bash
```

Edit the script:

```bash
$ vim .lefthook/pre-push/audit.sh
...
```

Run `git push` and lefthook will run `bash audit.sh` as a pre-push hook.


### lefthook validate

##### `lefthook validate`

Validates your lefthook configuration. Use `lefthook dump` to see it.

It uses JSON schema from the lefthook Github repo.


### lefthook dump

##### `lefthook dump`

Prints the whole configuration after merging all secondary configs.

This is the actual config lefthook uses, it can be build from the main config (`lefthook.yml`), remotes, extends, and `lefthook-local.yml` overrides.



### lefthook check-install

##### `lefthook check-install`

Checks if Git hooks are installed and synchronized.

Returns:
- `0` if hooks installed and synchronized
- `1` if hooks not installed or need a sync


### lefthook self-update

##### `lefthook self-update`

Updates the binary with the latest lefthook release on Github.

This command is available only if you install lefthook from sources or download the binary from the Github Releases. For other ways use package-specific commands to update lefthook.


## Features

#### Features

> Small features that make lefthook experience nicer

{{#include ./features/local.md}}
{{#include ./features/git-args.md}}
{{#include ./features/git-lfs.md}}
{{#include ./features/interactive.md}}
{{#include ./features/pass-stdin.md}}


### Local config

##### Local config

You can extend and override options of your main configuration with `lefthook-local.yml`. Don't forget to add the file to `.gitignore`.

You can also use `lefthook-local.yml` without a main config file. This is useful when you want to use lefthook locally without imposing it on your teammates.

```yml
# lefthook.yml (committed into your repo)

pre-commit:
  jobs:
    - name: linter
      run: yarn lint
    - name: tests
      run: yarn test
```

```yml
# lefthook-local.yml (ignored by git)

pre-commit:
  jobs:
    - name: tests
      skip: true # don't want to run tests on every commit
    - name: linter
      run: yarn lint {staged_files} # lint only staged files
```


### Pass Git args

##### Capture ARGS from git in the script

Lefthook passes Git arguments to your commands and scripts.

```
├── .lefthook
│   └── prepare-commit-msg
│       └── message.sh
└── lefthook.yml
```

```yml
# lefthook.yml

prepare-commit-msg:
  jobs:
    - script: "message.sh"
      runner: bash
    - run: echo "Git args: {1} {2} {3}"
```

```bash
# .lefthook/prepare-commit-msg/message.sh

# Arguments get passed from Git

COMMIT_MSG_FILE=$1
COMMIT_SOURCE=$2
SHA1=$3

# ...
```



### Git LFS

##### Git LFS support

> **Note:** If git-lfs binary is not installed and not required in your project, LFS hooks won't be executed, and you won't be warned about it.
>
> Git LFS hooks may be slow. Disable them with the global `skip_lfs: true` setting.

Lefthook runs LFS hooks internally for the following hooks:

- post-checkout
- post-commit
- post-merge
- pre-push

Errors are suppressed if git LFS is not required for the project. You can use [`LEFTHOOK_VERBOSE`](#lefthook-verbose) ENV to make lefthook show git LFS output.

To avoid calling LFS hooks set [`skip_lfs: true`](#skip-lfs-true) in lefthook.yml or lefthook-local.yml


### Interactive commands

##### Using an interactive command or script

When you need to interact with user – specify [`interactive: true`](#interactive-true). Lefthook will connect to the current TTY and forward it to your command's or script's stdin.



### Pass STDIN

##### Pass stdin to a command or script

When you need to read the data from stdin – specify [`use_stdin: true`](#use-stdin-true). This option is good when you write a command or script that receives data from git using stdin (for the `pre-push` hook, for example).




# Reference guide


## Configuration

#### Config file name

Lefthook supports the following file names for the main config:

| Format | File name |
|-------|-----------|
| YAML  | `lefthook.yml` |
| YAML  | `.lefthook.yml` |
| YAML  | `.config/lefthook.yml` |
|       |              |
| YAML  | `lefthook.yaml` |
| YAML  | `.lefthook.yaml` |
| YAML  | `.config/lefthook.yaml` |
|       |              |
| TOML  | `lefthook.toml` |
| TOML  | `.lefthook.toml` |
| TOML  | `.config/lefthook.toml` |
|       |              |
| JSON  | `lefthook.json` |
| JSON  | `.lefthook.json` |
| JSON  | `.config/lefthook.json` |

If there are more than 1 file in the project, only one will be used, and you'll never know which one. So, please, use one format in a project.

Filenames without the leading dot will also be looked up from the [`.config` subdirectory](https://github.com/pi0/config-dir).

Lefthook also merges an extra config with the name `lefthook-local`. All supported formats can be applied to this `-local` config. If you name your main config with the leading dot, like `.lefthook.json`, the `-local` config also must be named with the leading dot: `.lefthook-local.json`.

The `-local` config can be used without a main config file. This is useful when you want to use lefthook locally without imposing it on your teammates – just create a `lefthook-local.yml` file and add it to your global `.gitignore`.

#### Options

- [`assert_lefthook_installed`](#assert-lefthook-installed)
- [`colors`](#colors)
- [`extends`](#extends)
- [`lefthook`](#lefthook)
- [`min_version`](#min-version)
- [`no_tty`](#no-tty)
- [`output`](#output)
- [`rc`](#rc)
- [`remotes`](#remotes)
  - [`git_url`](#git-url)
  - [`ref`](#ref)
  - [`refetch`](#refetch)
  - [`refetch_frequency`](#refetch-frequency)
  - [`configs`](#configs)
- [`source_dir`](#source-dir)
- [`source_dir_local`](#source-dir-local)
- [`skip_lfs`](#skip-lfs)
- [`templates`](#templates)
- [{Git hook name}](#git-hook-name) (e.g. `pre-commit`)
  - [`files` (global)](#files-global)
  - [`parallel`](#parallel)
  - [`piped`](#piped)
  - [`follow`](#follow)
  - [`fail_on_changes`](#fail-on-changes)
  - [`exclude_tags`](#exclude-tags)
  - [`exclude`](#exclude)
  - [`skip`](#skip)
  - [`only`](#only)
  - [`jobs`](#jobs)
    - [`name`](#name)
    - [`run`](#run)
    - [`script`](#script)
    - [`runner`](#runner)
    - [`group`](#group)
      - [`parallel`](#parallel)
      - [`piped`](#piped)
      - [`jobs`](#jobs)
    - [`skip`](#skip)
    - [`only`](#only)
    - [`tags`](#tags)
    - [`glob`](#glob)
    - [`files`](#files)
    - [`file_types`](#file-types)
    - [`env`](#env)
    - [`root`](#root)
    - [`exclude`](#exclude)
    - [`fail_text`](#fail-text)
    - [`stage_fixed`](#stage-fixed)
    - [`interactive`](#interactive)
    - [`use_stdin`](#use-stdin)
  - [`commands`](#commands)
    - [`run`](#run)
    - [`skip`](#skip)
    - [`only`](#only)
    - [`tags`](#tags)
    - [`glob`](#glob)
    - [`files`](#files)
    - [`file_types`](#file-types)
    - [`env`](#env)
    - [`root`](#root)
    - [`exclude`](#exclude)
    - [`fail_text`](#fail-text)
    - [`stage_fixed`](#stage-fixed)
    - [`interactive`](#interactive)
    - [`use_stdin`](#use-stdin)
    - [`priority`](#priority)
  - [`scripts`](#scripts)
    - [`runner`](#runner)
    - [`skip`](#skip)
    - [`only`](#only)
    - [`tags`](#tags)
    - [`env`](#env)
    - [`fail_text`](#fail-text)
    - [`stage_fixed`](#stage-fixed)
    - [`interactive`](#interactive)
    - [`use_stdin`](#use-stdin)
    - [`priority`](#priority)


### `assert_lefthook_installed`

##### `assert_lefthook_installed`

**Default: `false`**

When set to `true`, fail (with exit status 1) if `lefthook` executable can't be found in $PATH, under node_modules/, as a Ruby gem, or other supported method. This makes sure git hook won't omit `lefthook` rules if `lefthook` ever was installed.


### `colors`

##### `colors`

**Default: `auto`**

Whether enable or disable colorful output of Lefthook. This option can be overwritten with `--colors` option. You can also provide your own color codes.

**Example**

Disable colors.

```yml
# lefthook.yml

colors: false
```

Custom color codes. Can be hex or ANSI codes.

```yml
# lefthook.yml

colors:
  cyan: 14
  gray: 244
  green: '#32CD32'
  red: '#FF1493'
  yellow: '#F0E68C'
```



### `extends`

##### `extends`

You can extend your config with another one YAML file. Its content will be merged. Extends for `lefthook.yml`, `lefthook-local.yml`, and [`remotes`](#remotes) configs are handled separately, so you can have different extends in these files.

You can use asterisk to make a glob.

**Example**

```yml
# lefthook.yml

extends:
  - /home/user/work/lefthook-extend.yml
  - /home/user/work/lefthook-extend-2.yml
  - lefthook-extends/file.yml
  - ../extend.yml
  - projects/*/specific-lefthook-config.yml
```

> The extends will be merged to the main configuration in your file. Here is the order of settings applied:
>
> - `lefthook.yml` – main config file
> - `extends` – configs specified in [extends](#extends) option
> - `remotes` – configs specified in [remotes](#remotes) option
> - `lefthook-local.yml` – local config file
>
> So, `extends` override settings from `lefthook.yml`, `remotes` override `extends`, and `lefthook-local.yml` can override everything.




### `lefthook`

##### `lefthook`

**Default:** `null`

> Added in lefthook `1.10.5`

Provide a full path to lefthook executable or a command to run lefthook. Bourne shell (`sh`) syntax is supported.

> **Important:** This option does not merge from `remotes` or `extends` for security reasons. But it gets merged from lefthook local config if specified.

There are three reasons you may want to specify `lefthook`:

1. You want to force using specific lefthook version from your dependencies (e.g. npm package)
1. You use PnP loader for your JS/TS project, and your `package.json` with lefthook dependency locates in a subfolder
1. You want to make sure you use concrete lefthook executable path and want to defined it in `lefthook-local.yml`

###### Examples

###### Specify lefthook executable

```yml
# lefthook.yml

lefthook: /usr/bin/lefthook

pre-commit:
  jobs:
    - run: yarn lint
```

###### Specify a command to run lefthook

```yml
# lefthook.yml

lefthook: |
  cd project-with-lefthook
  pnpm lefthook

pre-commit:
  jobs:
    - run: yarn lint
      root: project-with-lefthook
```

###### Force using a version from Rubygems

```yml
# lefthook.yml

lefthook: bundle exec lefthook

pre-commit:
  jobs:
    - run: bundle exec rubocop {staged_files}
```

###### Enable debug logs

```yml
# lefthook-local.yml

lefthook: lefthook --verbose
```


### `min_version`

##### `min_version`

If you want to specify a minimum version for lefthook binary (e.g. if you need some features older versions don't have) you can set this option.

**Example**

```yml
# lefthook.yml

min_version: 1.1.3
```


### `no_tty`

##### `no_tty`

**Default: `false`**

Whether hide spinner and other interactive things. This can be also controlled with `--no-tty` option for `lefthook run` command.

**Example**

```yml
# lefthook.yml

no_tty: true
```


### `output`

##### `output`

You can manage verbosity using the `output` config. You can specify what to print in your output by setting these values, which you need to have

Possible values are `meta,summary,success,failure,execution,execution_out,execution_info,skips`.
By default, all output values are enabled

You can also disable all output with setting `output: false`. In this case only errors will be printed.

This config quiets all outputs except for errors.

**Example**

```yml
# lefthook.yml

output:
  - meta           # Print lefthook version
  - summary        # Print summary block (successful and failed steps)
  - empty_summary  # Print summary heading when there are no steps to run
  - success        # Print successful steps
  - failure        # Print failed steps printing
  - execution      # Print any execution logs
  - execution_out  # Print execution output
  - execution_info # Print `EXECUTE > ...` logging
  - skips          # Print "skip" (i.e. no files matched)
```

You can also *extend* this list with an environment variable `LEFTHOOK_OUTPUT`:

```bash
LEFTHOOK_OUTPUT="meta,success,summary" lefthook run pre-commit
```


### `rc`

##### `rc`

Provide an [**rc**](https://www.baeldung.com/linux/rc-files) file, which is actually a simple `sh` script. Currently it can be used to set ENV variables that are not accessible from non-shell programs.

**Example**

Use cases:

- You have a GUI program that runs git hooks (e.g., VSCode)
- You reference executables that are accessible only from a tweaked $PATH environment variable (e.g., when using rbenv or nvm, fnm)
- Or even if your GUI program cannot locate the `lefthook` executable :scream:
- Or if you want to use ENV variables that control the executables behavior in `lefthook.yml`

```bash
# An npm executable which is managed by nvm
$ which npm
/home/user/.nvm/versions/node/v15.14.0/bin/npm
```

```yml
# lefthook.yml

pre-commit:
  commands:
    lint:
      run: npm run eslint {staged_files}
```

Provide a tweak to access `npm` executable the same way you do it in your ~/<shell>rc.

```yml
# lefthook-local.yml

# You can choose whatever name you want.
# You can share it between projects where you use lefthook.
# Make sure the path is absolute.
rc: ~/.lefthookrc
```

Or

```yml
# lefthook-local.yml

# If the path contains spaces, you need to quote it.
rc: '"${XDG_CONFIG_HOME:-$HOME/.config}/lefthookrc"'
```

In the rc file, export any new environment variables or modify existing ones.

```bash
# ~/.lefthookrc

# An nvm way
export NVM_DIR="$HOME/.nvm"
[ -s "$NVM_DIR/nvm.sh" ] && \. "$NVM_DIR/nvm.sh"

# An fnm way
export FNM_DIR="$HOME/.fnm"
[ -s "$FNM_DIR/fnm.sh" ] && \. "$FNM_DIR/fnm.sh"

# Or maybe just
PATH=$PATH:$HOME/.nvm/versions/node/v15.14.0/bin
```

```bash
# Make sure you updated git hooks. This is important.
$ lefthook install -f
```

Now any program that runs your hooks will have a tweaked PATH environment variable and will be able to get `nvm` :wink:


### `remotes`

##### `remotes`

You can provide multiple remote configs if you want to share yours lefthook configurations across many projects. Lefthook will automatically download and merge configurations into your local `lefthook.yml`.

You can use [`extends`](#extends) but the paths must be relative to the remote repository root.

If you provide [`scripts`](#scripts) in a remote config file, the [scripts](#scripts) folder must also be in the **root of the repository**.

**Note**

The configuration from `remotes` will be merged to the local config using the following priority:

1. Local main config (`lefthook.yml`)
1. Remote configs (`remotes`)
1. Local overrides (`lefthook-local.yml`)

This priority may be changed in the future. For convenience, if you use `remotes`, please don't configure any hooks.


#### `git_url`

###### `git_url`

A URL to Git repository. It will be accessed with privileges of the machine lefthook runs on.

**Example**

```yml
# lefthook.yml

remotes:
  - git_url: git@github.com:evilmartians/lefthook
```

Or

```yml
# lefthook.yml

remotes:
  - git_url: https://github.com/evilmartians/lefthook
```


#### `ref`

###### `ref`

An optional *branch* or *tag* name.

> **Note:** If you initially had `ref` option, ran `lefthook install`, and then removed it, lefthook won't decide which branch/tag to use as a ref. So, if you added it once, please, use it always to avoid issues in local setups.

**Example**

```yml
# lefthook.yml

remotes:
  - git_url: git@github.com:evilmartians/lefthook
    ref: v1.0.0
```


#### `refetch`

###### `refetch`

**Default:** `false`

Force remote config refetching on every run. Lefthook will be refetching the specified remote every time it is called.

**Example**

```yml
# lefthook.yml

remotes:
  - git_url: https://github.com/evilmartians/lefthook
    refetch: true
```


#### `refetch_frequency`

###### `refetch_frequency`

**Default:** Not set

Specifies how frequently Lefthook should refetch the remote configuration. This can be set to `always`, `never` or a time duration like `24h`, `30m`, etc.

- When set to `always`, Lefthook will always refetch the remote configuration on each run.
- When set to a duration (e.g., `24h`), Lefthook will check the last fetch time and refetch the configuration only if the specified amount of time has passed.
- When set to `never` or not set, Lefthook will not fetch from remote.

**Example**

```yml
# lefthook.yml

remotes:
  - git_url: https://github.com/evilmartians/lefthook
    refetch_frequency: 24h # Refetches once every 24 hours
```

> WARNING
> If `refetch` is set to `true`, it overrides any setting in `refetch_frequency`.



#### `configs`

###### `configs`

**Default:** `[lefthook.yml]`

An optional array of config paths from remote's root.

**Example**

```yml
# lefthook.yml

remotes:
  - git_url: git@github.com:evilmartians/lefthook
    ref: v1.0.0
    configs:
      - examples/ruby-linter.yml
      - examples/test.yml
```

Example with multiple remotes merging multiple configurations.

```yml
# lefthook.yml

remotes:
  - git_url: git@github.com:org/lefthook-configs
    ref: v1.0.0
    configs:
      - examples/ruby-linter.yml
      - examples/test.yml
  - git_url: https://github.com/org2/lefthook-configs
    configs:
      - lefthooks/pre_commit.yml
      - lefthooks/post_merge.yml
  - git_url: https://github.com/org3/lefthook-configs
    ref: feature/new
    configs:
      - configs/pre-push.yml

```


### `source_dir`

##### `source_dir`

**Default: `.lefthook/`**

Change a directory for script files. Directory for script files contains folders with git hook names which contain script files.

Example of directory tree:

```
.lefthook/
├── pre-commit/
│   ├── lint.sh
│   └── test.py
└── pre-push/
    └── check-files.rb
```



### `source_dir_local`

##### `source_dir_local`

**Default: `.lefthook-local/`**

Change a directory for *local* script files (not stored in VCS).

This option is useful if you have a `lefthook-local.yml` config file and want to reference different scripts there.



### `skip_lfs`

##### `skip_lfs`

**Default:** `false`

Skip running LFS hooks even if it exists on your system.

###### Example

```yml
# lefthook.yml

skip_lfs: true

pre-push:
  commands:
    test:
      run: yarn test
```


### `templates`

##### `templates`

> Added in lefthook `1.10.8`

Provide custom replacement for templates in `run` values.

With `templates` you can specify what can be overridden via `lefthook-local.yml` without a need to overwrite every jobs in your configuration.

##### Example

###### Override with lefthook-local.yml

```yml
# lefthook.yml

templates:
  dip: # empty

pre-commit:
  jobs:
    # Will run: `bundle exec rubocop file1 file2 file3 ...`
    - run: {dip} bundle exec rubocop {staged_files}
```

```yml
# lefthook-local.yml

templates:
  dip: dip # Will run: `dip bundle exec rubocop file1 file2 file3 ...`
```

###### Reduce redundancy

```yml
# lefthook.yml

templates:
  wrapper: docker-compose run --rm -v $(pwd):/app service

pre-commit:
  jobs:
    - run: {wrapper} yarn format
    - run: {wrapper} yarn lint
    - run: {wrapper} yarn test
```


### {Git hook name}

##### Git hook

Contains settings for the git hook (commands, scripts, skip rules, etc.). You can specify any Git hook or your own custom, e.g. `test`

###### Hook options

- [`files`](#files)
- [`parallel`](#parallel)
- [`piped`](#piped)
- [`follow`](#follow)
- [`exclude_tags`](#exclude-tags)
- [`skip`](#skip)
- [`only`](#only)
- [`jobs`](#jobs)
  - [`name`](#name)
  - [`run`](#run)
  - [`script`](#script)
  - [`runner`](#runner)
  - [`group`](#group)
    - [`parallel`](#parallel)
    - [`piped`](#piped)
    - [`jobs`](#jobs)
  - [`skip`](#skip)
  - [`only`](#only)
  - [`tags`](#tags)
  - [`glob`](#glob)
  - [`files`](#files)
  - [`file_types`](#file-types)
  - [`env`](#env)
  - [`root`](#root)
  - [`exclude`](#exclude)
  - [`fail_text`](#fail-text)
  - [`stage_fixed`](#stage-fixed)
  - [`interactive`](#interactive)
  - [`use_stdin`](#use-stdin)
- [`commands`](#commands)
  - [`run`](#run)
  - [`skip`](#skip)
  - [`only`](#only)
  - [`tags`](#tags)
  - [`glob`](#glob)
  - [`files`](#files)
  - [`file_types`](#file-types)
  - [`env`](#env)
  - [`root`](#root)
  - [`exclude`](#exclude)
  - [`fail_text`](#fail-text)
  - [`stage_fixed`](#stage-fixed)
  - [`interactive`](#interactive)
  - [`use_stdin`](#use-stdin)
  - [`priority`](#priority)
- [`scripts`](#scripts)
  - [`runner`](#runner)
  - [`skip`](#skip)
  - [`only`](#only)
  - [`tags`](#tags)
  - [`env`](#env)
  - [`fail_text`](#fail-text)
  - [`stage_fixed`](#stage-fixed)
  - [`interactive`](#interactive)
  - [`use_stdin`](#use-stdin)
  - [`priority`](#priority)


#### `files`

###### `files` (global)

A custom command executed by the `sh` shell that returns the files or directories to be referenced in `{files}` template. See [`run`](#run) and [`files`](#files).

If the result of this command is empty, the execution of commands will be skipped.

**Example**

```yml
# lefthook.yml

pre-commit:
  files: git diff --name-only master # custom list of files
  commands:
    ...
```


#### `parallel`

###### `parallel`

**Default: `false`**

> **Note:** Lefthook runs commands and scripts **sequentially** by default

Run commands and scripts concurrently.


#### `piped`

###### `piped`

**Default: `false`**

> **Note:** Lefthook will return an error if both `piped: true` and `parallel: true` are set

Stop running commands and scripts if one of them fail.

**Example**

```yml
# lefthook.yml

database:
  piped: true # Stop if one of the steps fail
  commands:
    1_create:
      run: rake db:create
    2_migrate:
      run: rake db:migrate
    3_seed:
      run: rake db:seed
```


#### `follow`

###### `follow`

**Default: `false`**

Follow the STDOUT of the running commands and scripts.

**Example**

```yml
# lefthook.yml

pre-push:
  follow: true
  commands:
    backend-tests:
      run: bundle exec rspec
    frontend-tests:
      run: yarn test
```

> **Note:** If used with [`parallel`](#parallel) the output can be a mess, so please avoid setting both options to `true`


#### `fail_on_changes`

##### fail_on_changes

The behaviour of lefthook when files (tracked by git) are modified can set by modifying the `fail_on_changes` configuration parameter. The possible values are:

- `never`: never exit with a non-zero status if files were modified (default).
- `always`: always exit with a non-zero status if files were modified.
- `ci`: exit with a non-zero status only when `CI` environment variable is set. This can be useful when combined with `stage_fixed` to ensure a frictionless devX locally, and a robust CI. 

```yml
# lefthook.yml
pre-commit:
  parallel: true
  fail_on_changes: "always"
  commands:
    lint:
      run: yarn lint
    test:
      run: yarn test


#### `exclude_tags`

###### `exclude_tags`

[Tags](#tags) or command names that you want to exclude. This option can be overwritten with `LEFTHOOK_EXCLUDE` env variable.

**Example**

```yml
# lefthook.yml

pre-commit:
  exclude_tags: frontend
  commands:
    lint:
      tags: frontend
      ...
    test:
      tags: frontend
      ...
    check-syntax:
      tags: documentation
```

```bash
lefthook run pre-commit # will only run check-syntax command
```

**Notes**

This option is good to specify in `lefthook-local.yml` when you want to skip some execution locally.

```yml
# lefthook.yml

pre-push:
  commands:
    packages-audit:
      tags:
        - frontend
        - security
      run: yarn audit
    gems-audit:
      tags:
        - backend
        - security
      run: bundle audit
```

You can skip commands by tags:

```yml
# lefthook-local.yml

pre-push:
  exclude_tags:
    - frontend
```


#### `exclude`

###### `exclude`

This option allows to setup a list of globs for files to be excluded in files template.

**Example**

Run Rubocop on staged files with `.rb` extension except for `application.rb`, `routes.rb`, `rails_helper.rb`, and all Ruby files in `config/initializers/`.

```yml
# lefthook.yml

pre-commit:
  jobs:
    - name: lint
      glob: "*.rb"
      exclude:
        - config/routes.rb
        - config/application.rb
        - config/initializers/*.rb
        - spec/rails_helper.rb
      run: bundle exec rubocop --force-exclusion {staged_files}
```

If you've specified `exclude` but don't have a files template in [`run`](#run) option, lefthook will check `{staged_files}` for `pre-commit` hook and `{push_files}` for `pre-push` hook and apply filtering. If no files left, the command will be skipped.

```yml
# lefthook.yml

pre-commit:
  exclude:
    - "*/application.rb"
  jobs:
    - name: lint
      run: bundle exec rubocop # will skip if only application.rb was staged
```


#### `skip`

###### `skip`

You can skip all or specific commands and scripts using `skip` option. You can also skip when merging, rebasing, or being on a specific branch. Globs are available for branches.

Possible skip values:
- `rebase` - when in rebase git state
- `merge` - when in merge git state
- `merge-commit` - when current HEAD commit is the merge commit
- `ref: main` - when on a `main` branch
- `run: test ${SKIP_ME} -eq 1` - when `test ${SKIP_ME} -eq 1` is successful (return code is 0)

**Example**

Always skipping a command:

```yml
# lefthook.yml

pre-commit:
  commands:
    lint:
      skip: true
      run: yarn lint
```

Skipping on merging and rebasing:

```yml
# lefthook.yml

pre-commit:
  commands:
    lint:
      skip:
        - merge
        - rebase
      run: yarn lint
```

Or

```yml
# lefthook.yml

pre-commit:
  commands:
    lint:
      skip: merge
      run: yarn lint
```

Skipping when your are on a merge commit:

```yml
# lefthook.yml

pre-push:
  commands:
    lint:
      skip: merge-commit
      run: yarn lint
```

Skipping the whole hook on `main` branch:

```yml
# lefthook.yml

pre-commit:
  skip:
    - ref: main
  commands:
    lint:
      run: yarn lint
    test:
      run: yarn test
```

Skipping hook for all `dev/*` branches:

```yml
# lefthook.yml

pre-commit:
  skip:
    - ref: dev/*
  commands:
    lint:
      run: yarn lint
    test:
      run: yarn test
```

Skipping hook by running a command:

```yml
# lefthook.yml

pre-commit:
  skip:
    - run: test "${NO_HOOK}" -eq 1
  commands:
    lint:
      run: yarn lint
    test:
      run: yarn test
```

> TIP
>
> Always skipping is useful when you have a `lefthook-local.yml` config and you don't want to run some commands locally. So you just overwrite the `skip` option for them to be `true`.
>
> ```yml
> # lefthook.yml
>
> pre-commit:
>   commands:
>     lint:
>       run: yarn lint
> ```
>
> ```yml
> # lefthook-local.yml
>
> pre-commit:
>   commands:
>     lint:
>       skip: true
> ```


#### `only`

###### `only`

You can force a command, script, or the whole hook to execute only in certain conditions. This option acts like the opposite of [`skip`](#skip). It accepts the same values but skips execution only if the condition is not satisfied.

> **Note:** `skip` option takes precedence over `only` option, so if you have conflicting conditions the execution will be skipped.

**Example**

Execute a hook only for `dev/*` branches.

```yml
# lefthook.yml

pre-commit:
  only:
    - ref: dev/*
  commands:
    lint:
      run: yarn lint
    test:
      run: yarn test
```

When rebasing execute quick linter but skip usual linter and tests.

```yml
# lefthook.yml

pre-commit:
  commands:
    lint:
      skip: rebase
      run: yarn lint
    test:
      skip: rebase
      run: yarn test
    lint-on-rebase:
      only: rebase
      run: yarn lint-quickly
```


#### `jobs`

###### `jobs`

> Added in lefthook `1.10.0`

Jobs provide a flexible way to define tasks, supporting both commands and scripts. Jobs can be grouped for advanced flow control.

###### Basic example

Define jobs in your `lefthook.yml` file under a specific hook like `pre-commit`:

```yml
# lefthook.yml

pre-commit:
  jobs:
    - run: yarn lint
    - run: yarn test
```

###### Differences from Commands and Scripts

**Optional Job Names**

- Named jobs are merged across [`extends`](#extends) and local config.
- Unnamed jobs are appended in the order of their definition.

**Job Groups**

- Groups can include other jobs.
- Flow within groups can be parallel or piped. Options `glob`, `root`, and `exclude` apply to all jobs in the group, including nested ones.

###### Job options

Below are the available options for configuring jobs.

- [`name`](#name)
- [`run`](#run)
- [`script`](#script)
- [`runner`](#runner)
- [`group`](#group)
  - [`parallel`](#parallel)
  - [`piped`](#piped)
  - [`jobs`](#jobs)
- [`skip`](#skip)
- [`only`](#only)
- [`tags`](#tags)
- [`glob`](#glob)
- [`files`](#files)
- [`file_types`](#file-types)
- [`env`](#env)
- [`root`](#root)
- [`exclude`](#exclude)
- [`fail_text`](#fail-text)
- [`stage_fixed`](#stage-fixed)
- [`interactive`](#interactive)
- [`use_stdin`](#use-stdin)

###### Example

> **Note:** Currently, only `root`, `glob`, and `exclude` options are applied to group jobs. Other options must be set for each job individually. Submit a [feature request](https://github.com/evilmartians/lefthook/issues/new?assignees=&labels=feature+request&projects=&template=feature_request.md) if this limits your workflow.

A configuration demonstrating a piped group running in parallel with other jobs:

```yml
# lefthook.yml

pre-commit:
  parallel: true
  jobs:
    - name: migrate
      root: backend/
      glob: "db/migrations/*"
      group:
        piped: true
        jobs:
          - run: bundle install
          - run: rails db:migrate
    - run: yarn lint --fix {staged_files}
      root: frontend/
      stage_fixed: true
    - run: bundle exec rubocop
      root: backend/
    - run: golangci-lint
      root: proxy/
    - script: verify.sh
      runner: bash
```

This configuration runs migrate jobs in a piped flow while other jobs execute in parallel.


##### `name`

###### `name`

Name of a job. Will be printed in summary. If specified, the jobs can be merged with a jobs of the same name in a [local config](#local-config) or [extends](#extends).

###### Example

```yml
# lefthook.yml

pre-commit:
  jobs:
    - name: lint and fix
      run: yarn run eslint --fix {staged_files}
```


##### `run`

###### `run`

This is a mandatory option for a command, which specifies the actual command to be run using the `sh` shell.

You can use files templates that will be substituted with the appropriate files on execution:

- `{files}` - custom [`files`](#files) command result.
- `{staged_files}` - staged files which you try to commit.
- `{push_files}` - files that are committed but not pushed.
- `{all_files}` - all files tracked by git.
- `{cmd}` - shorthand for the command from `lefthook.yml`.
- `{0}` - shorthand for the single space-joint string of git hook arguments.
- `{N}` - shorthand for the N-th git hook argument.
- `{lefthook_job_name}` - current job/command/script name

> **Note:** Command line length has a limit on every system. If your list of files is quite long, lefthook splits your files list to fit in the limit and runs few commands sequentially.

**Example**

Run `yarn lint` on `pre-commit` hook.

```yml
# lefthook.yml

pre-commit:
  commands:
    lint:
      run: yarn lint
```

###### `{files}` template

Run `go vet` only on files listed with `git ls-files -m` command with `.go` extension.

```yml
# lefthook.yml

pre-commit:
  commands:
    govet:
      files: git ls-files -m
      glob: "*.go"
      run: go vet {files}
```

###### `{staged_files}` template

Run `yarn eslint` only on staged files with `.js`, `.ts`, `.jsx`, and `.tsx` extensions.

```yml
# lefthook.yml

pre-commit:
  commands:
    eslint:
      glob: "*.{js,ts,jsx,tsx}"
      run: yarn eslint {staged_files}
```

###### `{push_files}` template

If you want to lint files only before pushing them.

```yml
# lefthook.yml

pre-push:
  commands:
    eslint:
      glob: "*.{js,ts,jsx,tsx}"
      run: yarn eslint {push_files}
```

###### `{all_files}` template

Simply run `bundle exec rubocop` on all files with `.rb` extension excluding `application.rb` and `routes.rb` files.

> **Note:** `--force-exclusion` will apply `Exclude` configuration setting of Rubocop

```yml
# lefthook.yml

pre-commit:
  commands:
    rubocop:
      tags:
        - backend
        - style
      glob: "*.rb"
      exclude:
        - config/application.rb
        - config/routes.rb
      run: bundle exec rubocop --force-exclusion {all_files}
```

###### `{cmd}` template

```yml
# lefthook.yml

pre-commit:
  commands:
    lint:
      run: yarn lint
  scripts:
    "good_job.js":
      runner: node
```

You can wrap it in docker runner locally:

```yml
# lefthook-local.yml

pre-commit:
  commands:
    lint:
      run: docker run -it --rm <container_id_or_name> {cmd}
  scripts:
    "good_job.js":
      runner: docker run -it --rm <container_id_or_name> {cmd}
```

###### Git arguments

Make sure commits are signed.

```yml
# lefthook.yml

# Note: commit-msg hook takes a single parameter,
#       the name of the file that holds the proposed commit log message.
# Source: https://git-scm.com/docs/githooks#_commit_msg
commit-msg:
  commands:
    multiple-sign-off:
      run: 'test $(grep -c "^Signed-off-by: " {1}) -lt 2'
```

###### Rubocop

If using `{all_files}` with RuboCop, it will ignore RuboCop's `Exclude` configuration setting. To avoid this, pass `--force-exclusion`.

###### Quotes

If you want to have all your files quoted with double quotes `"` or single quotes `'`, quote the appropriate shorthand:

```yml
# lefthook.yml

pre-commit:
  commands:
    lint:
      glob: "*.js"
      # Quoting with double quotes `"` might be helpful for Windows users
      run: yarn eslint "{staged_files}" # will run `yarn eslint "file1.js" "file2.js" "[strange name].js"`
    test:
      glob: "*.{spec.js}"
      run: yarn test '{staged_files}' # will run `yarn eslint 'file1.spec.js' 'file2.spec.js' '[strange name].spec.js'`
    format:
      glob: "*.js"
      # Will quote where needed with single quotes
      run: yarn test {staged_files} # will run `yarn eslint file1.js file2.js '[strange name].spec.js'`
```

###### Scripts

```yml
# lefthook.yml

pre-commit:
  jobs:
    - name: a whole script in a run
      run: |
        for file in $(ls .); do
          yarn lint $file
        done
```


##### `script`

###### `script`

Name of a script to execute. The rules are the same as for [`scripts`](#scripts)

###### Example

```yml
# lefthook.yml

pre-commit:
  jobs:
    - script: linter.sh
      runner: bash
```

```bash
# .lefthook/pre-commit/linter.sh

echo "Everything is OK"
```


##### `runner`

###### `runner`

You should specify a runner for the script. This is a command that should execute a script file. It will be called the following way: `<runner> <path-to-script>` (e.g. `ruby .lefthook/pre-commit/lint.rb`).

**Example**

```yml
# lefthook.yml

pre-commit:
  scripts:
    "lint.js":
      runner: node
    "check.go":
      runner: go run
```


##### `group`

###### `group`

You can define a group of jobs and configure how they should execute using the following options:

- [`parallel`](#parallel): Executes all jobs in the group simultaneously.
- [`piped`](#piped): Executes jobs sequentially, passing output between them.
- [`jobs`](#jobs): Specifies the jobs within the group.

###### Example

```yml
# lefthook.yml

pre-commit:
  jobs:
    - group:
        parallel: true
        jobs:
          - run: echo 1
          - run: echo 2
          - run: echo 3
```

If you specify `env`, `root`, `glob`, or `exclude` on a group, they will be inherited to the underlying jobs.

```yml
# lefthook.yml

pre-commit:
  jobs:
    - env:
        E1: hello
      glob:
        - "*.md"
      exclude:
        - "README.md"
      root: "subdir/"
      group:
        parallel: true
        jobs:
          - run: echo $E1
          - run: echo $E1
            env:
              E1: bonjour
```

> **Note:** To make a group mergeable with settings defined in local config or extends you have to specify the name of the job group belongs to:
> ```yml
> pre-commit:
>   jobs:
>     - name: a name of a group
>       group:
>         jobs:
>           - name: lint
>             run: yarn lint
>           - name: test
>             run: yarn test
> ```


##### `tags`

###### `tags`

You can specify tags for commands and scripts. This is useful for [excluding](#excluding). You can specify more than one tag using comma.

**Example**

```yml
# lefthook.yml

pre-commit:
  commands:
    lint:
      tags:
        - frontend
        - js
      run: yarn lint
    test:
      tags:
        - backend
        - ruby
      run: bundle exec rspec
```


##### `glob`

###### `glob`

You can set a glob to filter files for your command. This is only used if you use a file template in [`run`](#run) option or provide your custom [`files`](#files) command.

**Example**

```yml
# lefthook.yml

pre-commit:
  jobs:
    - name: lint
      run: yarn eslint {staged_files}
      glob: "*.{js,ts,jsx,tsx}"
```

> **Note:** from lefthook version `1.10.10` you can also provide a list of globs:
>
> ```yml
> # lefthook.yml
>
> pre-commit:
>   jobs:
>     - run: yarn lint {staged_files}
>       glob:
>         - "*.ts"
>         - "*.js"
> ```

**Notes**

For patterns that you can use see [this](https://tldp.org/LDP/GNU-Linux-Tools-Summary/html/x11655.htm) reference. We use [glob](https://github.com/gobwas/glob) library.

***When using `root:`***

Globs are still calculated from the actual root of the git repo, `root` is ignored.

***Behaviour of `**`***

Note that the behaviour of `**` is different from typical glob implementations, like `ls` or tools like `lint-staged` in that a double-asterisk matches 1+ directories deep, not zero or more directories.
If you want to match *both* files at the top level and nested, then rather than:

```yaml
glob: "src/**/*.js"
```

You'll need:

```yaml
glob: "src/*.js"
```

***Using `glob` without a files template in`run`***

If you've specified `glob` but don't have a files template in [`run`](#run) option, lefthook will check `{staged_files}` for `pre-commit` hook and `{push_files}` for `pre-push` hook and apply filtering. If no files left, the command will be skipped.

```yml
# lefthook.yml

pre-commit:
  jobs:
    - name: lint
      run: npm run lint # skipped if no .js files staged
      glob: "*.js"
```


##### `files`

###### `files`

A custom command executed by the `sh` shell that returns the files or directories to be referenced in `{files}` template for [`run`](#run) setting.

If the result of this command is empty, the execution of commands will be skipped.

This option overwrites the [hook-level `files`](#hook-level-files) option.

**Example**

Provide a git command to list files.

```yml
# lefthook.yml

pre-push:
  commands:
    stylelint:
      tags:
        - frontend
        - style
      files: git diff --name-only master
      glob: "*.js"
      run: yarn stylelint {files}
```

Call a custom script for listing files.

```yml
# lefthook.yml

pre-push:
  commands:
    rubocop:
      tags: backend
      glob: "**/*.rb"
      files: node ./lefthook-scripts/ls-files.js # you can call your own scripts
      run: bundle exec rubocop --force-exclusion --parallel {files}
```


##### `file_types`

###### `file_types`

Filter files in a [`run`](#run) templates by their type. Special file types and MIME types are supported[^1]:

|File type| Exlanation|
|---------|-----------|
|`text`   | Any file that contains text. Symlinks are not followed. |
|`binary` | Any file that contains non-text bytes. Symlinks are not followed. |
|`executable` | Any file that has executable bits set. Symlinks are not followed. |
|`not executable` | Any file without executable bits in file mode. Symlinks included. |
|`symlink` | A symlink file. |
|`not symlink` | Any non-symlink file. |
|`text/html` | An HTML file. |
|`text/xml`  | An XML file. |
|`text/javascript` | A Javascript file. |
|`text/x-php` | A PHP file. |
|`text/x-lua` | A Lua file. |
|`text/x-perl` | A Perl file. |
|`text/x-python` | A Python file. |
|`text/x-shellscript` | Shell script file. |
|`text/x-sh` | Also shell script file. |
|`application/json` | JSON file. |

> **Important**
> The following types are applied using AND logic:
> - text
> - binary
> - executable
> - not executable
> - symlink
> - not symlink
>
> The mime types are applied using OR logic. So, you can have both `text/x-lua` and `text/x-sh`, but you can't specify both `symlink` and `not symlink`.

**Examples**

Apply some different linters on text and binary files.

```yml
# lefthook.yml

pre-commit:
  commands:
    lint-code:
      run: yarn lint {staged_files}
      file_types: text
    check-hex-codes:
      run: yarn check-hex {staged_files}
      file_types: binary
```

Skip symlinks.

```yml
# lefthook.yml

pre-commit:
  commands:
    lint:
      run: yarn lint --fix {staged_files}
      file_types:
        - not symlink
```

Lint executable scripts.

```yml
# lefthook.yml

pre-commit:
  commands:
    lint:
      run: yarn lint --fix {staged_files}
      file_types:
        - executable
        - text
```

Check typos in scripts.

```yml
# lefthook.yml

pre-commit:
  jobs:
    - run: typos -w {staged_files}
      file_types:
        - text/x-perl
        - text/x-python
        - text/x-php
        - text/x-lua
        - text/x-sh
```

[^1]: All supported MIME types can be found here: [supported_mimes.md](https://github.com/gabriel-vasile/mimetype/blob/v1.4.11/supported_mimes.md)


##### `env`

###### `env`

You can specify some ENV variables for the command or script.

**Example**

```yml
# lefthook.yml

pre-commit:
  commands:
    test:
      env:
        RAILS_ENV: test
      run: bundle exec rspec
```

###### Extending PATH

If your hook is run by GUI program, and you use some PATH tweaks in your ~/.<shell>rc, you might see an error saying *executable not found*. In that case You can extend the **$PATH** variable with `lefthook-local.yml` configuration the following way.

```yml
# lefthook.yml

pre-commit:
  commands:
    test:
      run: yarn test
```

```yml
# lefthook-local.yml

pre-commit:
  commands:
    test:
      env:
        PATH: $PATH:/home/me/path/to/yarn
```

**Notes**

This option is useful when using lefthook on different OSes or shells where ENV variables are set in different ways.


##### `root`

###### `root`

You can change the CWD for the command you execute using `root` option.

This is useful when you execute some `npm` or `yarn` command but the `package.json` is in another directory.

For `pre-push` and `pre-commit` hooks and for the custom `files` command `root` option is used to filter file paths. If all files are filtered the command will be skipped.

**Example**

Format and stage files from a `client/` folder.

```bash
# Folders structure

$ tree .
.
├── client/
│   ├── package.json
│   ├── node_modules/
|   ├── ...
├── server/
|   ...
```

```yml
# lefthook.yml

pre-commit:
  commands:
    lint:
      root: "client/"
      glob: "*.{js,ts}"
      run: yarn eslint --fix {staged_files} && git add {staged_files}
```

**Notes**

***When using `root:`***

Globs are still calculated from the actual root of the git repo, `root` is ignored.


##### `fail_text`

###### `fail_text`

You can specify a text to show when the command or script fails.

**Example**

```yml
# lefthook.yml

pre-commit:
  commands:
    lint:
      run: yarn lint
      fail_text: Add node executable to $PATH
```

```bash
$ git commit -m 'fix: Some bug'

Lefthook v1.1.3
RUNNING HOOK: pre-commit

  EXECUTE > lint

SUMMARY: (done in 0.01 seconds)
🥊  lint: Add node executable to $PATH env
```


##### `stage_fixed`

###### `stage_fixed`

**Default: `false`**

> Works **only for `pre-commit`** hook

When set to `true` lefthook will automatically call `git add` on files after running the command or script. For a command if [`files`](#files) option was specified, the specified command will be used to retrieve files for `git add`. For scripts and commands without [`files`](#files) option `{staged_files}` template will be used. All filters ([`glob`](#glob), [`exclude`](#exclude)) will be applied if specified.

**Example**

```yml
# lefthook.yml

pre-commit:
  commands:
    lint:
      run: npm run lint --fix {staged_files}
      stage_fixed: true
```



##### `interactive`

###### `interactive`

**Default: `false`**

> **Note:** If you want to pass stdin to your command or script but don't need to get the input from CLI, use [`use_stdin`](#use-stdin) option instead.


Whether to use interactive mode. This applies the certain behavior:
- All `interactive` commands/scripts are executed after non-interactive. Exception: [`piped`](#piped) option is set to `true`.
- When executing, lefthook tries to open /dev/tty (Linux/Unix only) and use it as stdin.
- When [`no_tty`](#no-tty) option is set, `interactive` is ignored.


##### `use_stdin`

###### `use_stdin`

> **Note:** With many commands or scripts having `use_stdin: true`, only one will receive the data. The others will have nothing. If you need to pass the data from stdin to every command or script, please, submit a [feature request](https://github.com/evilmartians/lefthook/issues/new?assignees=&labels=feature+request&projects=&template=feature_request.md).

Pass the stdin from the OS to the command/script.

**Example**

Use this option for the `pre-push` hook when you have a script that does `while read ...`. Without this option lefthook will hang: lefthook uses [pseudo TTY](https://github.com/creack/pty) by default, and it doesn't close stdin when all data is read.

```bash
# .lefthook/pre-push/do-the-magic.sh

remote="$1"
url="$2"

while read local_ref local_oid remote_ref remote_oid; do
  # ...
done
```

```yml
# lefthook.yml
pre-push:
  scripts:
    "do-the-magic.sh":
      runner: bash
      use_stdin: true
```


#### `commands`

###### `commands`

Commands to be executed for the hook. Each command has a name and associated run [options](#command).

**Example**

```yml
# lefthook.yml

pre-commit:
  commands:
    lint:
      ... # command options
```

###### Command options

- [`run`](#run)
- [`skip`](#skip)
- [`only`](#only)
- [`tags`](#tags)
- [`glob`](#glob)
- [`files`](#files)
- [`file_types`](#file-types)
- [`env`](#env)
- [`root`](#root)
- [`exclude`](#exclude)
- [`fail_text`](#fail-text)
- [`stage_fixed`](#stage-fixed)
- [`interactive`](#interactive)
- [`use_stdin`](#use-stdin)
- [`priority`](#priority)


##### `priority`

###### `priority`

**Default: `0`**

> **Note:** This option makes sense only when `parallel: false` or `piped: true` is set.
>
> Value `0` is considered an `+Infinity`, so commands or scripts with `priority: 0` or without this setting will be run at the very end.

Set priority from 1 to +Infinity. This option can be used to configure the order of the sequential steps.

**Example**

```yml
# lefthook.yml

post-checkout:
  piped: true
  commands:
    db-create:
      priority: 1
      run: rails db:create
    db-migrate:
      priority: 2
      run: rails db:migrate
    db-seed:
      priority: 3
      run: rails db:seed

  scripts:
    "check-spelling.sh":
      runner: bash
      priority: 1
    "check-grammar.rb":
      runner: ruby
      priority: 2
```


#### `scripts`

###### Scripts

Scripts are stored under `<source_dir>/<hook-name>/` folder. These scripts are your own executables which are being run in the project root.

To add a script for a `pre-commit` hook:

1. Run `lefthook add -d pre-commit`
1. Edit `.lefthook/pre-commit/my-script.sh`
1. Add an entry to `lefthook.yml`
   ```yml
   # lefthook.yml

   pre-commit:
     scripts:
       "my-script.sh":
         runner: bash
   ```

###### Script options

- [`runner`](#runner)
- [`skip`](#skip)
- [`only`](#only)
- [`tags`](#tags)
- [`env`](#env)
- [`fail_text`](#fail-text)
- [`stage_fixed`](#stage-fixed)
- [`interactive`](#interactive)
- [`use_stdin`](#use-stdin)
- [`priority`](#priority)

###### Example

Let's create a bash script to check commit templates `.lefthook/commit-msg/template_checker`:

```bash
INPUT_FILE=$1
START_LINE=`head -n1 $INPUT_FILE`
PATTERN="^(TICKET)-[[:digit:]]+: "
if ! [[ "$START_LINE" =~ $PATTERN ]]; then
  echo "Bad commit message, see example: TICKET-123: some text"
  exit 1
fi
```

Now we can ask lefthook to run our bash script by adding this code to
`lefthook.yml` file:

```yml
# lefthook.yml

commit-msg:
  scripts:
    "template_checker":
      runner: bash
```

When you try to commit `git commit -m "bad commit text"` script `template_checker` will be executed. Since commit text doesn't match the described pattern the commit process will be interrupted.


## ENV variables

#### ENV variables

> ENV variables control some lefthook behavior. Most of them have the alternative CLI or config options.

{{#include ./envs/LEFTHOOK.md}}
{{#include ./envs/LEFTHOOK_BIN.md}}
{{#include ./envs/LEFTHOOK_OUTPUT.md}}
{{#include ./envs/LEFTHOOK_VERBOSE.md}}
{{#include ./envs/LEFTHOOK_CONFIG.md}}
{{#include ./envs/LEFTHOOK_EXCLUDE.md}}
{{#include ./envs/NO_COLOR.md}}
{{#include ./envs/CLICOLOR_FORCE.md}}
{{#include ./envs/CI.md}}


### LEFTHOOK

##### `LEFTHOOK`

Use `LEFTHOOK=0 git ...` or `LEFTHOOK=false git ...` to disable lefthook when running git commands.

**Example**

```bash
LEFTHOOK=0 git commit -am "Lefthook skipped"
```

When using NPM package `lefthook` in CI, and your CI sets `CI=true` automatically, use `LEFTHOOK=1` or `LEFTHOOK=true` to install hooks in the postinstall script:

**Example**

```bash
LEFTHOOK=1 npm install
LEFTHOOK=1 yarn install
LEFTHOOK=1 pnpm install
```



### LEFTHOOK_VERBOSE

##### `LEFTHOOK_VERBOSE`

Set `LEFTHOOK_VERBOSE=1` or `LEFTHOOK_VERBOSE=true` to enable verbose printing.



### LEFTHOOK_OUTPUT

##### `LEFTHOOK_OUTPUT`

Use `LEFTHOOK_OUTPUT={list of output values}` to specify what to print in your output. You can also set `LEFTHOOK_OUTPUT=false` to disable all output except for errors. Refer to the [`output`](#output) configuration option for more details.

**Example**

```bash
$ LEFTHOOK_OUTPUT=summary lefthook run pre-commit
summary: (done in 0.52 seconds)
✔️  lint
```



### LEFTHOOK_CONFIG

##### `LEFTHOOK_CONFIG`

Override the main lefthook config with `LEFTHOOK_CONFIG=~/global_lefthook.yml`. Note: local config, specified extends, and remotes will still be loaded.


### LEFTHOOK_EXCLUDE

##### `LEFTHOOK_EXCLUDE`

Use `LEFTHOOK_EXCLUDE={list of tags or command names to be excluded}` to skip some commands or scripts by tag or name (for commands only). See the [`exclude_tags`](#exclude-tags) configuration option for more details.

**Example**

```bash
LEFTHOOK_EXCLUDE=ruby,security,lint git commit -am "Skip some tag checks"
```


### CLICOLOR_FORCE

##### `CLICOLOR_FORCE`

Set `CLICOLOR_FORCE=true` to force colored output in lefthook and all subcommands.


### NO_COLOR

##### `NO_COLOR`

Set `NO_COLOR=true` to disable colored output in lefthook and all subcommands that lefthook calls.



### CI

##### `CI`

When using NPM package `lefthook`, set `CI=true` in your CI (if it does not set it automatically) to prevent lefthook from installing hooks in the postinstall script:

```bash
CI=true npm install
CI=true yarn install
CI=true pnpm install
```

> **Note:** Set `LEFTHOOK=1` or `LEFTHOOK=true` to override this behavior and install hooks in the postinstall script (despite `CI=true`).



# Examples


## Using local only config

#### lefthook-local.yml

> **Tip:** You can put `lefthook-local.yml` into your `~/.gitignore`, so in every project you can have your local-only overrides.

`lefthook-local.yml` overrides and extends the configuration of your main `lefthook.yml`.

```yml
# lefthook.yml

pre-commit:
  commands:
    lint:
      run: bundle exec rubocop {staged_files}
      glob: "*.rb"
    check-links:
      run: lychee {staged_files}
```

```yml
# lefthook-local.yml

pre-commit:
  parallel: true # run all commands concurrently
  commands:
    lint:
      run: docker-compose run backend {cmd} # wrap the original command with docker-compose
    check-links:
      skip: true # skip checking links

# Add another hook
post-merge:
  files: "git diff-tree -r --name-only --no-commit-id ORIG_HEAD HEAD"
  commands:
    dependencies:
      glob: "Gemfile*"
      run: docker-compose run backend bundle install
```

---

##### The merged config lefthook will use

```yml

pre-commit:
  parallel: true
  commands:
    lint:
      run: docker-compose run backend bundle exec rubocop {staged_files}
      glob: "*.rb"
    check-links:
      run: lychee {staged_files}
      skip: true

post-merge:
  files: "git diff-tree -r --name-only --no-commit-id ORIG_HEAD HEAD"
  commands:
    dependencies:
      glob: "Gemfile*"
      run: docker-compose run backend bundle install
```


## Wrap commands locally

### Wrap commands in local config

Wrapping some commands defined in a main config with `dip`[^1].

```yml
# lefthook.yml

pre-commit:
  jobs:
    - name: rubocop
      run: bundle exec rubocop -A {staged_files}
```

```yml
# lefthook-local.yml

pre-commit:
  jobs:
    - name: rubocop
      run: dip {cmd}
```

[^1]: [dip](https://github.com/bibendi/dip) – dockerized dev experience with, similar to `docker-compose run`


## Auto add linter fixes to commit

#### Stage fixed files

> Works only for `pre-commit` Git hook

Sometimes your linter fixes the changes and you usually want to commit them automatically. To enable auto-staging of the fixed files use [`stage_fixed`](#stage-fixed) option.

```yml
# lefthook.yml

pre-commit:
  commands:
    lint:
      run: yarn lint {staged_files} --fix
      stage_fixed: true
```


## Filter files

#### Filters

Files passed to your hooks can be filtered with the following options

- [`glob`](#glob)
- [`exclude`](#exclude)
- [`file_types`](#file-types)
- [`root`](#root)

In this example all **staged files** will pass through these filters.

```yml
# lefthook.yml

pre-commit:
  commands:
    lint:
      run: yarn lint {staged_files} --fix
      glob: "*.{js,ts}"
      root: frontend
      exclude:
        - *.config.js
        - *.config.ts
      file_types:
        - not executable
```

Imagine you've staged the following files

```bash
backend/asset.js
frontend/src/index.ts
frontend/bin/cli.js # <- executable
frontend/eslint.config.js
frontend/README.md
```

After all filters applied the `lint` command will execute the following:

```bash
yarn lint frontend/src/index.ts --fix
```


## Skip or run on condition

#### Skip or run on condition

Here are two hooks.

`pre-commit` hook will only be executed when you're committing something on a branch starting with `def/` prefix.

In `pre-push` hook:
- `test` command will be skipped if `NO_TEST` env variable is set to `1`
- `lint` command will only be executed if you're pushing the `main` branch

```yml
# lefthook.yml

pre-commit:
  only:
    - ref: dev/*
  commands:
    lint:
      run: yarn lint {staged_files} --fix
      glob: "*.{ts,js}"
    test:
      run: yarn test

pre-push:
  commands:
    test:
      run: yarn test
      skip:
        - run: test "$NO_TEST" -eq 1
    lint:
      run: yarn lint
      only:
        - ref: main
```


## Remote configs

#### Remotes

Use configurations from other Git repositories via `remotes` feature.

Lefthook will automatically download the remote config files and merge them into existing configuration.

```yml
remotes:
  - git_url: https://github.com/evilmartians/lefthook
    configs:
      - examples/remote/ping.yml
```


## With commitlint

#### Commitlint and commitzen

Use lefthook to generate commit messages using commitzen and validate them with commitlint.

#### Install dependencies

```bash
yarn add -D @commitlint/cli @commitlint/config-conventional

# For commitzen
yarn add -D commitizen cz-conventional-changelog
```

#### Configure

Setup `commitlint.config.js`. Conventional configuration:

```js
// commitlint.config.js

module.exports = {extends: ['@commitlint/config-conventional']};
```

If you are using commitzen, make sure to add this in `package.json`:

```json
"config": {
  "commitizen": {
    "path": "./node_modules/cz-conventional-changelog"
  }
}
```

Configure lefthook:

```yml
# lefthook.yml

# Build commit messages
prepare-commit-msg:
  commands:
    commitzen:
      interactive: true
      run: yarn run cz --hook # Or npx cz --hook
      env:
        LEFTHOOK: 0

# Validate commit messages
commit-msg:
  commands:
    "lint commit message":
      run: yarn run commitlint --edit {1}
```


#### Test it

```bash
# You can type it without message, if you are using commitzen
git commit

# Or provide a commit message is using only commitlint
git commit -am 'fix: typo'
```


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

*This documentation was automatically generated on 2025-11-09 from the [official Lefthook repository](https://github.com/evilmartians/lefthook).*
