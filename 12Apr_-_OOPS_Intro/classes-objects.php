<?php
// class Person
// {
//     private $name;
//     public function setName($name)
//     {
//         $this->name = $name;
//         return $this -> name;
//     }
// }

// $person = new Person();
// echo $person -> setName("LION");




class Person
{
    private $name;
    public function set_name($name)
    {
        $this->name = $name;
    }
    public function get_name()
    {
        return $this->name;
    }
}

$person = new Person();
$person->set_name("LION");
echo ($person->get_name());


?>