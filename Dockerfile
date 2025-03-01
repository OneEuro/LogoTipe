FROM wordpress:latest

# Обновляем пакеты и устанавливаем необходимые зависимости
RUN apt-get update && apt-get install -y vim

# Устанавливаем Xdebug
RUN pecl install xdebug && docker-php-ext-enable xdebug

# Настраиваем PHP для увеличения лимитов на загрузку файлов
RUN set -eux; \
    { \
        echo 'upload_max_filesize=256M'; \
        echo 'post_max_size=64M'; \
    } > /usr/local/etc/php/conf.d/uploads.ini

# Настраиваем Xdebug
RUN { \
    echo 'zend_extension=xdebug.so'; \
    echo 'xdebug.mode=debug'; \
    echo 'xdebug.start_with_request=yes'; \
    echo 'xdebug.client_host=host.docker.internal'; \
    echo 'xdebug.client_port=9003'; \
} > /usr/local/etc/php/conf.d/xdebug.ini

# Запускаем Apache
CMD ["apache2-foreground"]
