<?php
$SERVER_LIST = array();
$file = BASE_PATH . "/dblist.conf";
$fp = fopen($file, 'rb');
while ( ($line = fgets($fp)) !== false) {
        $line = str_replace(array("\r\n", "\r", "\n"), "", $line);
        $SERVER_LIST[$line] = array(
                                   'host'     => "$line",
                                   'driver'   => extension_loaded('mysqli') ? 'mysqli' : 'mysql5'
                                   );
}
fclose($fp);
?>