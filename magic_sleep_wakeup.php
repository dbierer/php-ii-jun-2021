<?php
class UserEntity {
    public function __construct(
        protected string $firstName,
        protected string $lastName,
        protected string $password) {
    }
    // whitelist of allowed properties
    public function __sleep()
    {
		return ['firstName', 'lastName'];
	}
	// objectb initialization post unserialization
	public function __wakeup()
	{
		$this->password = base64_encode(random_bytes(8));
	}
	// produces JSON encoding for this object
	public function getJson()
	{
		$vars = get_object_vars($this);
		// remove the password from the JSON string
		unset($vars['password']);
		return json_encode($vars);
	}
}
 
$userEntity = new UserEntity('Mark', 'Watney', 'password');
$string = serialize($userEntity);
echo $string;
$obj = unserialize($string);
// original object is restored (minus the password)
var_dump($obj);

$json = $userEntity->getJson();
echo $json;
$obj = json_decode($json);
// original object is not restored
var_dump($obj);
