FROM ferror/symfony-image:8.1

COPY . /app/

RUN composer install --no-interaction --prefer-dist --no-dev --optimize-autoloader
RUN bin/console cache:clear --env=prod

CMD ["exec", "/usr/bin/supervisord", "-c", "/etc/supervisor/supervisord.conf"]