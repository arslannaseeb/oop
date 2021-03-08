<?php 

// Class Geeks 
class Geeks { 
public function sayhello() { 
	echo "Hello"; 
} 
} 

// Trait forGeeks 
//defining trait here 
trait forGeeks { 
public function sayfor() { 
	echo " Geeks"; 
} 
} 

class Sample extends Geeks { 
use forGeeks; // must refer to that trait to use it 
public function geeksforgeeks() { 
	echo "\nGeeksforGeeks"; 
} 
} 

$test = new Sample(); 
$test->sayhello(); 
$test->sayfor(); 
$test->geeksforgeeks(); 
?> 
