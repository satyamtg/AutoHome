<?php
$state = $_GET["state"]; // Declares the request as a variable
$textfile1 = "status1.tgf";
$textfile2 = "status2.tgf";
$textfile3 = "status3.tgf";
$textfile4 = "status4.tgf";
 
if($state == '1' || $state == '0') //checks for valid GET parameters
{
 
   $fh1 = fopen($textfile1, 'w');
	fwrite($fh1, $state);
    fclose($fh1);
  
    $fh2 = fopen($textfile2, 'w');
	fwrite($fh2, $state);
    fclose($fh2);
	
   $fh3 = fopen($textfile3, 'w');
	fwrite($fh3, $state);
    fclose($fh3);

   $fh4 = fopen($textfile4, 'w');
	fwrite($fh4, $state);
    fclose($fh4);
	
  if($state == '0')
    {  header("Location: d11.html");}
  if($state == '1')
    {  header("Location: d10.html");}

  
}
?>