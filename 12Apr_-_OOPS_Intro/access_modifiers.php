<?php
class Person
{
    public $name; // Public property
    private $age; // Private property
    protected $email; // Protected property

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}

// Example usage
$person = new Person();
$person->name = "John";
// $person->age = "John";
// $person->email = "John";
echo $person->name;
?>