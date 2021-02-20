rm /etc/nginx/sites-available/default && rm /etc/nginx/sites-enabled/default
rm /var/www/html/index.nginx-debian.html

ln -s /etc/nginx/sites-available/wordpress /etc/nginx/sites-enabled/

# config Nginx
chown -R www-data:www-data /var/www/html/*
chmod -R 755 /var/www/*

# certificate SSL
openssl req -x509 -nodes -sha256 -days 365 \
	-newkey rsa:2048 -subj "/C=SP/ST=Spain/L=Madrid/O=42/OU=jperez/CN=localhost" \
	-keyout /etc/ssl/private/server.key \
	-out /etc/ssl/certs/server.crt && \
	openssl dhparam -out /etc/nginx/dhparam.pem 1000
        
# start services
service mysql start
service nginx restart
service php7.3-fpm start
mysql < /tmp/mysql-conf.sql
mysql wordpressdb < /tmp/dump.sql
rm -rf /tmp/*

bash