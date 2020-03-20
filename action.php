<?php
    shell_exec ("sudo python /home/pi/lightWebsite/neopixeltest.py '".$_GET["greenAMT"]."' '".$_GET["redAMT"]."' '".$_GET["blueAMT"]."'")
?>