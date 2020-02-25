UID ?= $(shell id -u)
GID ?= $(shell id -g)
IMAGE_NAME ?= "ticketit/dev"

DOCKER_RUN := docker run \
            --rm \
            --interactive \
            --tty \
            --volume /tmp:/tmp \
            --volume $(PWD):/app \
            --volume /tmp/.composer:/.composer \
            --user $(UID):$(GID) \
            --name ticketit_dev \
            $(IMAGE_NAME)

help:
	@echo "Usage: make [target] \n"
	@echo "Targets:"
	@echo "-------"
	@egrep '^(.+)\:\ ##\ (.+)' ${MAKEFILE_LIST} | column -t -c 2 -s ':#'


install: ## Setup the testing container
	@docker build -t $(IMAGE_NAME) -f $(PWD)/docker/Dockerfile .
	@$(DOCKER_RUN) composer install --no-scripts
.PHONY: install

clean: ## Delete composer.lock and the vendor folder
	@rm -f composer.lock && rm -rf vendor || true
.PHONY: clean

test: ## Run the tests inside the composer docker image
	@$(DOCKER_RUN) security-checker security:check composer.lock
	@$(DOCKER_RUN) composer run-script test
.PHONY: test

shell: ## Open a shell terminal
	@$(DOCKER_RUN) bash
.PHONY: shell

.DEFAULT_GOAL := help