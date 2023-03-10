# Containerized System with Web Frontend, MySQL, and MongoDB Containers

This is a containerized system with a web frontend, MySQL, and MongoDB containers. The PHP application connects to both databases, reads dummy data, and displays it. The system can be deployed and run on a Mac or Windows computer regardless of the version. All configurations are injected, and it's possible to build dev and prod versions of the web frontend container with PHP Xdebug turned on/off.

## Requirements

To use this system, you will need:

- Docker installed on your machine. You can download Docker Desktop for Mac or Windows [here](https://www.docker.com/products/docker-desktop).

## Setup

1. Clone this repository to your local machine:

```bash
git clone https://github.com/your-username/your-repo-name.git
```

2. Navigate to the project directory:

```bash
cd your-repo-name
```

3. Create a .env file in the project directory:

```bash
touch .env
```

4. Add the following environment variables to the .env file:


```bash
DB_HOST=db
DB_PORT=3306
DB_NAME=myapp
DB_USER=myuser
DB_PASS=mypass
MONGO_HOST=mongo
MONGO_PORT=27017
APP_ENV=dev
```

5. Create a .env file in the project directory:

```bash
touch .env
```

6. Create a .env file in the project directory:

```bash
touch .env
```


