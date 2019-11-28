try:
    import RPi.GPIO as GPIO
    import os
    import random
    import sys
    import datetime
    import time
    import boto3
    import Adafruit_DHT
    import threading
    print("All Modules Loaded ...... ")
except Exception as e:
    print("Error {}".format(e))


class MyDb(object):

    def __init__(self, Table_Name='Moisture'):
        self.Table_Name=Table_Name

        self.db = boto3.resource('dynamodb')
        self.table = self.db.Table(Table_Name)

        self.client = boto3.client('dynamodb')

    @property
    def get(self):
        response = self.table.get_item(
            Key={
                'Sensor_Id':"1"
            }
        )

        return response

    def put(self, Sensor_Id='' , Moisture=''):
        self.table.put_item(
            Item={
                'Sensor_Id':Sensor_Id,
                'Moisture':Moisture,
            
            }
        )

    def delete(self,Sensor_Id=''):
        self.table.delete_item(
            Key={
                'Sensor_Id': Sensor_Id
            }
        )

    def describe_table(self):
        response = self.client.describe_table(
            TableName='Sensor'
        )
        return response

    @staticmethod
    def sensor_value():
        channel = 21
        GPIO.setmode(GPIO.BCM)
        GPIO.setup(channel, GPIO.IN)
        
          

        moisture = GPIO.input(channel)

        if GPIO.input(channel):
            print('1')
        else:
            print('0!')
        
        return moisture


def main():
    global counter

    threading.Timer(interval=10, function=main).start()
    obj = MyDb()
    Moisture = obj.sensor_value()
    obj.put(Sensor_Id=str(counter), Moisture=str(Moisture))
    counter = counter + 1
    print("Uploaded Sample on Cloud M:{}".format(Moisture))


if __name__ == "__main__":
    global counter
    counter = 0
    main()
