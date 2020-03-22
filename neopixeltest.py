import board
import neopixel
import time
import sys

pixel_pin = board.D18
num_pixels = 2
ORDER = neopixel.RGBW

pixels = neopixel.NeoPixel(pixel_pin, num_pixels, pixel_order=ORDER)

RED = (0,255,0,0)
BLUE = (0,0,255,0)
GREEN = (255,0,0,0)
WHITE = (0,0,0,255)

OFF = (0,0,0,0)
COLOR = (255,255,255,0)

def wheel(pos):
    # Input a value 0 to 255 to get a color value.
    # The colours are a transition r - g - b - back to r.
    if pos < 0 or pos > 255:
        r = g = b = 0
    elif pos < 85:
        r = int(pos * 3)
        g = int(255 - pos * 3)
        b = 0
    elif pos < 170:
        pos -= 85
        r = int(255 - pos * 3)
        g = 0
        b = int(pos * 3)
    else:
        pos -= 170
        r = 0
        g = int(pos * 3)
        b = int(255 - pos * 3)
    return (r, g, b) if ORDER in (neopixel.RGB, neopixel.GRB) else (r, g, b, 0)


def rainbow_cycle(wait):
    for j in range(255):
        for i in range(num_pixels):
            pixel_index = (i * 256 // num_pixels) + j
            pixels[i] = wheel(pixel_index & 255)
        pixels.show()
        time.sleep(wait)


#arg one is on/off 
#for if there are no rgb arguments
if len(sys.argv)==2 and sys.argv[1]:
	print("1")
	while True:
		rainbow_cycle(0.008)
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
	
	