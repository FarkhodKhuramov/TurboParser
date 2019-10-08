<?php
use IMethod;
public class StripTags implements IMethod{
	public function run(string $text):string
	{
		return strip_tags($text);
	}
}