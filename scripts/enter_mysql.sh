#!/bin/bash

cd "$(dirname "$0")"
cd ..

eval "$(cat .env)"

export MYSQL_PORT=$FORWARD_DB_PORT

 MYSQL_HOST=127.0.0.1 mysql -u $DB_USERNAME --password=$DB_PASSWORD -P $FORWARD_DB_PORT
