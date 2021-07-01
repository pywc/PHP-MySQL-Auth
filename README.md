# PHP-MySQL-Auth
Simple PHP MySQL Authentication System that may be used for future projects.

## Basic Setup (Ubuntu 20.04.2 LTS)
1. Install MySQL server, Apache, and PHP.
```bash
$ sudo apt update
$ sudo apt install mysql-server apache2 php libapache2-mod-php php-mysql
```
2. Allow Apache connection on Firewall.
```bash
$ sudo ufw allow in "Apache Full"
```
3. Setup MySQL and follow the instructions.
```bash
$ sudo mysql_secure_installation
```
4. Setup a local MySQL account via root for server connection
5. Execute ```data.sql``` to create database and table
```bash
$ mysql -u username -p < data.sql
```
6. Enter local MySQL connection credentials in ```config.php```
7. Upload all php files to ```/var/www/html```
8. Start Apache if not yet started
9. Access the server via your preferred browser
