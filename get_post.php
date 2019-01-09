<?php 

if(isset($_GET['name'])){
    //print_r($_GET);
 $name= htmlentities ($_GET['name']); // for security, to turn html tags into ordinary elements
// echo $name;
}
/*
if(isset($_POST['name'])){// post is a more secure way to send because it doesnt show any link to where the file can be found.
    print_r($_POST);
  $name= htmlentities($_POST['email']); // for security, to turn html tags into ordinary elements
  echo $name;
 }

 if(isset($_REQUEST['name'])){// 
   // print_r($_REQUEST);
  $name= htmlentities($_REQUEST['email']); // HTMLENTITIES for security, to turn html tags into ordinary elements
  echo $name;
 }
 */
//echo $_SERVER['QUERY_STRING'];
?> 
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>My website</title>
        
    </head>
    <body>
        <form method = "GET" action= "get_post.php">
            <div>
                <label>Name</label><br>
                <input type = "text" name="name">
            </div>
            <div>
                <label>Email</label><br>
                <input type = "text" name="email">
            </div>
            <input type="submit" value="Submit">
        </form>
    <ul>
    <li>
    <a href="get_post.php?name=Brad">Brad</a>
    </li>
    <li>
    <a href="get_post.php?name=Steve">Steve</a>
    </li>
     </ul>
    <h1><?php echo "{$name}'s Profile"; ?></h1>
    </body>
</html>