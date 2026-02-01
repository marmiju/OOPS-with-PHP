<?php
// create class as like blueprint 
// create object instance of User Class 
// set value with constractor
// get single vlue uding helper getter

class User
{
    private $name;
    private $email;
    private $password;

    public function __construct($name, $email, $password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    public function getName()
    {
        return $this->name;

    }

}

$user1 = new User("mahin", "mahin@gmail.com", "mahin@1234");
echo $user1->getname();

?>