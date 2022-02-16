#!/bin/sh

sudo systemctl stop

rabbitmq-server.service

echo "RMQ is stopped"