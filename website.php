<!DOCTYPE html>
<!--TheFreeElectron 2015, http://www.instructables.com/member/TheFreeElectron/ -->

<html>
    <head>
        <meta charset="utf-8" />
        <title>Light Control Panel</title>
    </head>
 
    <body style="background-color: white;">

    <button type="button" onclick=
        <?php
        system ("sudo python /home/pi/lightWebsite/neopixeltest.py")
        ?>
    >Click Me!</button>
	 
    </body>
</html>
