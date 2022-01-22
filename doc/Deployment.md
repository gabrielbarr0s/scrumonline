# Deployment

The easiest way is to deploy the application to your webserver and execute the following commands from the root directory. 
Make sure to adjust the config.php to your requirements. The web-root of the application is the _src_ directory.

# Requirements
The app requires a couple of packages you need to install on your system. Those are:
- Apache or Ngnix
- PHP >= 7.1
- MySQL, MySQL-PDO

# Webservers
- [Nginx Deployment](Deployment-Nginx.md)
- [Apache Deployment](Deployment-Apache.md)

# Configuration
The repository provides a sample config (config-sample.php). 
Rename the file to `config.php` and make your changes.

````
$ cp src/config-sample.php src/config.php
````

# Database

First you have to change the connection settings in your [`config.php`](Deployment.md). 
The database engine can create the schema itself. So just execute the following commands:

````bash
$ php bin/composer install
$ ./vendor/bin/doctrine orm:generate-proxies
$ ./vendor/bin/doctrine orm:schema-tool:create
````

# Schema script

If you do not have CLI access to the target server you can generate a schema script instead. Just append `--dump-sql` to the last command. I recommend writing them to a file.

```bash
$ php bin/composer install
$ ./vendor/bin/doctrine orm:generate-proxies
$ ./vendor/bin/doctrine orm:schema-tool:create --dump-sql >> schema.sql
