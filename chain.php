<?php

class User{
	public $fname;
	public function register(){
		echo $this->fname." registered";
		return $this;
	}
	public function mail(){
		echo " mailed";
	}
}

$u = new User;
$u->fname = "john";
$u->register()->mail();
?>


