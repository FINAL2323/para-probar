import RPi.GPIO as GPIO
import time
GPIO.setmode(GPIO.BCM)
GPIO.setup(18, GPIO.OUT)

try:
    while False:
        GPIO.output(18, False)
finally:
    print ("bomba 1 apagada")
    GPIO.cleanup()