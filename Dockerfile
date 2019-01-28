FROM ubuntu:18.04

RUN apt-get update

# tools
RUN apt-get install -y git
RUN apt-get install -y unzip
RUN apt-get install -y curl
RUN apt-get install -y nano

# php & extension
ENV TZ=Asia/Jakarta
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone
RUN apt-get install -y php
RUN apt-get install -y php-curl
RUN apt-get install -y php-xml
RUN apt-get install -y phpunit
RUN apt-get install -y php-imagick
RUN apt-get install -y php-mysql

# composer
RUN cd ~
RUN curl -sS https://getcomposer.org/installer -o composer-setup.php
RUN php composer-setup.php --install-dir=/usr/local/bin --filename=composer

# apache & modules
RUN apt-get install -y apache2
RUN a2enmod rewrite

# mysql client
RUN apt-get install -y mysql-client-5.7

# copy files
RUN mkdir /var/www/f8k-monitor
COPY . /var/www/f8k-monitor
RUN chmod -R 777 /var/www/f8k-monitor

# apache2 config
COPY docker/apache-php/000-default.conf /etc/apache2/sites-available/000-default.conf

# Expose Apache
EXPOSE 80

# environment variables
ENV MYSQL_DATABASE=dev_monevdki
ENV MYSQL_USER=monitor
ENV MYSQL_PASSWORD=password
 
# Launch Apache
CMD ["/usr/sbin/apache2ctl", "-DFOREGROUND"]