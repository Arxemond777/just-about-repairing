#!/bin/bash

php bin/console doctrine:schema:update --force
psql -d prostooremonte -U prostooremonte -f sql/function.sql
psql -d prostooremonte -U prostooremonte -f sql/constraints.sql