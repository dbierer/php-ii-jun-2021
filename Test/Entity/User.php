<?php
namespace Test\Entity;

class User
{
	private $token = 0;
	public $status = 0;
	protected $firstName = '';
	protected $lastName  = '';
    public function __construct(string $firstName = '', string $lastName = '') 
    {
		$this->token = bin2hex(random_bytes(16));
        $this->firstName = $firstName ;
        $this->lastName = $lastName ;
    }
    public function getFirstName()
	{
		return $this->firstName;
	}
	public function getLastName()
	{
		return $this->lastName;
	}
	private function getToken()
	{
		return $this->token;
	}
}
