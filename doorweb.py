import requests
import sys
import RPi.GPIO as GPIO ## Import GPIO library
import time ## Import 'time' library. Allows us to use 'sleep'
GPIO.setmode(GPIO.BOARD) ## Use board pin numbering
GPIO.setup(7, GPIO.OUT) ## Setup GPIO Pin 7 to OUT


while True:
    with open("/dev/input/event0", "r") as f:
        key = f.readline()
        print key
		CheckID(key)
    sleep(1);


# Function to check ID and open door
def CheckID( idx ):

r = requests.get('http://www.9screws.com/checkid.php?idx=' + idx)
print(r.text)

if r.text == "y":
	print("Unlock Door")
	GPIO.output(7,True)## Switch on pin 7
	time.sleep(4)## Wait
	print("Lock Door")
	GPIO.output(7,False)## Switch off pin 7
	GPIO.cleanup()
else:
	print("RFID not allowed")
  return;
