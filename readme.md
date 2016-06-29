# Standardized Commit Messages

A tool to aid in standardizing commit messages. Based on this wonderful emoji based [standard Git Commit Message format by @slashsBin](https://github.com/slashsBin/styleguide-git-commit-message).

![Example output](docs/example.gif)

## Setup

- Clone the repo
- Run `composer install`
- Set Git's file editor to use the included `bin/commit` with something like `export GIT_EDITOR=/your/path/to/commit-repo/bin/commit`

## Known issues
- Git uses the `#` character to signify comment lines that should be ignored causing ticket numbers to be ignored when not prefixed with any other characters. As of Git 1.8.2 [a config value](https://github.com/git/git/blob/master/Documentation/RelNotes/1.8.2.txt#L98) is available to customize the comment character.

## Feature requests and bugs
Find a bug? Have an idea to make this better? Go to the [Issues tab in GitHub](https://github.com/jakeasmith/commit/issues) and open up a ticket! Just have a comment? My twitter handle is [@jakeasmith](https://twitter.com/jakeasmith).

## Contributing
All PRs are welcome but you might want to open up an issue to discuss any major changes before putting a lot of time into them.   

## Copyright
The smacme/commit library is copyright © Jake A. Smith and licensed for use under the MIT License (MIT). Please see LICENSE for more information.
