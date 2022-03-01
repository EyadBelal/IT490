#!/usr/bin/env python
import pika, sys, os

#connection to Eyad's rabbitmq management 
def main():
    credentials = pika.PlainCredentials(username='test', password='test')
    connection = pika.BlockingConnection(pika.ConnectionParameters(host='172.29.148.243', credentials=credentials))
    channel = connection.channel()

#declare the queue
    channel.queue_declare(queue='hello')

    def callback(ch, method, properties, body):
        print(" [x] Received %r" % body)

#callback the function
    channel.basic_consume(callback, queue='hello', no_ack=True)

    print(' [*] Waiting for messages. To exit press CTRL+C')
    channel.start_consuming()

#invoke the main function
if __name__ == '__main__':
    try:
        main()
    except KeyboardInterrupt:
        print('Interrupted')
        try:
            sys.exit(0)
        except SystemExit:
            os._exit(0)
