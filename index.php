<!DOCTYPE html>
<!--TheFreeElectron 2015, http://www.instructables.com/member/TheFreeElectron/ -->

<html>
    <head>
        <meta charset="utf-8" />
        <title>Light Control Panel</title>
    </head>
 
    <body style="background-color: white;">

    <?php
      
        if(isset($_POST['button1'])) { 
            echo "ON";
            shell_exec ("sudo python /home/pi/lightWebsite/neopixeltest.py True"); 
        } 
        if(isset($_POST['button2'])) { 
            echo "OFF"
            shell_exec ("sudo python /home/pi/lightWebsite/neopixelsoff.py False"); 
        } 
    ?> 

    <form method="post"> 
        <input type="submit" name="button1"
                value="Button1"/> 
          
        <input type="submit" name="button2"
                value="Button2"/> 

        <p>R value <input type="text" name="R" /></p>
        <p>G value <input type="text" name="G" /></p>
        <p>B value <input type="text" name="B" /></p>
        <p><input type="submit" /></p>
    </form> 

	 
    </body>
</html>

<!--shell_exec ("sudo python /home/pi/lightWebsite/neopixeltest.py")-->
