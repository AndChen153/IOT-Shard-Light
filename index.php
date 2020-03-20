<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <title>Light Control Panel</title>
    </head>
 
    <body style="text-align:center;">

    <h1 style="color:green;"> 
        Light Control Panel 
    </h1> 

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

    <?php
      
        if(isset($_POST['ON'])) { 
            echo "ON";
            shell_exec ("sudo python /home/pi/lightWebsite/neopixeltest.py True"); 
        } 
        if(isset($_POST['OFF'])) { 
            echo "OFF";
            shell_exec ("sudo python /home/pi/lightWebsite/neopixeltest.py True 0 0 0"); 
        }
        if(isset($_POST['RED'])) { 
            echo "RED";
            shell_exec ("sudo python /home/pi/lightWebsite/neopixeltest.py True 0 255 0"); 
        } 
        if(isset($_POST['GREEN'])) { 
            echo "GREEN";
            shell_exec ("sudo python /home/pi/lightWebsite/neopixeltest.py True 255 0 0"); 
        }
        if(isset($_POST['BLUE'])) { 
            echo "BLUE";
            shell_exec ("sudo python /home/pi/lightWebsite/neopixeltest.py True 0 0 255"); 
        } 
    ?> 



    <h3>Enter RGB Values</h3>
    <p><a href="https://www.google.com/search?q=rgb+color+picker&oq=rgb+color+picker&aqs=chrome.0.0l8.1775j0j7&sourceid=chrome&ie=UTF-8">Easy RBG color picker</a></p>

    <?php
    shell_exec ("sudo python /home/pi/lightWebsite/neopixeltest.py '".$_POST["greenAMT"]."' '".$_POST["redAMT"]."' '".$_POST["blueAMT"]."'");
    ?>

    <form method="post">
        RED: <input type="int" name="redAMT"><br>
        GREEN: <input type="int" name="blueAMT"><br>
        BLUE: <input type="int" name="greenAMT"><br>
        <input type="submit">
    </form>
    
	 
    </body>
</html>

<!--shell_exec ("sudo python /home/pi/lightWebsite/neopixeltest.py")-->
