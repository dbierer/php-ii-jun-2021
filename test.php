<?php
class UserEntity {
    public function __construct(
        protected string $firstName,
        protected string $lastName) {
    }
    /*
	public function __get($prop)
	{
		throw new Exception('This property does not exist: ' . $prop);
	}
	*/
    public function __toString(): string {
        return $this->firstName . ' ' . $this->lastName;
    }
}
 
$userEntity = new UserEntity('Mark', 'Watney');
echo $userEntity->middleName;
