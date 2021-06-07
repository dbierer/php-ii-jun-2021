<?php
namespace Test\Entity;

class SpecialUser extends User
{
	public $phone = '';
	public $email = '';
	public function getInfo()
	{
		return [$phone, $email];
	}
}
