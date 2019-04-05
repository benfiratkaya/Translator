<?php
	use Translator\Translator;
	
	// Composer
	require '../vendor/autoload.php';
	
	// Include
	//include_once 'translator/Register.php';
	//include_once 'translator/Generator.php';
	//include_once 'translator/Translator.php';
		
	// Exception, Type, Language, Path
	$translator = new Translator(false, 'json', 'es_ES', 'languages/json');
		
	// Register Functions: translate(), translator(), t__(), e__()
	$translator->register();
		
	// path/lang.type -> /languages/en_US.json
	$translator->setType('json'); // php, json, ini
	$translator->setLang('es_ES'); // Language Code.
	$translator->setPath('languages/json'); // Language Files Directory
		
	// Update Changes
	$translator->update();
	
	echo translate('Hola!'); // Output: Hola!
	//echo translator('Hola!'); // Output: Hola!
	//echo t__('Hola!'); // Output: Hola!
	//e__('Hola!'); // Output: Hola!
	
	$user = 'Firat Kaya';
	echo translate('Hello %user%', array('%user%' => $user)); // Output: Hola Firat Kaya
	//echo translator('Hello %user%', array('%user%' => $user)); // Output: Hola Firat Kaya
	//t__('Hello %user%', array('%user%' => $user)); // Output: Hola Firat Kaya
	//e__('Hello %user%', array('%user%' => $user)); // Output: Hola Firat Kaya
