#!/usr/bin/env python
import pika

credentials = pika.PlainCredentials(username='test', password='test')
connection = pika.BlockingConnection(pika.ConnectionParameters(host='172.29.148.243', credentials=credentials))

channel = connection.channel()

channel.queue_declare(queue='hello')

channel.basic_publish(exchange='',
                  routing_key='hello',
                  body='Hello from Ali!')
print(" Jasprit Sent 'Hello from Ali!'")
connection.close()
