<!DOCTYPE html>
<!--TheFreeElectron 2015, http://www.instructables.com/member/TheFreeElectron/ -->

<html>
    <head>
        <meta charset="utf-8" />
        <title>Light Control Panel</title>
    </head>
 
    <body style="background-color: white;">

    <?php
      
        if(isset($_POST['ON'])) { 
            echo "ON";
            shell_exec ("sudo python /home/pi/lightWebsite/neopixeltest.py True"); 
        } 
        if(isset($_POST['OFF'])) { 
            echo "OFF";
            shell_exec ("sudo python /home/pi/lightWebsite/neopixelstest.py True 0 0 0"); 
        }
        if(isset($_POST['RED'])) { 
            echo "RED";
            shell_exec ("sudo python /home/pi/lightWebsite/neopixeltest.py True 0 255 0"); 
        } 
        if(isset($_POST['GREEN'])) { 
            echo "GREEN";
            shell_exec ("sudo python /home/pi/lightWebsite/neopixelstest.py True 255 0 0"); 
        }
        if(isset($_POST['BLUE'])) { 
            echo "BLUE";
            shell_exec ("sudo python /home/pi/lightWebsite/neopixeltest.py True 0 0 255"); 
        } 
    ?> 

    <form method="post"> 
        <input type="submit" name="ON"
                value="on"/> 
        <input type="submit" name="OFF"
                value="off"/> 
        <input type="submit" name="RED"
                value="red"/> 
        <input type="submit" name="GREEN"
                value="green"/>
        <input type="submit" name="BLUE"
                value="blue"/> 
    </form> 

	 
    </body>
</html>

<!--shell_exec ("sudo python /home/pi/lightWebsite/neopixeltest.py")-->
