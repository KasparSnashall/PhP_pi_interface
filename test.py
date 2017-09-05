#!/usr/bin/env python

import sys, getopt
import spidev
import time
import os

spi = spidev.SpiDev()
#spi.max_speed_hz = 5000
#spi.mode = 0b01


def main(value):
    
    #spi.open(0,0)
    #readvalue = spi.readbytes(8)
    #to_send = [0x01, 0x02, 0x03] # array to send )x is for nums in hex, \x is for letters 
    #spi.xfer(to_send) # send 
    #print readvalue
    spi.close()

    if value[0] == "Test1":
    	
    	spi.open(0,0)
    	print spi.readbytes(8)
    	spi.close()
    	
    elif value[0] == "Test2":
    	spi.open(0,0)
    	to_send = [0x88, 0x01]
    	spi.xfer(to_send)
    	print spi.readbytes(8)
    	spi.close()
    	print "<p> Sent </p>"
    	
    else:
    	print "Test failure"

if __name__ == "__main__":
	main(sys.argv[1:])
	
	