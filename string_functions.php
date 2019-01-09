<?php
#substr()
#Returns a portion of a string

$output = substr('Hello', 0); //Displays the 1st character, note that it starts counting from 0, like an array
$output = substr('Hello', 1, 3); // displays the 2nd character  to the 4th chracter
$output = substr('Hello', -2);//the negative sign makes it start from the back
//echo $output;

# strlen()
#Returns the length of a string

$output = strlen('Hello World');
//echo $output;

# strpos()
#Finds the position of the first occurence of a substring

$output = strpos('Hello World', 'o');// output will be 4, because it 0, 1,2, 3,4
//echo $output;

# strpos()
#Finds the position of the last occurence of a substring
$output = strrpos('Hello World', 'o');
//echo $output;

#trim()
#strips white space

$text = 'Hello World                 ';
//var_dump($text);

$trimmed = trim($text);
//var_dump($trimmed);

#strtoupper()
#Converts string to uppercase letters, makes everything uppercase

$output = strtoupper('Hello World');
//echo $output;

#strtolower()
#Converts string to lowercase letters, makes everything lowercase

$output = strtolower('Hello World');
//echo $output;

#ucwords()
#Capitalizes the first letter of every word

$output = ucwords('hello world');
//echo $output;

#str_replace()
#Replace all occurences of a search string with a replacement

$text = 'Hello World';
$output = str_replace('World', 'Everyone', $text ); //output will be Hello Everyone
//echo $output;

#is_string() check if variable is string
$val = '22';
$output = is_string($val);
//echo $output;
$values = array(true, false, null, 0.2, 'abc', '0', 0, ' ', '', 5);

foreach ($values as $value) {
        if(is_string($value)){
//            echo "{$value} is a string<br>";
        }
}
# gzcompress()
#Compress a string

$string = "Lorem ipsum bibendum tempor class tincidunt habitasse luctus, neque nibh habitant consequat turpis etiam convallis tellus, neque integer vel consequat maecenas suscipit fringilla vestibulum velit ipsum commodo molestie pharetra etiam arcu ornare et est.

Lacus suspendisse nisi varius adipiscing proin dictum morbi nulla aliquet commodo nostra primis, massa sodales primis nam lacinia viverra enim torquent integer consequat primis.

Donec consequat gravida scelerisque libero potenti donec molestie pulvinar nam proin tellus curabitur, est tempor fames phasellus turpis habitant a nullam etiam ligula mauris netus nostra lobortis vestibulum.

Et accumsan sed gravida tristique faucibus turpis cras at magna, elementum ligula amet nostra faucibus donec netus donec, tincidunt iaculis bibendum id conubia neque lobortis phasellus.

Tellus bibendum iaculis eleifend sollicitudin tristique porttitor velit scelerisque, dui neque fringilla ligula tincidunt vel odio, et nulla eget aenean primis quam curabitur";

$compressed = gzcompress($string);
//echo $compressed;

$original = gzuncompress($compressed);
echo $original;