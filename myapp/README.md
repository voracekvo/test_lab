# Containerized System with Web Frontend, MySQL, and MongoDB Containers
# This is a containerized system with a web frontend, MySQL, and MongoDB containers. 
# The PHP application connects to both databases, reads dummy data, and displays it. 
# The system can be deployed and run on a Mac or Windows computer regardless of the version. 
# All configurations are injected, and it's possible to build dev and prod versions of the web frontend container with PHP Xdebug turned on/off.

# Requirements
# To use this system, you will need:
# Docker installed on your machine. You can download Docker Desktop for Mac or Windows here.

# Setup
# Clone this repository to your local machine:
# git clone https://github.com/your-username/your-repo-name.git

# Navigate to the project directory:
# cd your-repo-name

# Create a .env file in the project directory:
# touch .env

# Add the following environment variables to the .env file:
DB_HOST=db
DB_PORT=3306
DB_NAME=myapp
DB_USER=myuser
DB_PASS=mypass
MONGO_HOST=mongo
MONGO_PORT=27017
APP_ENV=dev

# Note: You can change the values of these environment variables if you want to use a different database name or credentials.

# Run the following command to build and start the containers for the development environment:
build-dev:
	docker-compose build --build-arg APP_ENV=dev
	docker-compose up

# This will start the containers using the development version of the web frontend container with PHP Xdebug turned on.

# To build and start the containers for the production environment:
build-prod:
	docker-compose build --build-arg APP_ENV=prod
	docker-compose up

# This will start the containers using the production version of the web frontend container with PHP Xdebug turned off.

# Once the containers are running, you can access the PHP application by opening a web browser and navigating to http://localhost. 
# The PHP application should display the dummy data retrieved from MySQL and MongoDB.

# Configuration
# All configurations are injected and not hard-coded, making it easy to modify the system for your specific needs.

# To modify the database settings, you can update the values of the following environment variables in the .env file:
# DB_HOST: The hostname of the MySQL container.
# DB_PORT: The port number that MySQL is running on.
# DB_NAME: The name of the MySQL database.
# DB_USER: The username to use when connecting to the MySQL database.
# DB_PASS: The password to use when connecting to the MySQL database.
# MONGO_HOST: The hostname of the MongoDB container.
# MONGO_PORT: The port number that MongoDB is running on.

# To build a dev or prod version of the web frontend container with PHP Xdebug turned on or off, 
# you can use the --build-arg APP_ENV=dev or --build-arg APP_ENV=prod command when running the docker-compose build command.

# Conclusion
# This containerized system with a web frontend, MySQL, and MongoDB containers is a simple and easy-to-use solution 
# for testing and development purposes. The PHP application connects to both databases, reads dummy data, and displays it. 
# The system can be deployed and run on a Mac or Windows computer regardless of the version.

