<?php
// class Animal
// {
//     protected $name;
//     protected $sound;

//     public function __construct($name, $sound)
//     {
//         $this->name = $name;
//         $this->sound = $sound;
//     }

//     public function makeSound()
//     {
//         echo "{$this->name} makes {$this->sound}.\n";
//     }
// }

// class Cat extends Animal
// {
//     public function __construct($name)
//     {
//         parent::__construct($name, "meow");
//     }

//     public function purr()
//     {
//         echo "{$this->name} purrs.\n";
//     }
// }

// class Dog extends Animal
// {
//     public function __construct($name)
//     {
//         parent::__construct($name, "woof");
//     }

//     public function fetch()
//     {
//         echo "{$this->name} fetches a ball.\n";
//     }
// }

// $cat = new Cat("Fluffy");
// $cat->makeSound();
// $cat->purr();

// $dog = new Dog("Fido");
// $dog->makeSound();
// $dog->fetch();

class animal
{
    private $name;
    function __construct($names)
    {
        $this->name = $names;
        echo("\n 1");
    }
    protected function type_name()
    {
        echo (" \n Name is " . $this->name);
    }
}
class dog extends animal
{
    function __construct($name)
    {
        parent::__construct($name);                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             
        parent::type_name();
        echo("\n 2");
    }

    function __destruct(){
        echo("\n Destryc");
    }
}
$a = new dog("TOMY");

