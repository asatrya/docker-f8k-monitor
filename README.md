# Sistem Monitoring - Format 8 Kolom

## System Requirement
- Web: Apache (v2.4.23 or higher) / Nginx
- Database: Mysql (v5.6)
- PHP : v5.6


## Build

### Build Locally

```
# MySQL server
docker build -t asatrya/f8k-monitor-mysql:5.6 docker/mysql

# Apache webserver
docker build -t asatrya/f8k-monitor:latest .
```

### Build on Google Cloud Build

```
# MySQL server
# change PROJECT_ID with your GCP project ID.

gcloud builds submit --tag gcr.io/[PROJECT_ID]/f8k-monitor-mysql:5.6 docker/mysql

# Apache webserver
# change PROJECT_ID with your GCP project ID.

gcloud builds submit --tag gcr.io/[PROJECT_ID]/f8k-monitor:latest .
```

## Run

### Run Locally

```
# Run MySQL server
docker run --rm --name f8k-monitor-mysql -d asatrya/f8k-monitor-mysql:5.6

# Run Apache-PHP websever (without shared directory with host)
docker run --rm --name f8k-monitor --link f8k-monitor-mysql:mysqlhost -p 81:80 -d asatrya/f8k-monitor:latest

# or, Run Apache-PHP websever (with shared directory with host)
docker run --rm --name f8k-monitor --link f8k-monitor-mysql:mysqlhost -v ${PWD}:/var/www/f8k-monitor -p 81:80 -d asatrya/f8k-monitor:latest
```

### Run on Google Kubernetes Engine

**Prerequisite:** your local development environment is ready to use Google Kubernetes Engine by following the steps in https://cloud.google.com/kubernetes-engine/docs/quickstart

Then execute these commands:

```
kubectl create -f .\kubernetes\mysql-config.yaml
kubectl create -f .\kubernetes\webapp-config.yaml
```

Find out the public IP of the LoadBalancer service in Kubernetes cluser using this command

```
kubectl get services --selector='app=f8k-monitor'
```

See the `EXTERNAL-IP` of the `LoadBalancer` service type

## Usage

Open http://localhost:81 (locally) or `http://[EXTERNAL-IP]` (in GKE) in browser, and use these credentials to login

### Default Account
- username `admin` 
- password `Ad_Min`

### User Guides
Available on `docs` folder.

## Clean Up

Stop webserver and MySQL server containers

```docker stop f8k-monitor f8k-monitor-mysql```