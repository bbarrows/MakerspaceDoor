import sys

while True:
    with open("/dev/event0", "r") as f:
        key = f.readline()
        print key
    sleep(1);
