<?php
$state = $_GET["state"]; // Declares the request as a variable
$textfile = "status4.tgf";
 
if($state == '1' || $state == '0') //checks for valid GET parameters
{
 if($state == '1')
  { $fh = fopen($textfile, 'w');
	fwrite($fh, $state);
    fclose($fh);
	header("Location: d40.html"); // Return to frontend (on.html)
  }
  if($state == '0')
  { $fh = fopen($textfile, 'w');
	fwrite($fh, $state);
    fclose($fh);
	header("Location: d41.html"); // Return to frontend (off.html)
  }
  
}
?>