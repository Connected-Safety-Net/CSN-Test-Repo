## Laravel Test Application - Get Up and Running

This repository is a test of Laravel skills using various features of the TALL (Tailwind, AlpineJS, Livewire, Laravel) stack.  This application is configured to run in a Docker container using Laravel Sail and will require you to have an understanding of GIT, Docker and Linux to get the project running locally on your machine.  Additionally, if you are running Microsoft Windows you will need to have something like WSL2 installed and configured and Docker Desktop running.

### Versions
This project uses the following versions:

- PHP ^8.2
- TailwindCSS 3.*
- AlpineJS 3.*
- Livewire ^3.5
- Laravel ^11.9
- MySQL ^8.0

### Get Up and Running!

1. Clone the repository.
2. Install project dependencies.
3. Copy the .env.example file to .env.
4. Run the sail container.
5. Run the migrations and seed the database.
6. Load up the application in your web browser.


 
---
### 1. Clone the repository

Using either a terminal or Github Desktop clone the repository to your local machine.

```Hint: If you intend on running the container on Microsoft Windows you will need to clone the repository into your WSL installation.```

---

### 2. Install project dependencies

To install the projects dependencies you need to install both **backend** and **frontend** dependencies. You will also need Docker installing on your computer. On Microsoft Windows and Mac OS you can use Docker Desktop.

```Hint: You need to use Composer and NPM to install the dependencies.```
<details>
<summary> <b>Help:</b> </summary>
  You need to have the container loaded in something like WSL2 (Windows Subsystem for Linux 2) or a Linux environment and Docker needs to be running ready to start the container. To install the dependencies you need to run the following command using the terminal in the root of the project:
  
  ```composer install && npm install```
</details>

---


### 3. Copy the .env.example file to .env

Before you can run the application you need to copy the `.env.example` file to `.env`. This file contains the configuration settings for the application.

---


### 4. Run the sail container

To run this container you will need Docker installing on your computer. On Microsoft windows and Mac OS you can use Docker Desktop.

```Hint: You need to use Composer and NPM to install the dependencies.```
<details>
<summary> <b>Help:</b> </summary>
  You need to have the container loaded in something like WSL2 (Windows Subsystem for Linux 2) or a Linux environment and Docker needs to be running ready to start the container. To install the dependencies you need to run the following command using the terminal in the root of the project:

```composer install && npm install```
</details>

---


### 5. Run the migrations and seed the database

This application has a MySQL database that needs to be created and seeded with data. To do this you need to run the migrations and seed the database.

```Hint: You will need to run the releavant Laravel Artisan commands in the terminal.```
<details>
<summary> <b>Help:</b> </summary>
    To run the migrations and seed the database you need to run the following command using the terminal in the root of the project.  Note the application will need to be running for this migration to work.
    
    ```./vendor/bin/sail artisan migrate --seed```
</details>

---


### 6. Load up the application in your web browser.

Congratulations! If all the previous steps have been completed successfully you should now be able to load the application in your web browser.

```Hint: The application should be running on URL http://localhost.```

---
## Open Part 2 in file CHANGES.md
