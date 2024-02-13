FROM hyperf/hyperf:8.2-alpine-v3.19-swoole

ENV TIMEZONE=${timezone:-"America/Sao_Paulo"}

WORKDIR /opt/www

COPY . /opt/www

RUN composer install

EXPOSE 9501

ENTRYPOINT ["php", "/opt/www/bin/hyperf.php", "server:watch"]
