#!/bin/bash

export PORT="80"
export IP="$(hostname -I | cut -d' ' -f1)"
echo $PORT
sudo php artisan serve --host $IP --port $PORT