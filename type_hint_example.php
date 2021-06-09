<?php
interface SomethingInterface
{
	public function getSomething();
}
class Base implements SomethingInterface
{
	public function getSomething()
	{
		return 'something';
	}
}
class Dad extends Base
{
	public $name = 'Dad';
}
class Child extends Dad
{
	public $activity = 'Non stop playing';
}
class Doug extends ArrayIterator  implements SomethingInterface
{
	public function getSomething()
	{
		return 'doug';
	}
}
function whatever(SomethingInterface $obj)
{
	return $obj->getSomething();
}

$dad = new Dad();
$child = new Child();
$doug = new Doug();
echo whatever($dad);
echo whatever($child);
echo whatever($doug);
