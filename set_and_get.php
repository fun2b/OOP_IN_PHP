<?php

class User{
	private $uname; //private property- accesible only within parent class

	public function setname($name){
		$this->uname = $name;
	}
	public function getname():string{
		return $this->uname;
	}
}

$u =  new User();
$u->setname("john");
echo $u->getname();

?>


