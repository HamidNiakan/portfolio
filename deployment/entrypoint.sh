#!/bin/sh
set -e

#if [ -f /run/secrets/mariadb_app_password ]; then
#    export DB_PASSWORD="$(cat /run/secrets/mariadb_app_password)"
#fi

exec "$@"
