# Docker Example Web App
[![Build Status](https://travis-ci.org/LanikSJ/docker-web-service.svg?branch=master)](https://travis-ci.org/LanikSJ/docker-web-service)[![Dependabot Status](https://api.dependabot.com/badges/status?host=github&repo=LanikSJ/docker-web-service)](https://dependabot.com)[![Known Vulnerabilities](https://snyk.io/test/github/LanikSJ/docker-web-service/badge.svg?targetFile=/docs/Gemfile.lock)](https://snyk.io/test/github/LanikSJ/docker-web-service)

## Purpose
Running a web service in a docker container using [docker-web-service](https://github.com/LanikSJ/docker-web-service).

## Description
Apache, PHP-FPM, NGINX and SupervisorD for Docker build on [Alpine Linux](http://www.alpinelinux.org/).

## Usage
[![Codacy Badge](https://api.codacy.com/project/badge/Grade/3fd126b036ab4be2a61ab822b982247e)](https://www.codacy.com/app/Lanik/docker-web-service?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=LanikSJ/docker-web-service&amp;utm_campaign=Badge_Grade)[![codecov](https://codecov.io/gh/LanikSJ/docker-web-service/branch/master/graph/badge.svg)](https://codecov.io/gh/LanikSJ/docker-web-service)  

## Docker  
![](https://img.shields.io/docker/cloud/automated/laniksj/docker-web-service.svg?style=flat)[![Docker Repository on Quay](https://quay.io/repository/laniksj/docker-web-service/status "Docker Repository on Quay")](https://quay.io/repository/laniksj/docker-web-service)![](https://img.shields.io/docker/pulls/laniksj/docker-web-service.svg?style=flat)[![](https://images.microbadger.com/badges/image/laniksj/docker-web-service.svg)](https://microbadger.com/images/laniksj/docker-web-service "Get your own image badge on microbadger.com")

     FROM laniksj/docker-php-alpine
     COPY . /var/www/html

I'm using the html folder to store my web content.  In this case it's a web form.

## Bugs
Please report any bugs or issues you find. Thanks!

## License
[![GPLv3 license](https://img.shields.io/github/license/LanikSJ/ubo-filters.svg?color=brightgreen)](http://perso.crans.org/besson/LICENSE.html)
