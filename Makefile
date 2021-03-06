all: prepare benchmark

.PHONY: prepare
prepare: clean vendor autoloader routers/autoroute/src integration-autoloaders

.PHONY: clean
clean:
	rm -rf vendor
	rm -rf caches
	mkdir -p caches
	cd routers/autoroute && rm -rf vendor
	cd routers/autoroute && rm -rf src
	cd routers/autoroute && rm -rf resources
	cd routers/riaf && rm -rf vendor
	cd routers/fastroute && rm -rf vendor
	cd routers/symfony && rm -rf vendor
	cd routers/altorouter && rm -rf vendor
	cd routers/bramus && rm -rf vendor
	cd routers/mezon && rm -rf vendor
	cd routers/aphiria && rm -rf vendor

vendor: routers/autoroute/vendor
	cd routers/riaf && composer install
	cd routers/symfony && composer install
	cd routers/fastroute && composer install
	cd routers/altorouter && composer install
	cd routers/bramus && composer install
	cd routers/mezon && composer install
	cd routers/aphiria && composer install
	composer install

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
	cd routers/altorouter && composer dump-autoload -o -a
	cd routers/bramus && composer dump-autoload -o -a
	cd routers/mezon && composer dump-autoload -o -a
	cd routers/aphiria && composer dump-autoload -o -a

.PHONY: benchmark
benchmark:
	vendor/bin/phpbench run benchmark --report=aggregate

.PHONY: benchmark-table
benchmark-table:
	vendor/bin/phpbench run benchmark --report=all --group=RouterBenchmark

.PHONY: benchmark-routers
benchmark-routers:
	vendor/bin/phpbench run benchmark --report=all --group=Router

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

.PHONY: update-altorouter
update-altorouter:
	cd routers/altorouter && composer update

.PHONY: update-bramus
update-bramus:
	cd routers/bramus && composer update

.PHONY: update-mezon
update-mezon:
	cd routers/mezon && composer update

.PHONY: update-aphiria
update-aphiria:
	cd routers/aphiria && composer update
