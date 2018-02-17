<?php

namespace App;
 
use Twig_Extension;
use Twig_SimpleFunction;
 
class TwigEnvHelper extends Twig_Extension {
 
	/**
	 * Functions
	 * @return void
	 */
	public function getFunctions() {
		return [
            new Twig_SimpleFunction('env', function ($param, $default = '') {
                return env($param, $default);
            }, ['is_safe' => ['html']])
        ];
	}
 
}