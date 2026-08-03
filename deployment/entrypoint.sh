#!/bin/sh
set -e

if [ -f /run/secrets/mariadb_app_password ]; then
    DB_PASSWORD="$(cat /run/secrets/mariadb_app_password)"
    export DB_PASSWORD
fi

exec "$@"
