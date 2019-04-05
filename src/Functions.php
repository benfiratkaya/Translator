<?php
	use Translator\Translator;
	
	function translate($text = null, $variable = null) {
		return Translator::$current->translate($text, $variable);
	}
	
	function translator($text = null, $variable = null) {
		return translate($text, $variable);
	}
	
	function t__($text = null, $variable = null) {
		return translate($text, $variable);
	}

	function e__($text = null, $variable = null) {
		echo translate($text, $variable);
	}
