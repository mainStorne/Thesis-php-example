# Example of a php application for [Thesis](https://github.com/mainStorne/Thesis) hosting

## Description

php application is running files in [php](./php/) folder and creates queries to mysql database already deployed through Thesis hosting.

This repository uses [devcontainer](https://containers.dev/) technology thanks to it, its easy to setup development environment in one click.

## Requirements

1. Install docker on you system
2. Install devcontainer extension in your IDE for example vscode
3. Change [ip address](./.devcontainer/devcontainer.json) of Thesis hosting on your ip

```json
     "runArgs": [  "--add-host=thesis.com=<your_ip>" ]
```

4. Start devcontainer
5. Open http://localhost:8080
