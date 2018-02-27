<?php

namespace App;
 
use Twig_Extension;
use Twig_SimpleFilter;
 
class TwigUpperNoAccentsFilter extends Twig_Extension {
 
	/**
	 * Functions
	 * @return void
	 */
	public function getFilters() {
		return [
            new Twig_SimpleFilter('upper_no_accents', [$this, 'toUpper'])
        ];
	}

	public function removeAccents($str) {
		$search = ['Ά', 'Έ', 'Ή', 'Ί', 'Ϊ', 'Ό', 'Ύ', 'Ϋ', 'Ώ', 'Á', 'É'];
		$replace = ['Α', 'Ε', 'Η', 'Ι', 'Ι', 'Ο', 'Υ', 'Υ', 'Ω', 'A', 'E'];
		return str_replace($search, $replace, $str);
	}

	public function toUpper($str) {
		return $this->removeAccents(mb_strtoupper($str, 'UTF-8'));
	}
 
}