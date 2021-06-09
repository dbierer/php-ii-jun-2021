<?php
class Base
{
	const TEST = 'base';
	public $arr = [];
	public function setValue(string $key, int $value) : int
	{
		$this->arr[$key] = $value;
		return count($this->arr);
	}
}

class Child extends Base
{
	const TEST = 'child';
	public function setValueTwo(string $key, mixed $value) : bool
	{
		$xyz = $this->setValue($key, $value);
		$this->arr[$key] = $value;
		return (bool) count($this->arr);
	}
}

$child = new Child();
echo $child::TEST;
