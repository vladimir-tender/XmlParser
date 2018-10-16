ImagesParser
============

A Symfony project created on October 13, 2018, 7:58 pm.

Install vendors and confirm parameters.

```sh
$ php composer.phar install
```

Edit /etc/hosts
```sh
$ sudo nano /etc/hosts
>> 127.0.0.1 xml-parser.local
```

Next run docker
```sh
$ docker-compose up -d
```

Open "xml-parser.local"

If get http code 500 - try remove cache
```sh
$ docker-compose exec php bash
$ rm -rf var/cache/*
```