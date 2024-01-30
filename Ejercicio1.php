<?php
abstract class Animal
{
    public $nombre;

    public function __construct($nombre)
    {
        $this->nombre = $nombre;
    }
    abstract public function makeSound();
  
}

class Perro extends Animal {
    public function makeSound(){
        echo "Bup, bup!";
    }
}
class Cat extends Animal {
    public function makeSound(){
        echo "Miauuu!!!";
    }
}  

$perro = new Perro("Pancho");
$gato = new Cat("Juanito");

echo "<pre>";
echo $perro->makeSound() . "\n";
echo $gato->makeSound() . "\n";
echo "</pre>";