<?php
// People Array
$people[] = "Liam";
$people[] = "Noah";
$people[] = "William";
$people[] = "James";
$people[] = "Logan";
$people[] = "Benjamin";
$people[] = "Mason";
$people[] = "Elijah";
$people[] = "Elias";
$people[] = "Buddy";
$people[] = "Jerome";
$people[] = "Julie";
$people[] = "Lesley";
$people[] = "Somi";
$people[] = "Tirzah";
$people[] = "Hermon";
$people[] = "Anne";
$people[] = "Michael";
$people[] = "Evelyn";


//Get Query String
$q = $_REQUEST['q'];
$suggestion = '';

//Get suggestions

if ($q !== ""){
    $q = strtolower($q);
    $len = strlen($q);
    foreach ($people as $person) {
      if (stristr($q, substr($person, 0, $len))) {
        if($suggestion === ""){
            $suggestion = $person;

        }else{
            $suggestion .= ", $person";
        }
      }
    }
}

echo $suggestion === "" ? "No suggestion" : $suggestion;