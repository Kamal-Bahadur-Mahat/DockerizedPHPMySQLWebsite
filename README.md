# MyWebsiteWithDocker

A Dockerized PHP and MySQL web application with phpMyAdmin integration with login and signup.

## Description

This repository contains the setup and files for a web application running on Docker. It includes the following components:
- **PHP**: The server-side scripting language used for building the web application.
- **MySQL**: The relational database management system used for storing application data.
- **phpMyAdmin**: A web-based interface for managing MySQL databases.
- **Docker**: Containerization platform used to run and manage the application components.

## Files
- **dashboard.php**: Dashboard page of the web application.
- **docker-compose.yml**: Docker Compose file to manage multi-container Docker applications.
- **Dockerfile**: Dockerfile to set up the PHP environment.
- **index.php**: Main entry point of the web application.
- **login.php**: Login page of the web application.
- **logout.php**: Logout functionality of the web application.
- **secrets/**: Directory containing database credentials.
  - **db_password**: Password for the database user.
  - **db_root_password**: Root password for the MySQL database.
  - **db_user**: Username for the database.
- **signup.php**: Signup page of the web application.

## Getting Started

### Prerequisites

- Docker
- Docker Compose

### Installation

### Clone the repository:**
   git clone https://github.com/yourusername/MyWebsiteWithDocker.git
### Build and run the containers using Docker Compose:**
    >cd MyWebsiteWithDocker
    >docker-compose up --build
### Navagation:**
    After running the containers, the web application will be accessible at **http://localhost:80.** You can access phpMyAdmin at **http://localhost:8080** to manage your MySQL databases.

