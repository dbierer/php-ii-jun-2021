<?php
class UserEntity {
    public function __construct(
        protected string $firstName,
        protected string $lastName,
        protected string $password) {
    }
    public function __sleep()
    {
		return ['firstName', 'lastName'];
	}
	public function __wakeup()
	{
		$this->password = base64_encode(random_bytes(8));
	}
	public function getJson()
	{
		$vars = get_object_vars($this);
		unset($vars['password']);
		return json_encode($vars);
	}
}
 
$userEntity = new UserEntity('Mark', 'Watney', 'password');
$string = serialize($userEntity);
echo $string;
$obj = unserialize($string);
var_dump($obj);

$json = $userEntity->getJson();
echo $json;
$obj = json_decode($json);
var_dump($obj);
