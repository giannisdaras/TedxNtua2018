<?php

namespace App;
 
use Twig_Extension;
use Twig_SimpleFunction;
 
class TwigLocaleHelper extends Twig_Extension {
 
	/**
	 * Functions
	 * @return void
	 */
	public function getFunctions() {
		return [
            new Twig_SimpleFunction('getLocalizedURL', function ($locale) {
                return \LaravelLocalization::getLocalizedURL($locale);
            }, ['is_safe' => ['html']]),
            new Twig_SimpleFunction('getLocale', function () {
                return \LaravelLocalization::setLocale();
            }, ['is_safe' => ['html']])
        ];
	}
 
}