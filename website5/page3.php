<?php
$user = ['name'=> 'Somi', 'email' => 'ieigbe@valdosta.edu', 'age' => 33];
$user = serialize($user);
setcookie('user', $user, time() + (86400 * 30));
$user = unserialize($_COOKIE['user']);
print_r($user);
echo '<br>' . $user['name']. '<br>';
echo $user['email']. '<br>';
echo $user['age'];
