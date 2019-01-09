<?php
#Array+ variables that holds multiple values


/*
 -Indexed
 -Associative
 -Multi dimensional
 */
// Indexed
$people = array('Kevin', 'Jeremy', 'Sara');
//echo $people[0];
$ids = array(23,54,24);
//echo $ids[2];
$cars = ['Honda', 'Toyota', 'Kia'];
$cars[3] = 'Chevy';
$cars[] = 'BMW';
//echo $cars[4];
//echo count($cars);// counts the mumbers of values in the array
//print_r($cars);//Prints the arrays values and number
//var_dump($cars);// shows the dataa type


#Associative Array
$people = array('Brad'=> 35, 'Jose'=> 32, 'Somi' =>33);
$ids = [22 => 'Brad', 44 => 'Jose', 33=> 'Somi'];
//echo $people['Brad'];
//echo $ids[33];
$people['Jill'] = 42;
//echo $people['Jill'];
//print_r($people);
//var_dump($people);

#Multidimensional array
$cars = array(
    array('Honda', 20, 20),
    array('Honda', 60, 209),
    array('Kia', 40, 50),
);
echo $cars[0][0];
?>