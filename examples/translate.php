<?php
	use Translator\Translator;
	use Translator\Exception;
	
	// Composer
	require '../vendor/autoload.php';
	
	// Include
	//include_once 'translator/Exception.php';
	//include_once 'translator/Register.php';
	//include_once 'translator/Generator.php';
	//include_once 'translator/Translator.php';
		
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
	
	echo $translator->translate('Hello!'); // Output: Hola!
