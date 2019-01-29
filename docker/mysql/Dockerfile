FROM mysql:5.7

ENV MYSQL_DATABASE=dev_monevdki
ENV MYSQL_USER=monitor
ENV MYSQL_PASSWORD=password
ENV MYSQL_ROOT_PASSWORD=superpassword

RUN apt-get update
RUN apt-get install -y nano

COPY *.sql /docker-entrypoint-initdb.d/
COPY *.cnf /etc/mysql/conf.d/