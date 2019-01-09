<?php

#Conditional - 
/*

==
===
<
>
<=
>=
!==
!=
*/

$num = 5;
if($num == 5) {//test if its equal to 5

 //   echo ' 5 passed';
}

$num = '5'; //5 has become a string
if($num === 5) {// triple === tests if its identical to 5, but its not because 5 is a string so no output

    echo ' 5 passed';
}
$num = 5;
if($num == 5) {//test if its equal to 5

//    echo ' 5 passed';
} elseif ($num == 6) {
  echo '6 passed';
}
 else {
    echo 'did  not pass' ; 
}


#Nesting IF

$num = 6;
/*
if($num >= 4)
{
    if($num < 10){
        echo $num . ' passed';
    }
        
    elseif($num == 10){
        echo $num. ' passed' .'<br>'.'Excellent!!!';
}    
       
}
    */
/*if($num > 4 XOR $num <= 10 ){ //XOR is used when only one value can be true not either value of both
    echo $num. ' passed';

}
*/

#SWITCH
$favColor = 'purple';
switch ($favColor) {
    case 'red':
       echo 'Your favorite color is red';
        break;
        case 'blue':
        echo 'Your favorite color is blue';
         break;
         case 'green':
       echo 'Your favorite color is green';
        break;
    default:
       echo 'Your favorite color is something else';
        break;
}


?>