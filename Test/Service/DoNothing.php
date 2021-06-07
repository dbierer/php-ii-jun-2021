<?php
namespace Test\Service;
use Test\Entity\User;
class DoNothing
{
	public $user = NULL;
	public function __construct(User $user = NULL) 
	{
		$this->user = $user;
	}
	public function getFullName()
	{
		return $this->user->getFirstName() . ' ' . $this->user->getLastName();
	}
}
