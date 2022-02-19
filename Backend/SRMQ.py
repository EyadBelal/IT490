#!/usr/bin/env python
import pika

#Ali's site credentials
credentials = pika.PlainCredentials(username='test', password='test')
connection = pika.BlockingConnection(pika.ConnectionParameters(host='172.29.212.142', credentials=credentials))

channel = connection.channel()

channel.queue_declare(queue='hello')

channel.basic_publish(exchange='',
                  routing_key='hello',
                  body='Hello from Ali!')
print(" [x] Sent 'Hello from Ali!'")
connection.close()
