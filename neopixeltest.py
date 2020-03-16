import board
import neopixel
import time


pixels = neopixel.NeoPixel(board.D18, 2, pixel_order=neopixel.RGBW)

RED = (0,255,0,0)
BLUE = (0,0,255,0)
GREEN = (255,0,0,0)
WHITE = (0,0,0,255)

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


while True:
	'''
	pixels.fill(RED)
	pixels.show()
	time.sleep(0.5)
	'''
	a = int(input(""))
	b = int(input(""))
	c = int(input(""))
	d = int(input(""))
	color = (a,b,c,d)
	pixels.fill(color)
	pixels.show()
	time.sleep(0.5)
	print("break")
	'''
	pixels.fill(GREEN)
	pixels.show()
	time.sleep(0.5)

	pixels.fill(WHITE)
	pixels.show()
	time.sleep(0.5)
	'''
	