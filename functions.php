<?php

# Function - is a block of code that can be repeatedly called

/*
  Camel case - myfunction() most of the time (Symphony e.t.c)
  Lower case - my_function()
  Pascal Case - MyFunction() used for classes in Object oriented program
*/
function simpleFunction() { //user defined functions
echo 'Hello World';

}

//Run simple function

//simpleFunction();

//function with parameter

function sayHello($name = 'World'){

    echo 'Hello ' . $name. '<br>';
}

/*sayHello('Somi');
sayHello('Tirzah');
sayHello('Hermon'); // A value should be put in the variable $name 
sayHello();//if there is no name to display you can specify from the variable name that it should say World, except a name is specified
*/
//Return Value
function addNumbers($num1 = 0 ,$num2= 2) {

    return $num1 +$num2;

}
//echo addNumbers(2,3);
//By Reference

$myNum = 10;

function addFive($num) {

$num += 5;//same as saying  $num = $num + 5

}
function addTen(&$num) {//the ampersand adds a reference

    $num += 10;
    
    }

 addFive($myNum);
 echo $myNum. '<br>';
   
 addTen($myNum);

 echo $myNum;

?>