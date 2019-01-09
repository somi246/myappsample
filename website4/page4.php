<?php
session_start();
//unset($_SESSION['name']); //to unset the name variable, set it again in page3.php

session_destroy(); //destroy the session
?>