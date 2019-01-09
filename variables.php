<?php
//Single line
#Single line
/*
Multiline
*/

#Variable
/* -Prefix $
    -begin with letter or an underscore
    -Only letters numbers and numbers and underscore that can be used
    -case sensitive

    */

    #Data types
    /* 
    String
    Integers
    floats
    Booleans
    Arrays
    Objects
    NULL
    Resource
    */

$output = 'Hello World';
$num1 = 4;
$num2 = 10;
$sum = $num1  + $num2;
echo $sum;
$float1 = 4.4;
$bool1 = true;
#echo $output;

$string1 = 'Hello1';
$string2 ='World';
$string3 = "They're here"; //Use the back slash to escape the character either using " or '
$greeting = $string1 . ' ' . $string2;
$greeting2 = "$string1 $string2";
echo $string3;
echo $greeting2;
#echo 'Hello World';
define ('Greeting', 'Hello Everyone'); //this is a value that wont change, they are constants
echo Greeting;
?>
