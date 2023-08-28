# Adapty WordPress Theme

This repository contains the custom WordPress theme named "Adapty."

## Requirements

* Docker
* Git
* Docker Compose (optional, for easier Docker management)

## Initial Setup

### Step 1: Clone the Repository

First, clone this GitHub repository to your local machine.

>
> https://github.com/gogalo430/adapty.git
>

### Step 2: Navigate to the Project Folder

Navigate into the project directory where the docker-compose.yml file is located.

>
> cd adapty
>

### Step 3: Start Docker Containers

Run the following command to start the WordPress and MySQL containers.

>
> docker-compose up -d
>

### Step 4: Access WordPress

Once the containers are up, access your WordPress site by navigating to http://localhost:8080 in your web browser.



# Theme Development

## Step 1: Navigate to WordPress Themes
Access the WordPress admin panel and navigate to Appearance > Themes.

## Step 2: Activate Theme
Find "Adapty" in the list of themes and click "Activate."

## Import the Database

After starting the Docker containers, you'll need to import the database.

* Locate the database dump file (e.g., database_dump.sql) in the repository.
* Run the following command to import the database into the MySQL container:
>
> docker exec -i [MySQL-container-ID] (2122d061d483) mysql -uwordpress -pwordpress wordpress < database_dump.sql
>


# Contact Page

## Plugins used

* Contact fomr 7
* Country & Phone Field Contact Form 7

page can be accessed through this link http://localhost:8080/contact/
