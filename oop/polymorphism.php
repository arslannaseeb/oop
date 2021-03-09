<!DOCTYPE html>
<html>
<body>

<?php
// Interface definition
interface Animal {
  public function makeSound();
}

// Class definitions
class Cat implements Animal {
  public function makeSound() {
    echo " Meow ";
  }
}

class Dog implements Animal {
  public function makeSound() {
    echo " Bark ";
  }
}


class Mouse implements Animal {
  public function makeSound() {
    echo " Squeak ";
  }
}

// Create a list of animals
//creating objects of classes 

$cat = new Cat(); //mea=iw
$dog = new Dog(); //bow
$mouse = new Mouse(); //squeak 
$animals = array($cat, $dog, $mouse);

// OUtputing the animal's sound
foreach($animals as $animal) {
  $animal->makeSound();
}
?>
 
</body>
</html>
