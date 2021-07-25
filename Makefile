run:
	composer install --no-interaction --prefer-dist
	exec /usr/bin/supervisord -c /etc/supervisor/supervisord.conf
test:
	XDEBUG_MODE=coverage bin/phpunit --coverage-clover=var/build/coverage.xml
	XDEBUG_MODE=coverage vendor/bin/infection
