#!/bin/sh

phpunit LevelA;
LEVELA=$?;
SCORE=0;
if [ $LEVELA = 0 ]; then
        SCORE=5;
fi

phpunit LevelB;
LEVELB=$?;
if [ $LEVELB = 0 ]; then
        SCORE=$((SCORE+10));
fi

phpunit LevelC;
LEVELC=$?;
if [ $LEVELC = 0 ]; then
        SCORE=$((SCORE+15));
fi

phpunit LevelD;
LEVELD=$?;
if [ $LEVELD = 0 ]; then
        SCORE=$((SCORE+20));
fi

phpunit LevelE;
LEVELE=$?;
if [ $LEVELE = 0 ]; then
        SCORE=$((SCORE+50));
fi

phpunit LevelF;
LEVELF=$?;
if [ $LEVELF = 0 ]; then
        SCORE=$((SCORE+100));
fi

phpunit LevelG;
LEVELG=$?;
if [ $LEVELG = 0 ]; then
        SCORE=$((SCORE+200));
fi

NAME='plop';
if [ $1 ]; then
        NAME=$1;
fi

echo $SCORE > $NAME.score