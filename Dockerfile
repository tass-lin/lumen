FROM tasslin/php

EXPOSE 8080

WORKDIR /var/www/project

COPY composer.json .
COPY composer.lock .

RUN composer install --no-autoloader

COPY . .

RUN composer dump-autoload --optimize

CMD /usr/bin/supervisord -n -c /etc/supervisord.conf;
