<!DOCTYPE html>
<!--TheFreeElectron 2015, http://www.instructables.com/member/TheFreeElectron/ -->

<html>
    <head>
        <meta charset="utf-8" />
        <title>Light Control Panel</title>
    </head>
 
    <body style="background-color: white;">

    <?php
    if ($_POST) {
        echo '<pre>';
        echo htmlspecialchars(print_r($_POST, true));
        echo '</pre>';
        shell_exec ("sudo python /home/pi/lightWebsite/neopixeltest.py");
    }
    ?>

    <form method="post">
    <p>R value <input type="text" name="R" /></p>
    <p>G value <input type="text" name="G" /></p>
    <p>B value <input type="text" name="B" /></p>
    <p><input type="submit" /></p>
    </form>
	 
    </body>
</html>

<!--system ("sudo python /home/pi/lightWebsite/neopixeltest.py")-->
