<?php



abstract class User{
	abstract public function role();
}

class Admin extends User{
	public function role():string{ return __CLASS__;}
}

$a = new Admin();
echo $a->role();

?>


