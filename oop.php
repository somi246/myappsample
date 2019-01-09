<?php
class Person{
  //public  $name; //can be accessd form any clas
   //public $email;

   private $name; //Make it private and use a public function to access it
   private $email;

public function __construct($name,$email){
  
    $this->name = $name;
    $this->email = $email;

    #echo 'Person created <br>';//this is the same as using
    echo __CLASS__.' created<br>';
}


public function __destruct(){ //deconstructor

    echo __CLASS__.' destroyed <br>';
}
   public function setName($name){ //this are getters and setters methods
       $this->name = $name;
   }
   public function getName(){
       return $this->name.'<br>';
   }
// Do the same for $email
   public function setEmail($email){
$this->email = $email;
   }

   public function getEmail(){
       return $this->$email. '<br>';
   }
}

$person1 = new Person('John Doe', 'ieigbe@valdosta.edu');

##$person1->setName('Tirzah E');
echo $person1-> getName();

//$person1 -> name = 'John Doe';

//echo $person1->name;
