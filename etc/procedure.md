## Serve your project ##
1. The **easy** way: php artisan serve
2. The **tricky** way:
``` 
cd /etc/apache2/sites-available
gedit tedxntua.conf
```
Add the following:
```
<VirtualHost *:80>
  ServerName tedxntua

  DocumentRoot "bla..bla/tedxntua/public"

</VirtualHost>
```
Then:
```
sudo a2ensite projectname
sudo /etc/init.d/apache2 restart
gedit /etc/hosts
```
Copy paste the following:
```
127.0.0.1 tedxntua
```
Then:
```
cd bla..bla
chmod -R 777 storage
```
Enjoy: http://tedxntua

## Creating Views ##

Create route in web.php
Create view in resources/views (file: foo.twig)
Create controller in app/http/controllers based on HomeController

More about twig can be found here: https://github.com/rcrowe/TwigBridge

## Locales ##

check also file kernel.php
publish 
then change laravellocalization.php


