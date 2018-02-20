#!/bin/bash

sudo php bin/console cache:clear;
php bin/console cache:clear --no-warmup --env=prod;
#sudo chmod -R 777 var/*
sudo chmod -R 777 var/logs/*
sudo chmod -R 777 var/cache/*
sudo chmod -R 777 var/sessions/*