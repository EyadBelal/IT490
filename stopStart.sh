#!/usr/bin/sh
ssh -t 'a@172.29.209.45' /home/a/IT490/scripts/Apache2stop.sh
echo "stopped frontend"

ssh -t 'jassi05@172.29.209.45' /home/jassi05/scripts/mysqlstop.sh
echo "mysql stopped"
