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



