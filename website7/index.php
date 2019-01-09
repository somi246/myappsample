<?php
$path = 'dir0/dir1/myfile.php';
$file = 'file1.txt';
//Returns filename
#echo basename($path);

//Returns filename without extension

//echo basename($path, '.php');

//Returns the directory name from the path

#echo dirname($path);

//Check if file exists

#echo file_exists($file); // Displays 1 if the file exists and diplays nothing when it does.

//Get abs path
#echo realpath($file); // Outputs the entire file path  from the C drive
//C:\xampp\htdocs\phpsandbox\website7\file1.txt

//Checks to see if file

//echo is_file($file); //Its similar to file_exist the only difference is that 
//you can use file_exists for folders as well but you cant use is_file for folders.

#echo is_file('test');  //No output
#echo file_exists('test');

// check if file is writeable
//echo is_writable($file); //if i change the property of the file to read only, there will be no output

//Check if file is readable
#echo is_readable($file);

//Cet file size
#echo filesize($file);

//Create a directory
//mkdir('testing');

//removes directory if empty
#rmdir('testing');

//Copy file
#echo copy('file1.txt','file2.txt' );

//Rename file

#rename('file2.txt', 'myfile.txt');

//Delete file
//unlink('myfile.txt');

//Write from file to string
#echo file_get_contents($file);

//Write string to file
#echo file_put_contents($file, 'Goodbye'); //Changes content in the file to Goodbye

#echo file_put_contents($file, 'Hello World'); // changes content back to Hello World

#$current = file_get_contents($file);
#$current .= ' Goodbye World';
#file_put_contents($file, $current);

//Open a file for reading
$handle = fopen($file, 'r');
$data = fread($handle, filesize($file));
echo $data;
fclose($handle);

//Open a file for writing
$handle = fopen('file2.txt', 'w');
$txt = "God is the greatest\n";
fwrite($handle, $txt);
$txt= "Cos im His favorite\n";
fwrite($handle, $txt);
fclose($handle);