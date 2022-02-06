<?php

class User{
	
	//protected property can be accessed and modified by child class
	
	protected $uname;
	public function setname($name){
		$this->uname = $name;
	}
}


class Admin extends User{
	public function role():string{
		return __CLASS__; //magic property -  tells the name of the class
	}

	public function hello():string{
		return "hello ".$this->role().", ".$this->uname;
	}
}

$a = new Admin();
$a->setname("john");
echo $a->hello();





