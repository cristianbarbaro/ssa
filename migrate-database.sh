#!/bin/bash
set -e 

echo "Migrating database 'php artisan migrate --force'..."
php artisan migrate --force
# Carga datos en la base de datos:
echo "Seeding database 'php artisan db:seed'"
php artisan db:seed