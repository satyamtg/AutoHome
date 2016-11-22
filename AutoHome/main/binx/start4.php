<?php
$state;
$textfile = "status4.tgf";

$fh = fopen($textfile, 'r');
$state=fread($fh,1);
fclose($fh);
 if($state == '1')
  {
	header("Location: d40.html"); // Return to frontend (on.html)
  }
  if($state == '0')
  { 
	header("Location: d41.html"); // Return to frontend (off.html)
  }
  

?>