<?php
	/*
	 * @see        https://github.com/benfiratkaya/Translator
	 * @author     Firat Kaya
	 * @version    1.1.0
	 * @copyright  2019 Firat Kaya
	*/
	namespace Translator;
	abstract class Generator {
		public static function read($type = null, $file = null) {
			if ($type === 'php') {
				return include_once $file;
			}
			if ($type === 'json') {
				return json_decode(file_get_contents($file), true);
			}
			if ($type === 'ini') {
				return parse_ini_file($file);
			}
			return false;
		}
	}
