выполнить команды из корня проекта

``make build``
``make back-build``

Для входа через браузер:

фронт - ``docker logs front``
php - localhost:8876
python - localhost:5000

php:
PYTHON_URL в env для обращение по апи

front:
для запроса на php - localhost:8876/api/название запроса
список запрос можно посмотреть командой ``make route-list``

для запроса на python - ``docker inspect python | grep "IPAddress"`` c 5000 портом

python:
чтобы запросы шли с питоны на фронт надо добавить в cors адрес фронта(network) из ``docker logs front``

чтобы отправить запрос на php надо взять адрес из ``docker inspect nginx | grep "IPAddress"`` с 80 портом
список запрос можно посмотреть командой ``make route-list``

php:
- laravel

front:
- react
- tailwind
- nextUi

python:
- fastApi
