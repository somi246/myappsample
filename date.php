<?php
/*
echo date('d'); number of the day in the week, like 28th
echo date('m'); month
echo date('y'); year
echo date('l'); day of the week

echo date('Y/m/d'); date format
echo date('m-d-Y'); date format
echo date('h'); hours
echo date('i'); Minutes
echo date('s'); Seconds
echo date('a'); Am or Pm
*/
//echo date('h:i:sa');

//Set time zone
date_default_timezone_set('America/New_York');
 
# Timestamp is the longer integer containing the number of seconds between the Unic=c Epoch (January 1 1970 00:00:00 GMT) and the time specified
$timestamp = mktime(12,10,00,06,24,1985); //hr, mins, seconds, month, day year
//echo $timestamp;
//echo date('m/d/Y h:i:sa', $timestamp);

$timestamp2 = strtotime ('5:00pm September 15 2013');
//echo $timestamp2;
$timestamp3 = strtotime ('tomorrow');
//echo $timestamp3;

$timestamp4 = strtotime ('next Sunday');

echo date('m/d/Y h:i:sa', $timestamp4);// php.net/manual/en/function.date.php to get info on more date functions.
?>