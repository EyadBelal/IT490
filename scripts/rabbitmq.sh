#!/bin/sh

sudo systemctl start

rabbitmq-server.service

echo "RMQ is running"
