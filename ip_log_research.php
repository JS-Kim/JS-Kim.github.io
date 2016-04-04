<?php

//open up the log file
//$file = fopen('log.html', 'a');
$file = fopen('iplog_research.txt', 'a');

fwrite($file, date('m/d/y H:i:s').",\t".$_SERVER['REMOTE_ADDR']."\n");

//and finial, close the log file
fclose( $file );

?>

