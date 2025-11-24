# Fulll - algo

![Docker](https://img.shields.io/badge/Docker-28.1-blue)
![Symfony](https://img.shields.io/badge/Symfony-7.3-blue)
![PHP](https://img.shields.io/badge/PHP-8.2-777BB4)

Fulll's algorithm technical test

## Prerequisites

- Git
- Docker and Docker Compose

## How to use

Clone the project :  
`git clone git@github.com:MathiasDaverede/fulll-algo.git`

## Create a .env.local file in the root directory of the project

### User data

USER_NAME=your_user_name (`whoami`)  
USER_ID=your_uid (`id -u`)  
GROUP_ID=your_gid (`id -g`)

## Start the project

Place yourself in the project folder :  
`cd path/to/fulll-algo/`

```bash
# Vérify executables files rights
ls -l bin/

# Make them executables
chmod +x bin/*
```

Construct images and start containers in detach mode :  
`docker compose --env-file .env.local up -d`

Access to Symfony container :  
`docker exec -it fulll-algo-symfony-1 bash`

Install Symfony dependencies :  
`composer install`

Run Fizzbuzz command:  
`bin/console app:algo:fizzbuzz n`

- change "n" by the number of your choice