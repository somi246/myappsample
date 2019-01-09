<?php if(isset($_POST['submit'])){
    session_start(;// Start the session)


    $_SESSION['name'] = htmlentities($_POST['name']);
    
    $_SESSION['email'] = htmlentities($_POST['email']);
}

<!DOCTYPE html>
<html>
<head>
  <title>PHP SESSIONS</title>
  
</head>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>"> 
    <input type="text" name="name" placeholder="Enter Name">
    <br>
    <input type="text" name="email" placeholder="Enter Email">
    <br>
    <input type="submit" name="submit" value="Submit">
</form>
<body>
    
</body>
</html>