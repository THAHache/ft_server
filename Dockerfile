# image
FROM debian:buster

# maintainer
MAINTAINER jperez-r

# install services
RUN apt-get update \
    && apt-get install -y \
    php-fpm php-mysql nginx mariadb-server openssl

COPY /srcs/nginx-conf /etc/nginx/sites-available/wordpress
COPY /srcs/wordpress /var/www/html/wordpress
COPY /srcs/phpmyadmin /var/www/html/phpmyadmin
COPY /srcs/index.html /var/www/html
COPY srcs/dump.sql /tmp
COPY /srcs/mysql-conf.sql /tmp
COPY /srcs/start.sh /tmp

EXPOSE 80 443

ENTRYPOINT ./tmp/start.sh


