<?php
	/*
	 * @see        https://github.com/benfiratkaya/Translator
	 * @author     Firat Kaya
	 * @version    1.1.0
	 * @copyright  2019 Firat Kaya
	*/
	namespace Translator;
	class Exception extends \Exception {
		public function errorMessage() {
			return '<strong>'.htmlspecialchars($this->getMessage()).'</strong><br />';
		}
	}
