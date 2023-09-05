<?php

class Human {
    protected $name;
    public function __construct($name){
        $this->name = $name;
    }
}

// Création de la class Person qui hérite de la class Human
class Person extends Human {
    private $age;
    
    public function __construct($name, $age){
        parent::__construct($name);
        $this->age = $age;
    }

    public function setName($name){
        $this->name = $name;
    }
    
    public function getName(){
        return $this->name;
    }
    
    public function setAge($age){
        $this->age = $age;
    }
    
    public function getAge(){
        return $this->age;
    }
    
    public function displayInfo(){
        echo "Name: " . $this->getName() . ", Age: " . $this->getAge();
    }
}

// Instanciation de la class Person avec modification des valeurs
$person = new Person("John Doe", 30);
$person->setName("Jane Smith"); // Changer le nom
$person->setAge(35); // Changer l'age
$person->displayInfo(); // Nouveau output: Name: Jane Smith, Age: 35

