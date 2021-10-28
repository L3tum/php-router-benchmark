all: prepare benchmark

.PHONY: prepare
prepare: vendor autoloader clean routers/riaf/src/Generated images/Router.php integration-autoloaders

vendor: routers/riaf/vendor routers/symfony/vendor routers/fastroute/vendor
	composer install

routers/riaf/vendor:
	cd routers/riaf && composer install

routers/symfony/vendor:
	cd routers/symfony && composer install

routers/fastroute/vendor:
	cd routers/fastroute && composer install

.PHONY: autoloader
autoloader:
	composer dump-autoload -o -a

.PHONY: integration-autoloaders
integration-autoloaders:
	cd routers/riaf && composer dump-autoload -o -a
	cd routers/symfony && composer dump-autoload -o -a
	cd routers/fastroute && composer dump-autoload -o -a

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

.PHONY: update-riaf
update-riaf:
	cd routers/riaf && composer update

.PHONY: update-symfony
update-symfony:
	cd routers/symfony && composer update

.PHONY: update-fastroute
update-fastroute:
	cd routers/fastroute && composer update

.PHONY: clean
clean:
	cd routers/riaf/src && rm -rf Generated
