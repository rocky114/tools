wget http://cn2.php.net/get/php-7.0.10.tar.gz/from/this/mirror //下载

mv mirror php-7.0.10.tar.gz  //重命名

tar -xzvf php-7.0.10.tar.gz  //解压

yum -y install libxml2 libxml2-devel openssl openssl-devel curl-devel libjpeg-devel libpng-devel freetype-devel libmcrypt-devel  gcc

    ./configure \
    --prefix=/usr/local/php \ 
    --with-config-file-path=/usr/local/php/etc \
    --enable-calendar \
    --enable-sockets \
    --enable-ftp \
    --enable-mbstring \
    --enable-zip \
    --enable-bcmath \
    --enable-pcntl \
    --enable-sysvmsg \
    --enable-sysvsem \
    --enable-sysvshm \
    --enable-fpm  \
    --with-fpm-user=xinzhu  \
    --with-fpm-group=xinzhu \
    --with-curl \
    --with-mcrypt \
    --with-iconv \
    --with-zlib \
    --with-gd \
    --enable-gd-native-ttf \
    --with-freetype-dir \
    --with-jpeg-dir \
    --with-png-dir \
    --with-xpm-dir \
    --with-openssl \
    --with-xmlrpc \
    --with-mysqli=mysqlnd \
    --with-pdo-mysql=mysqlnd \
    --enable-soap \
    --enable-phpdbg \
    --enable-phpdbg-webhelper \
    --enable-phpdbg-debug \
    
    make && make install
