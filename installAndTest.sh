#!/bin/sh
NAME=$1;
echo $NAME;

composer install;

chmod +x test.sh;
./test.sh $NAME;
