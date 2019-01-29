# Sistem Monitoring - Format 8 Kolom

## System Requirement
- Web: Apache (v2.4.23 or higher) / Nginx
- Database: Mysql (v5.7.14  or higher)
- PHP : v5.6.25 or higher


## Build

Build MySQL server

```docker build -t asatrya/mysql:5.7 docker/mysql```

Build Apache-PHP webserver

```docker build -t asatrya/f8k-monitor:latest .```

## Run

Run MySQL server

```docker run --rm --name f8k-mysql -d asatrya/mysql:5.7```

Run Apache-PHP websever (without shared directory with host)

```docker run --rm --name f8k-monitor --link f8k-mysql:mysqlhost -p 81:80 -d asatrya/f8k-monitor:latest```

Run Apache-PHP websever (with shared directory with host)

```docker run --rm --name f8k-monitor --link f8k-mysql:mysqlhost -v ${PWD}:/var/www/f8k-monitor -p 81:80 -d asatrya/f8k-monitor:latest```

## Usage

Open http://localhost:81 in browser, and use these credentials to login

### Default Account
- username `admin` 
- password `Ad_Min`

### User Guides
Available on `docs` folder.

## Clean Up

Stop webserver and MySQL server containers

```docker stop f8k-monitor f8k-mysql```