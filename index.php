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

    <?php
        $red = $green = $blue = 0;

        if(isset($_POST['ON'])) { 
            echo "ON";
            $red = $green = $blue = 255;
            //shell_exec ("sudo python /home/pi/lightWebsite/neopixeltest.py True '".$green."' '".$red."' '".$blue."'"); 
        } 
        if(isset($_POST['OFF'])) { 
            echo "OFF";
            $red = $green = $blue = 0;
            //shell_exec ("sudo python /home/pi/lightWebsite/neopixeltest.py True '".$green."' '".$red."' '".$blue."'"); 
        }
        if(isset($_POST['RED'])) { 
            echo "RED";
            $green = $blue = 0;
            $red = 255;
            //shell_exec ("sudo python /home/pi/lightWebsite/neopixeltest.py True '".$green."' '".$red."' '".$blue."'"); 
        } 
        if(isset($_POST['GREEN'])) { 
            echo "GREEN";
            $red = $blue = 0;
            $green = 255;
            //shell_exec ("sudo python /home/pi/lightWebsite/neopixeltest.py True '".$green."' '".$red."' '".$blue."'"); 
        }
        if(isset($_POST['BLUE'])) { 
            echo "BLUE";
            $red = $green = 0;
            $blue = 255;
            //shell_exec ("sudo python /home/pi/lightWebsite/neopixeltest.py True '".$green."' '".$red."' '".$blue."'"); 
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



    <h3>Enter RGB Values</h3>
    <p><a href="https://www.google.com/search?q=rgb+color+picker&oq=rgb+color+picker&aqs=chrome.0.0l8.1775j0j7&sourceid=chrome&ie=UTF-8">Easy RBG color picker</a></p>

    <?php
        shell_exec ("sudo python /home/pi/lightWebsite/neopixeltest.py True '".$green."' '".$red."' '".$blue."'");
    ?>

    <form action="" method="post">
        RED: <input type="int" name="red" value="<?php echo $red;?>"><br>
        GREEN: <input type="int" name="blue" value="<?php echo $green;?>"><br>
        BLUE: <input type="int" name="green" value="<?php echo $blue;?>"><br>
        <input type="submit">
    </form>
    
	 
    </body>
</html>

<!--shell_exec ("sudo python /home/pi/lightWebsite/neopixeltest.py")-->
