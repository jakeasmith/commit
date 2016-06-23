# Standardized Commit Messages

A tool to aid in standardizing commit messages. Based on this wonderful emoji based [standard Git Commit Message format by @slashsBin](https://github.com/slashsBin/styleguide-git-commit-message).

![Example output](docs/example.gif)

## Setup

- Clone the repo
- Run `composer install`
- Set Git's file editor to use the included `bin/commit` with something like `export GIT_EDITOR=/your/path/to/commit-repo/bin/commit`

## Known issues
- The 80 character limit of the subject line is not enforced.

## Copyright
The smacme/commit library is copyright © Jake A. Smith and licensed for use under the MIT License (MIT). Please see LICENSE for more information.
