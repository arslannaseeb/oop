<?php
class myclass{
    public function __set($name, $value){
		echo "setting $name property to $value \n";
        $this->$name = $value;
    }
public function __get($name){
		echo "value of $name property is ";
    return $this->$name;
    }
    public function __isset($name){
        return isset($this->$name);
    }
    public function __unset($name){
        unset($this->$name);
    }
}
$obj = new myclass();
$obj->myprop="test";
echo $obj->myprop . "\n";
var_dump (isset($obj->myprop));
unset($obj->myprop);
var_dump (isset($obj->myprop));
?>