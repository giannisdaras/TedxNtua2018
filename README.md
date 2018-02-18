# TEDxNTUA 2018 Website

## Description

This repository hosts the TEDx NTUA 2018 website. It is built using
* Laravel PHP Framework
* Bootstrap v4
* Wow.js
* instafeed.js
* Sass
* Facebook and Instagram APIs

## Authors

This website is brought to you by the TEDx NTUA 2018 IT Team which comprises of three ECE 3rd year undergraduate students (alphabetically):
 1. Ioannis Daras ([giannisdaras](https://github.com/giannisdaras))
 2. Theodore Diamantidis ([tdiam](https://github.com/tdiam))
 3. Marios Papachristou ([papachristoumarios](https://github.com/papachristoumarios))

## Content Licensing

This website is licensed under Creative Commons v3.0 BY. You can find more about this license [here](https://creativecommons.org/licenses/by/3.0/)

### You are free to


 1. Share — copy and redistribute the material in any medium or format
 2. Adapt — remix, transform, and build upon the material for any purpose, even commercially.

The licensor cannot revoke these freedoms as long as you follow the license terms.
Under the following terms:

 1. **Attribution** — You must give appropriate credit, provide a link to the license, and indicate if changes were made. You may do so in any reasonable manner, but not in any way that suggests the licensor endorses you or your use.

 2. **No additional restrictions** — You may not apply legal terms or technological measures that legally restrict others from doing anything the license permits.

## Forking this repository and using the template

You are allowed to fork this repository as long as the above terms are met (see Content Licensing).

1. Install the Laravel PHP framework
2. Clone your repository
3. Configure your `.env` file for communicating with a DB, having an SMTP client connected etc.
3. Install required PHP / Laravel packages with `composer install`
4. Install required Node packages with `npm install`
6. Once set, you can run `npm run watch` to (live) build your CSS files from the SASS files and run `php artisan serve` for hosting the website locally. In case you wish to run `artisan` on a different port (e.g. for viewing within your LAN), try the following:

```bash
#!/bin/bash

export PORT="1000" # use the port you want to host the webpage
export IP="$(hostname -I | cut -d' ' -f1)"
sudo php artisan serve --host $IP --port $PORT
```
