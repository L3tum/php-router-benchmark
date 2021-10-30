all: prepare benchmark

.PHONY: prepare
prepare: clean vendor autoloader clean routers/riaf/src/Generated routers/riaf/src/Router.php routers/autoroute/src integration-autoloaders

.PHONY: clean
clean:
	rm -rf vendor
	cd routers/autoroute && rm -rf vendor
	cd routers/autoroute && rm -rf src
	cd routers/autoroute && rm -rf resources
	cd routers/riaf && rm -rf vendor
	cd routers/riaf && rm -rf src/Generated
	cd routers/riaf && rm -rf src/Router.php
	cd routers/fastroute && rm -rf vendor
	cd routers/symfony && rm -rf vendor

vendor: routers/riaf/vendor routers/symfony/vendor routers/fastroute/vendor routers/autoroute/vendor
	composer install

routers/riaf/vendor:
	cd routers/riaf && composer install

routers/symfony/vendor:
	cd routers/symfony && composer install

routers/fastroute/vendor:
	cd routers/fastroute && composer install

routers/autoroute/vendor:
	cd routers/autoroute && composer install
	# The require for the autoload.php in this script is wrong, so we need to move it manually
	cd routers/autoroute && cp vendor/pmjones/auto-route/bin/autoroute-create.php vendor/autoroute-create.php
	cd routers/autoroute && cp -r vendor/pmjones/auto-route/resources resources

.PHONY: autoloader
autoloader:
	composer dump-autoload -o -a

.PHONY: integration-autoloaders
integration-autoloaders:
	cd routers/riaf && composer dump-autoload -o -a
	cd routers/symfony && composer dump-autoload -o -a
	cd routers/fastroute && composer dump-autoload -o -a
	cd routers/autoroute && composer dump-autoload -o -a

.PHONY: benchmark
benchmark:
	vendor/bin/phpbench run benchmark --report=aggregate

.PHONY: benchmark-table
benchmark-table:
	vendor/bin/phpbench run benchmark --report=all --group=RouterBenchmark

routers/riaf/src/Router.php:
	cd routers/riaf && composer dump-autoload
	cd routers/riaf && php vendor/bin/compile "\\Config"

routers/riaf/src/Generated:
	cd routers/riaf/src && mkdir -p Generated
	cd routers/riaf && composer generate

routers/autoroute/src:
	cd routers/autoroute && mkdir -p src
	cd routers/autoroute && composer generate

.PHONY: update-riaf
update-riaf:
	cd routers/riaf && composer update

.PHONY: update-symfony
update-symfony:
	cd routers/symfony && composer update

.PHONY: update-fastroute
update-fastroute:
	cd routers/fastroute && composer update

.PHONY: update-autoroute
update-autoroute:
	cd routers/autoroute && composer update
