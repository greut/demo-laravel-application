# Demo laravel application

[![Docker Pulls](https://img.shields.io/docker/pulls/greut/laravel.svg?maxAge=2592000?style=flat-square)](https://hub.docker.com/r/greut/laravel)

Une application d'exemple avec le framework Laravel. Qui a pour but de donner
un exemple, pas forcément idéal ni universel, de ce qu'on peut faire.

Le meilleur moyen de s'en servir et de refaire ce qui a été fait ici et
essayant de le modifier selon vos envies.

## Téléversement

```shell
$ git clone https://github.com/HE-Arc/demo-laravel-application
$ cd demo-laravel-application
```

## Installation

```shell
$ composer install
$ # adapt the .env.example if necessary
$ npm install
$ npm run prod
$ php artisan migrate --seed
```

## Docker setup

Docker permet de créer un environnement complet de services indépendants

Modifiez le fichier `docker-compose.yml` afin de choisir mysql ou postgresql.

```shell
$ docker-compose build
$ docker-compose up -d
$ docker-compose exec php /bin/sh
# su laravel
$ . /etc/profile
$ cd ~/html
$ # then follow the normal installation.
```

**Attention:** Docker 1.12 sous Windows pose des problèmes liés au système de
fichiers utilisé par Windows/Mobylinux.
