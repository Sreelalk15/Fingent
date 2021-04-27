# Fingent
Student Management

Clone this repository inside your xampp/htdocs folder.

It will create a folder named Fingent.

Open Fingent folder and Extract the zip file to Fingent folder itself.

Change database name and credentials in .env file.

Run composer install inside the Fingent folder.

Create database tables using following artisan command

php artisan:migrate

Create dummy data using following artisan command

php artisan db:seed

Now the database tables and dummy data for the application is ready.

Create virtual host for the application and run the following urls


**Student List Url**

/students

**Mark List Url**

/marks
