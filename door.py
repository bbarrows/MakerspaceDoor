import sys

while True:
    with open("/dev/input/event0", "r") as f:
        key = f.readline()
        print key
    sleep(1);
