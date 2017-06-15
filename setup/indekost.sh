#!/bin/sh
if [ $# -eq 0 ]
  then
    mysql indekost -u iboek05t -plun45Bulanan;
  else 
    mysql indekost -u iboek05t -plun45Bulanan < $1
fi
