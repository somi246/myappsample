<?php
session_start();

print_r($_SESSION);



//$name = $_SESSION['name'];
$name = isset($_SESSION['name']) ? $_SESSION['name'] : 'Guest'; // reset the name variable, if there is no bname to 'Guest'
$email =isset($_SESSION['email']) ? $_SESSION['email'] : 'Not Subscribed';

?>
<!DOCTYPE html>
<html>
<head>
  

    <title>Page Title</title>
  
</head>
<body>
    <h1>Hello <?php echo $name; ?></h1>
</html>