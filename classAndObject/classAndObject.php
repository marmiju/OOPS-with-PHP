<?php
// create class as like blueprint 
// create object instance of User Class 
// set value with helper function 
// get value as array
// print value using index
class User {
    private $name;
    private $email;
    private $password;

    public function setvalue($name,$email,$password){
        $this->name=$name;
        $this->email=$email;
        $this->password=$password;
    }

    public function getvalue(){ 
        return [$this->name, $this->email, $this->password];

    }

}

$user1 = new User();

$user1->setvalue("mahin", "mahin@gmail.com", "mahin@1234");
$name = $user1->getvalue()[0];
echo $name;

?>