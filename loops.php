<?php
# Loops-  executes code a  set number of times
/*

For
While
Do...While
Foreach

*/
#For Loop
# @params - initialization, condition, increment
/*
for ($i=0; $i <= 10 ; $i++) { 
    echo 'Number' . ' ' . $i;
    echo '<br>';
}
*/
 #While Loop is usually used over a for loop if you dont know the set number or condition
 #params - condition
 /* 
 $i = 0;
while ($i <= 10) {
    echo 'Number' . ' ' . $i;
    echo '<br>';
    $i++;
}
*/
#Do...While
#@params - condition
/*
$i = 0;

do {
    echo 'Number' . ' ' . $i;
   echo '<br>';
   $i++;
} while ($i <= 10); //here while is outside of the curly braces, all the action happens within do


*/
#For each is used for arrays

/*$people = array('Kevin', 'Jeremy', 'Sara');
foreach ($people as $person) {
    echo $person;
    echo '<br>';
} 
*/

$people = array('Kevin' => 'kevin@hotmail', 'Jeremy' => 'jer@hotmail' , 'Sara'=> 'sara@gmail');
foreach ($people as $person => $email) {
    echo $person . ' : ' . $email;
    echo '<br>';
}
?>