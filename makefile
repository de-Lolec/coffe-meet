build:
	cd infra ; docker compose up -d --build
up:
	cd infra ; docker compose up -d
rebuild:
	cd infra ; docker compose down ; docker compose up -d --build
clear-build:
	cd infra ; docker stop $(docker ps -aq) ; docker rm $(docker ps -aq) ; docker rmi $(docker images -aq) ; docker compose up -d --build
back-build:
	docker exec -it app composer install ; docker exec -it app php artisan key:generate ; docker exec -it app php artisan migrate ; docker exec -it app php artisan db:seed ; docker exec -it app php artisan route:cache ; docker exec -it app php artisan config:cache ;
route-list:
	docker exec -it app php artisan route:list --path=api