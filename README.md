# Docker Example Web App

![GitHub Repo Size](https://img.shields.io/github/repo-size/laniksj/docker-web-service)
![GitHub Code Size in Bytes](https://img.shields.io/github/languages/code-size/laniksj/docker-web-service)
![GitHub Last Commit](https://img.shields.io/github/last-commit/laniksj/docker-web-service)
![GitHub Commit Activity](https://img.shields.io/github/commit-activity/m/laniksj/docker-web-service)

- [Purpose](#purpose)
- [Description](#description)
- [Usage](#usage)
- [Docker](#docker)
- [Bugs](#bugs)
- [License](#license)
- [Donate](#donate)

## Purpose

Running a web service in a docker container using [docker-php-alpine](https://github.com/LanikSJ/docker-php-alpine).

## Description

Apache, PHP-FPM, NGINX and SupervisorD for Docker build on [Alpine Linux](http://www.alpinelinux.org/).

## Usage

[![Codacy Badge](https://app.codacy.com/project/badge/Grade/117c1f03106e48a2b9fc2a4b8830a513)](https://www.codacy.com/gh/LanikSJ/docker-web-service/dashboard?utm_source=github.com&utm_medium=referral&utm_content=LanikSJ/docker-web-service&utm_campaign=Badge_Grade)
[![codecov](https://codecov.io/gh/LanikSJ/docker-web-service/branch/master/graph/badge.svg)](https://codecov.io/gh/LanikSJ/docker-web-service)

## Docker

[![Actions Status](https://github.com/LanikSJ/docker-web-service/workflows/Docker%20Publish/badge.svg)](https://github.com/LanikSJ/docker-web-service/actions)

     FROM ghcr.io/laniksj/docker-php-alpine:master
     COPY . /var/www/html

I'm using the html folder to store my web content. In this case it's a web form.

## Bugs

Please report any bugs or issues you find. Thanks!

## License

[![MIT License](https://img.shields.io/badge/license-MIT-blue)](https://en.wikipedia.org/wiki/MIT_License)

## Donate

[![Patreon](https://img.shields.io/badge/patreon-donate-blue.svg)](https://www.patreon.com/laniksj/overview)
