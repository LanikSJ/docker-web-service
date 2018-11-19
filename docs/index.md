---
# You don't need to edit this file, it's empty on purpose.
# Edit theme's home layout instead if you wanna make some changes
# See: https://jekyllrb.com/docs/themes/#overriding-theme-defaults
layout: home
title: Docker Web Service
---

Purpose
============

Running a web service in a docker container using [docker-php-alpine](https://github.com/LanikSJ/docker-php-alpine).

Description
============

Apache, PHP-FPM, NGINX and SupervisorD for Docker build on [Alpine Linux](http://www.alpinelinux.org/).

Usage
============

Example:

     FROM laniksj/docker-php-alpine
     COPY . /var/www/html

I'm using the html folder to store my web content.  In this case it's a web form.

Bugs
============

Please report any bugs or issues you find. Thanks!
