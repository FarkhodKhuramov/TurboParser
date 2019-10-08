<?php
use IMethod;
use StripTags;
use removeSpaces;
// use replaceSpacesToEol;
// use htmlspecialchars;
// use removeSymbols;
public abstract class Method{
	IMethod $method;
	function __construct(string $method = null)
	{
		switch ($method) {
			case 'stripTags':
				$this->method = new StripTags();
				break;
			case 'removeSpaces':
				$this->method = new removeSpaces();
				break;
			// case 'replaceSpacesToEol':
			// 	$this->method = new replaceSpacesToEol();
			// 	break;
			// case 'htmlspecialchars':
			// 	$this->method = new htmlspecialchars();
			// 	break;
			// case 'removeSymbols':
			// 	$this->method = new removeSymbols();
			// 	break;
			// case 'toNumber':
			// 	$this->method = new toNumber();
			// 	break;
			default:
				# code...
				break;
		}
		return $this->method;
	}
}