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
            shell_exec ("sudo python /home/pi/lightWebsite/neopixeltest.py True")
        } 
        if(isset($_POST['OFF'])) { 
            echo "OFF";
            $red = $green = $blue = 0; 
        }
        if(isset($_POST['RED'])) { 
            echo "RED";
            $green = $blue = 0;
            $red = 255;
        } 
        if(isset($_POST['GREEN'])) { 
            echo "GREEN";
            $red = $blue = 0;
            $green = 255; 
        }
        if(isset($_POST['BLUE'])) { 
            echo "BLUE";
            $red = $green = 0;
            $blue = 255;
        }
        if(isset($_POST['WHITE'])) { 
            echo "WHITE";
            $red = $green = $blue = 255;
        } 
        if(isset($_POST['POWEROFF'])) { 
            echo "SHUTTING DOWN";
            shell_exec ("sudo poweroff")
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
        <input type="submit" name="WHITE"
                value="white"/> 
        <input type="submit" name="POWEROFF"
                value="poweroff"/> 
    </form> 



    <h3>Enter RGB Values</h3>
    <a href="https://www.google.com/search?q=rgb+color+picker&oq=rgb+color+picker&aqs=chrome.0.0l8.1775j0j7&sourceid=chrome&ie=UTF-8" target="_blank">RBG color picker</a> 

    <?php
        if(isset($_POST['submit'])){
            $red = $_POST["red1"];
            $green = $_POST["green1"];
            $blue = $_POST["blue1"];
        }
        shell_exec ("sudo python /home/pi/lightWebsite/neopixeltest.py True '".$green."' '".$red."' '".$blue."'");
    ?>

    <form method="post">
        RED: <input type="int" name="red1" value="<?php echo $red;?>"><br>
        GREEN: <input type="int" name="green1" value="<?php echo $green;?>"><br>
        BLUE: <input type="int" name="blue1" value="<?php echo $blue;?>"><br>
        <input type="submit" value="submit" name="submit">
    </form>
    
	 
    </body>
</html>

<!--shell_exec ("sudo python /home/pi/lightWebsite/neopixeltest.py")-->

