#!/bin/sh
DATABASE=trevorbi_mycodelic

echo -e "\e[31mRemoving Existing SQL Files\e[39m\n"
rm -rf ./administrator/*.sql

IGNORED_TABLES_STRING=''
for TABLE in "${EXCLUDED_TABLES[@]}"
do :
   IGNORED_TABLES_STRING+=" --ignore-table=${DATABASE}.${TABLE}"
done

echo -e "\e[32mBegin Dumping MySQL Database into individual tables\e[39m\n"

for i in `echo "show tables" | mysql -u trevorbi_mycode -pFy25ctGSa2bz -h localhost ${DATABASE}|grep -v Tables_in_`;
  do
    echo -e "\e[32mAdding\e[39m $i";
    mysqldump -u trevorbi_mycode -pFy25ctGSa2bz --add-drop-table --allow-keywords --skip-comments --skip-dump-date --extended-insert=FALSE -q -c ${IGNORED_TABLES_STRING} ${DATABASE} $i  >  /home/trevorbi/mycodelicforest.org/database/$i.sql
  done
