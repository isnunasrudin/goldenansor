FROM dunglas/frankenphp

RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

# change limit upload to 100M
RUN sed -i 's/upload_max_filesize = 2M/upload_max_filesize = 100M/' $PHP_INI_DIR/php.ini
RUN sed -i 's/post_max_size = 8M/post_max_size = 100M/' $PHP_INI_DIR/php.ini

# change timezone to Asia/Jakarta
RUN sed -i 's/;date.timezone =/date.timezone = Asia\/Jakarta/' $PHP_INI_DIR/php.ini

# change opcache to 1
RUN sed -i 's/;opcache.enable=0/opcache.enable=1/' $PHP_INI_DIR/php.ini

# change max execution time to 300
RUN sed -i 's/;max_execution_time = 30/max_execution_time = 300/' $PHP_INI_DIR/php.ini

# change memory limit to 256M
RUN sed -i 's/;memory_limit = 128M/memory_limit = 256M/' $PHP_INI_DIR/php.ini

# disable vulnerable function
RUN sed -i 's/;disable_functions =/disable_functions = exec,passthru,shell_exec,system,popen,proc_open,pcntl_exec/' $PHP_INI_DIR/php.ini

# install laravel extensions requirement
RUN install-php-extensions \
    curl \
    dom \
    fileinfo \
    mbstring \
    xml \
    intl \
    zip \
    gd \
    pgsql \
    pdo_pgsql \
    sqlite3