<?php
	 /*
	 * @see 	     https://github.com/benfiratkaya/Translator
	 * @author     Fırat Kaya
	 * @version    1.0
	 * @copyright  2019 Fırat Kaya
	 */
 	class Translator {
 		private $exception;
 		private $type;
 		private $lang;
 		private $path;
 		private $file;
 		private $text;
 		public function __construct($exception = null, $type=null, $lang=null, $path=null) {
 			$this->exception = (isset($exception)) ? $exception : false;
 			$this->type = (isset($type)) ? $type : 'json';
 			$this->lang = (isset($lang)) ? $lang : 'en_US';
 			$this->path = (isset($path)) ? rtrim($path, '/') : dirname(__FILE__).'/languages';
 			$this->setFile();
 		}
 		private function setFile() {
 			$this->file = $this->path.'/'.$this->lang.'.'.$this->type;
 			if (file_exists($this->file)) {
 				$jsonFile = file_get_contents($this->file);
 				if ($this->type === 'json') {
 					$this->text = json_decode($jsonFile, true);
 				}
 				else {
 					if ($this->exception === true) {
 						throw new Exception('type not defined');
 					}
 					else {
 						echo 'type not found';
 					}
 				}
 			}
 			else {
 				if ($this->exception === true) {
 						throw new Exception('file not defined');
 				}
 				else {
 					echo 'file not found';
 				}
 			}
 		}
 		public function setType($type = null) {
 			$this->type = (isset($type)) ? $type : 'json';
 			$this->setFile();
 		}
 		public function setLang($lang = null) {
 			$this->lang = (isset($lang)) ? $lang : 'en_US';
 			$this->setFile();
 		}
 		public function setPath($path = null) {
 			$this->path = (isset($path)) ? rtrim($path, '/') : dirname(__FILE__).'/languages';
 			$this->setFile();
 		}
 		public function setException($exception = null) {
 			$this->exception = (isset($exception)) ? $exception : false;
 			$this->setFile();
 		}
 		public function translate($text=null, $variable=null) {
 			if (isset($variable)) {
 				return strtr(((isset($this->text[$text])) ? $this->text[$text] : $text), $variable);
 			}
 			else {
 				return ((isset($this->text[$text])) ? $this->text[$text] : $text);
 			}
 		}
		
 	}
?>
