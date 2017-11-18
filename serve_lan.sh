#!/bin/bash

export PORT="1000"
export IP="$(hostname -I | cut -d' ' -f1)"
sudo php artisan serve --host $IP --port $PORT