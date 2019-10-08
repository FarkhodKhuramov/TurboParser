<?php
use Method;
public class MethodProcessor{
	public function process(array $methods, string $text):string
	{
		foreach ($methods as $method) {
			$text = (new class($method){
				Method $object;
				function __construct($foo = null)
				{
					$this->object = new $foo;
					$this->object->run();
				}
			})
		}
	}
}