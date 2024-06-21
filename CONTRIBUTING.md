## Contributing code and documentation

1. Create a fork of the repository.
   You need a [GitHub account](https://github.com/join).
2. Create a new branch holding your changes.
3. Set up your local Development-Environment and apply your changes.
4. Commit your changes following the [TYPO3 git commit conventions](https://docs.typo3.org/m/typo3/guide-contributionworkflow/main/en-us/Appendix/CommitMessage.html#commitmessage).
   The only relevant difference is that we do not use the `Releases` or `Change-Id` metadata.
5. Push your changes.
6. Open a pull request.

Some pull requests can not be merged quickly.
In cases where the changes cannot be merged quickly, we consider the original author responsible for keeping their PR branches up to by rebasing.

Please also have a look at the documented [contribution workflow for GitHub](https://docs.github.com/en/get-started/quickstart/contributing-to-projects).

## Local Development Environment
### Start DDEV-Container
```sh
ddev start
```
Composer and NPM will be executed automatically over DDEV Hooks.

### Import Database 
todo: add doc 

### Using Vite with DDEV
Add .env file:
```sh
cp .ddev/.env.dist .ddev/.env 
```

Start Development-Server:
```sh
ddev vite-serve start
```

Watcher:
```sh
ddev npm run watch 
```

Development Build (not compressed/optimized):
```sh
 ddev npm run build:development
```

Production Build:
```sh
 ddev npm run build:production
```

