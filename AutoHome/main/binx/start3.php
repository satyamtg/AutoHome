<?php
$state;
$textfile = "status3.tgf";

$fh = fopen($textfile, 'r');
$state=fread($fh,1);
fclose($fh);
 if($state == '1')
  {
	header("Location: d30.html"); // Return to frontend (on.html)
  }
  if($state == '0')
  { 
	header("Location: d31.html"); // Return to frontend (off.html)
  }
  

?>