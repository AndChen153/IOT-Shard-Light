<html>
<body>


<?php
    shell_exec ("sudo python /home/pi/lightWebsite/neopixeltest.py '".$_POST["greenAMT"]."' '".$_POST["redAMT"]."' '".$_POST["blueAMT"]."'");
?>

</body>
</html>