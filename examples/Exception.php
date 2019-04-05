<?php
	use Translator\Translator;
	use Translator\Exception;
	
	include_once 'translator/Exception.php';
	include_once 'translator/Register.php';
	include_once 'translator/Generator.php';
	include_once 'translator/Translator.php';
	
	// Exception
	try {
		
		// Exception, Type, Language, Path
		$translator = new Translator(true, 'json', 'es_ES', 'languages/json');
		
		// Register Functions: translate(), translator(), t__(), e__()
		$translator->register();
		
		$translator->setException(true); // true or false
		
		// path/lang.type -> /languages/en_US.json
		$translator->setType('json'); // php, json, ini
		$translator->setLang('es_ES'); // Language Code.
		$translator->setPath('languages/json'); // Language Files Directory
		
		// Update Changes
		$translator->update();
		
	} catch (Exception $e) {
		echo 'Error: '.$e->errorMessage();
	}
	
	$user = 'Firat Kaya';
	e__('Hello!');
	e__('Hello %user%', array('%user%' => $user));
	//echo t__('Hello!');
	//echo t__('Hello %user%', array('%user%' => $user));
