<?php
/*Difference between server and cookies is that with sessions, data is stored on the server and they are more secure, 
while with cookies the dat is stored in the browser. Even though you can set an expiry date 
for cookies even afer you close, its still more preferable to use sessions.
*/
if(isset($_POST['submit'])) {

    $username = htmlentities($_POST['username']);
   setcookie('username', $username, time()+3600); //set cookies for 1 hour

   header('Location: page2.php');// redirect to page two

}
?>
<!DOCTYPE html>
<html>
<head>
    
    <title>PHP Cookies</title>

</head>
<body>
    <form method="POST" action= "<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="text" name="username" placeholder="Enter Username">
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>