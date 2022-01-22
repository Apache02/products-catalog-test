.PHONY: help

UID = $(shell id -u)
GID = $(shell id -g)

default: help

up: ## Deploy local copy of project
	docker-compose up -d

down: ## Stop and remove local copy of project
	docker-compose down

logs-follow: ## Open and follow container's logs
	docker-compose logs -f --tail=4

sh: ## Open shell inside app container
	docker-compose exec -u www-data app sh

xdebug-on: ## Enable xdebug
	docker-compose exec app /opt/enable-xdebug.sh

xdebug-off: ## Disable xdebug
	docker-compose exec app /opt/disable-xdebug.sh

fix-owners: ## Set ownership of all files in project to current user
	sudo chown $(UID):$(GID) -R .

composer-install: ## Install php dependencies using composer
	docker-compose exec app sh -c "composer install -o; chown $(UID):$(GID) -R ."

help: ## Show this help
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | awk 'BEGIN {FS = ":.*?## "}; {printf "  \033[36mmake %-30s\033[0m %s\n", $$1, $$2}'
