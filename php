rpm -ivh http://mirrors.sohu.com/fedora-epel/6/x86_64/epel-release-6-8.noarch.rpm //安装第三方源

yum update

yum repolist  //查看第三方源是否存在

wget http://cn2.php.net/get/php-7.0.10.tar.gz/from/this/mirror //下载

mv mirror php-7.0.10.tar.gz  //重命名

tar -xzvf php-7.0.10.tar.gz  //解压

yum -y install libxml2 libxml2-devel openssl openssl-devel curl-devel libjpeg-devel libpng-devel freetype-devel libmcrypt-devel libmcrypt  gcc

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
    --enable-phpdbg-debug
    
    make && make install
    
    
    常用参数
    --prefix=/usr/local/php7.0.16 \
--enable-bcmath \
--with-bz2 \
--with-zlib \
--enable-zip \
--with-curl \
--enable-fpm \
--with-gd \
--enable-gd-native-ttf \
--with-freetype-dir \
--with-jpeg-dir \
--with-png-dir \
--with-xpm-dir \
--with-zlib-dir \
--enable-ftp \
--enable-mbstring \
--with-openssl \
--enable-pcntl \
--enable-sockets \
--enable-soap \
--enable-shmop \
--enable-sysvmsg \
--enable-sysvsem \
--enable-sysvshm \
--with-pdo-mysql=mysqlnd \
--with-mysqli=mysqlnd \
