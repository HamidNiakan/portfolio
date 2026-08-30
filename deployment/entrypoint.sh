#!/bin/sh
set -e

if [ -n "${DB_PASSWORD_FILE:-}" ] && [ -f "$DB_PASSWORD_FILE" ]; then
    export DB_PASSWORD="$(cat "$DB_PASSWORD_FILE")"
elif [ -f /run/secrets/mariadb_app_password ]; then
    export DB_PASSWORD="$(cat /run/secrets/mariadb_app_password)"
fi

exec "$@"
