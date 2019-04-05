<?php
	namespace Translator;
	abstract class Register {
		public static $current;
		public function register() {
			$previous = self::$current;
			self::$current = $this;
			static::includeFunctions();
			return $previous;
		}
		private static function includeFunctions() {
			include_once __DIR__.'/Functions.php';
		}
	}
