<?php
ini_set('memory_limit','512M');
exec("/usr/bin/php73 cron.php  2>&1", $out, $result);
echo "Returncode: " .$result ."<br>";
echo "Ausgabe des Scripts: " ."<br>";
echo "<pre>"; print_r($out);