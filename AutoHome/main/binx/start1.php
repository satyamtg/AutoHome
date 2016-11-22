<?php
$state;
$textfile = "status1.tgf";

$fh = fopen($textfile, 'r');
$state=fread($fh,1);
fclose($fh);
 if($state == '1')
  {
	header("Location: d10.html"); // Return to frontend (on.html)
  }
  if($state == '0')
  { 
	header("Location: d11.html"); // Return to frontend (off.html)
  }
  

?>