import board
import neopixel
import time
import sys

pixels = neopixel.NeoPixel(board.D18, 2, pixel_order=neopixel.RGBW)

RED = (0,255,0,0)
BLUE = (0,0,255,0)
GREEN = (255,0,0,0)
WHITE = (0,0,0,255)

OFF = (0,0,0,0)
COLOR = (255,255,255,0)

def showRed():
	pixels.fill(RED)
	pixels.show()

def showBlue():
	pixels.fill(BLUE)
	pixels.show()

def showGreen():
	pixels.fill(GREEN)
	pixels.show()
def showWWhite():
	pixels.fill(WHITE)
	pixels.sshow()


#arg one is on/off 
#for if there are no rgb arguments
if len(sys.argv)==2 and sys.argv[1]:
	print("1")
	pixels.fill((255,255,255,0))
	pixels.show()
	time.sleep(0.5)
	#args 3-5 are red green blue
elif len(sys.argv)==5 and sys.argv[1]:
	print("2")
	R = int(sys.argv[2])
	G = int(sys.argv[3])
	B = int(sys.argv[4])
	COLOR = (R,G,B,0)
	pixels.fill(COLOR)
	pixels.show()
	time.sleep(0.5)
else:
	print("3")
	pixels.fill(OFF)
	pixels.show()
	time.sleep(0.5)






'''
while True:
	
	pixels.fill(RED)
	pixels.show()
	time.sleep(0.1)
	
	#arg one is on/off 
	#for if there are no rgb arguments
	if len(sys.argv)==2 and sys.argv[1]:
		print("1")
		pixels.fill((255,255,255,0))
		pixels.show()
		time.sleep(0.5)
	#args 3-5 are red green blue
	elif len(sys.argv)==5 and sys.argv[1]:
		print("2")
		R = int(sys.argv[2])
		G = int(sys.argv[3])
		B = int(sys.argv[4])
		COLOR = (R,G,B,0)
		pixels.fill(COLOR)
		pixels.show()
		time.sleep(0.5)
	else:
		print("3")
		pixels.fill(OFF)
		pixels.show()
		time.sleep(0.5)

	
	pixels.fill(RED)
	pixels.show()
	time.sleep(0.5)
	
	pixels.fill(GREEN)
	pixels.show()
	time.sleep(0.5)

	pixels.fill(WHITE)
	pixels.show()
	time.sleep(0.5)
'''
	
	