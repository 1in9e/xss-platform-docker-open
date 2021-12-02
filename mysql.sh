#! /bin/bash

mysql -uroot<<EOF

create database xss;
use xss;
source /app/xss.sql;
UPDATE oc_module SET code=REPLACE(code,'http://xsser.me','http://xss.ohlinge.cn')
EOF
echo "sql execution over!!!!"
