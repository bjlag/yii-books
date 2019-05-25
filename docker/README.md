## Настройка и запуск

* Переименовать _.env_example_ в _.env_.
* Указать настройки окружения:

```
PROJECT_NAME=site                       # Название проекта
HOST=localhost                          # Хост
WEB_PORT=80                             # Порт, через который будет доступен сайт

PG_PORT=5050                            # Порт pgAdmin
PG_PASSWORD=site                        # Пароль к базе
PG_USER=site                            # Имя пользователя базы
PG_DATABASE=site                        # Имя базы

XDEBUG_REMOTE_HOST=192.168.1.1          # IP компа, на котором будет запускаться отладка
PHP_IDE_CONFIG_SERVER_NAME=Docker       # Имя сервера Docker в IDE
```

Запустить команду
```
$ docker-compose up -d --build
```

Сайт: http://localhost  
pgAdmin: http://localhost:5050

## Настройка xDebug в PhpStorm

В файле _docker/.env_ прописать настройки:

```
XDEBUG_REMOTE_HOST=192.168.1.1          # Указать IP адрес вашего компа
PHP_IDE_CONFIG_SERVER_NAME=Docker       # Название сервера в настройках PhpStorm 
```

### Настройка PhpStorm

* В настройках _Languages & Frameworks / PHP / Debug_ указать в секции xDebug порт 9001.
* В настройках _Languages & Frameworks / PHP / Servers_ добавить сервер с названием, которое указано в **PHP_IDE_CONFIG_SERVER_NAME**. Указать чтобы корень проекта указывал на папку в контейнере _/var/www/html_.
