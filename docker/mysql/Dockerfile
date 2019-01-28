FROM mysql:5.7

ENV MYSQL_DATABASE=dev_monevdki
ENV MYSQL_USER=monitor
ENV MYSQL_PASSWORD=password
ENV MYSQL_ROOT_PASSWORD=superpassword

COPY *.sql /docker-entrypoint-initdb.d