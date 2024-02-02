# e-Grip

This is a demo implementation project of the e-Grip content management system built and used by [Grip Online](https://www.grip.nl/).

# Requirements

* Apache or Nginx
* PHP
* MySQL (or compatible)

# Installing

Download and extract the [latest zip file](https://github.com/GripOnline/egrip-demo/archive/refs/heads/main.zip) and run composer from the project root folder to install all dependencies:

```
composer update
```

# Configuration

* Create an empty database and a database user with read+write+create privileges on that database. 
* Create a vhost that points to the 'html' directory
* Open http://yoursite/ in your browser. 

You will be redirected to a page where you can enter the database connection details. If valid credentials were entered they will be stored in vwm_config.xml in the 'database' parameter and all initial database queries will be executed. Next, you can create the first admin user and you will be logged in into the back-end.

# Further steps

Once logged in into the back-end, you can create a website, publish content on it and see what it looks like.
