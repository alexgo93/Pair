install:
	composer install
lint:
	composer run-script phpcs -- --standard=PSR1,PSR2 src
fix-lint:
	phpcbf --standard=PSR1,PSR2 src
update:
	composer update
test:
	composer run-script phpunit tests/