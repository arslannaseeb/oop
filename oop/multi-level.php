<?php

 class A {
       public function sayHi(){
        echo "hi";
    }
}


 class B extends A {
    
    public function sayBye(){
        echo "bye";
    }
}




class C extends B {
    
    public function sayOk(){
        echo "program is running ok";    
    }

    //do not need sayHi() and  sayBye() but they will be available.
}


$clc = new C();
$clc->sayOk();

