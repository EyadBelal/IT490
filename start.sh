#!/usr/bin/sh
ssh -t 'a@172.29.197.251' systemctl start apache2

echo "FE is working"

ssh -t 'jassi05@172.29.209.45' systemctl start mysql

echo "MySql is running"
