#!/bin/sh
mysql -u root -p$1 -e "DROP DATABASE IF EXISTS indekost";
mysql -u root -p$1 -e "CREATE DATABASE indekost";
mysql -u root -p$1 -e "GRANT ALL PRIVILEGES ON indekost.* TO iboek05t@localhost IDENTIFIED BY 'lun45Bulanan' WITH GRANT OPTION";


