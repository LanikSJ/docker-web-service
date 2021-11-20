# Docker Example Web App

-   [Purpose](#purpose)
-   [Description](#description)
-   [Usage](#usage)
-   [Docker](#docker)
-   [Bugs](#bugs)
-   [License](#license)
-   [Donate](#donate)

## Purpose

Running a web service in a docker container using [docker-php-alpine](https://github.com/LanikSJ/docker-php-alpine).

## Description

Apache, PHP-FPM, NGINX and SupervisorD for Docker build on [Alpine Linux](http://www.alpinelinux.org/).

## Usage

[![Codacy Badge](https://app.codacy.com/project/badge/Grade/117c1f03106e48a2b9fc2a4b8830a513)](https://www.codacy.com/gh/LanikSJ/docker-web-service/dashboard?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=LanikSJ/docker-web-service&amp;utm_campaign=Badge_Grade)
[![codecov](https://codecov.io/gh/LanikSJ/docker-web-service/branch/master/graph/badge.svg)](https://codecov.io/gh/LanikSJ/docker-web-service)  

## Docker

[![Actions Status](https://github.com/LanikSJ/docker-web-service/workflows/Docker%20Publish/badge.svg)](https://github.com/LanikSJ/docker-web-service/actions)
[![Docker Repository on Quay](https://quay.io/repository/laniksj/docker-web-service/status "Docker Repository on Quay")](https://quay.io/repository/laniksj/docker-web-service)
![Docker Pulls](https://img.shields.io/docker/pulls/laniksj/docker-web-service.svg?style=flat)
![Docker Size](https://img.shields.io/docker/image-size/laniksj/docker-web-service?sort=date)

     FROM ghcr.io/laniksj/docker-php-alpine:master
     COPY . /var/www/html

I'm using the html folder to store my web content.  In this case it's a web form.

## Bugs

Please report any bugs or issues you find. Thanks!

## License

[![MIT License](https://img.shields.io/badge/license-MIT-blue)](https://en.wikipedia.org/wiki/MIT_License)

## Donate

[![Patreon](https://img.shields.io/badge/patreon-donate-red.svg)](https://www.patreon.com/laniksj/overview)
