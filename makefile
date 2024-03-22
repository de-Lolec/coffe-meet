# команда для полного поднятия и настройки окружения
build: up back-build back-setting

# команда для поднятия окружения
up:
	cd infra ; docker compose up -d --build

# команда для перебилдинга окружения
rebuild:
	cd infra ; docker compose down ; docker compose up -d --build

# команда очищает все конейнеры и образы и подымать окружение
clear-build:
	cd infra ; docker rm -f $$(docker ps -qa) ; docker rmi $$(docker images -qa) ; docker compose up -d --build

# команда для применения всех зависимостой внутри бэка
back-build:
	cd backend ; cp -n .env.example .env

# установка зависимостей и настройка бэка
back-setting:
	docker exec -it app composer install
	docker exec -it app php artisan key:generate
	docker exec -it app php artisan migrate
	docker exec -it app php artisan db:seed
	docker exec -it app php artisan route:cache
	docker exec -it app php artisan config:cache

# команда для просмотра всех роутов на бэке
route-list:
	docker exec -it app php artisan route:list --path=api

