# Translator

Translator class for based PHP (>= 5.4) systems.

[![Build Status](https://travis-ci.org/benfiratkaya/Translator.png?branch=master)](https://travis-ci.org/benfiratkaya/Translator)
[![Latest Stable Version](https://poser.pugx.org/benfiratkaya/translator/v/stable.svg)](https://packagist.org/packages/benfiratkaya/translator)
[![Total Downloads](https://poser.pugx.org/benfiratkaya/translator/downloads.png)](https://packagist.org/packages/benfiratkaya/translator)
[![License](https://poser.pugx.org/benfiratkaya/translator/license.svg)](https://packagist.org/packages/benfiratkaya/translator)

## About the Project

#### What is this?

It is a PHP class that provides multi-language system service to your website.

#### Features:

- Translate text with variable
- Supported types: PHP, SQL, JSON, INI
- Translate SQL querys
- Tiny files and best performance
- Simple usage
- Short functions

#### Supported Types

| Type | Support | Example |
| ------------- | :-------------: | :-------------: |
| PHP | :heavy_check_mark: | [Click](https://github.com/benfiratkaya/Translator/blob/master/examples/languages/php/es_ES.php) |
| SQL | :heavy_check_mark: | [Click](https://github.com/benfiratkaya/Translator/blob/master/examples/languages/sql/es_ES.php) |
| JSON | :heavy_check_mark: | [Click](https://github.com/benfiratkaya/Translator/blob/master/examples/languages/json/es_ES.json) |
| INI | :heavy_check_mark: | [Click](https://github.com/benfiratkaya/Translator/blob/master/examples/languages/ini/es_ES.ini) |

## Installation & Loading

#### Composer (recomended):

> Installation

```sh
composer require benfiratkaya/translator
```
> Loading

```PHP
use Translator\Translator;
use Translator\Exception;

include_once 'vendor/autoload.php';
```

#### Github:

If you don't use composer in your project you can include files.

```PHP
use Translator\Translator;
use Translator\Exception;
	
include_once 'translator/Exception.php';
include_once 'translator/Register.php';
include_once 'translator/Generator.php';
include_once 'translator/Translator.php';
```

## Usage

#### Language File:

Supported Types: PHP, SQL, JSON, INI

> PHP (es_ES.php)

```PHP
return array (
    "Hello!" => "Hola!",
    "Hello %user%" => "Hola %user%"
);
```

> SQL (es_ES.php)

```PHP
// Connect database
try {
	$db = new PDO("mysql:host=localhost;dbname=test", "root", "password");
} catch (PDOException $e) {
	echo $e->getMessage();
}

$words = array();
$query = $db->query('SELECT text_en, text_ts FROM Table');
while ($row = $query->fetch()) {
	$words[$row['text_en']] = $row['text_es'];
}
return $words;
```

> JSON (es_ES.json)

```JSON
{
    "Hello!": "Hola!",
    "Hello %user%": "Hola %user%"
}
```

> INI (es_ES.ini)

```INI
Hello! = Hola!
Hello %user% = Hola %user%
```

#### Exception:

```PHP
// Exception
try {
		
    // Exception Status, Type, Language, Path
	$translator = new Translator(true, 'json', 'es_ES', 'translator/languages');
		
	// Register Functions: translate(), translator(), t__(), e__()
	$translator->register();
		
	$translator->setException(true); // true or false
		
	// path/lang.type -> /languages/en_US.json
	$translator->setType('json'); // php, json, ini
	$translator->setLang('es_ES'); // Language Code.
	$translator->setPath('translator/languages'); // Language Files Directory
		
	// Update Changes
	$translator->update();
		
} catch (Exception $e) {
	echo 'Error: '.$e->errorMessage();
}
```

#### Translate:

> Text

```PHP
echo translator('Hello!'); // Output: Hola!
```

> Text With Variable

```PHP
$var = 'Firat Kaya';
echo translator('Hello %user%', array('%user%', $var)); // Output: Hola Firat Kaya
```

> Other Functions

```PHP
echo translator('Hello!'); // Output: Hola!
echo translate('Hello!'); // Output: Hola!
echo t__('Hello!'); // Output: Hola!

// Does not require the use of 'echo' with this function.
e__('Hello!'); // Output: Hola!
```

_For more information, please refer to the [Wiki](https://github.com/benfiratkaya/Translator/wiki)_

## Useful Links

Wiki: [https://github.com/benfiratkaya/Translator/wiki](https://github.com/benfiratkaya/Translator/wiki)

Changelog: [https://github.com/benfiratkaya/Translator/blob/master/CHANGELOG.md](https://github.com/benfiratkaya/Translator/blob/master/CHANGELOG.md)

## License

Distributed under the MIT License. See [`LICENSE`](https://github.com/benfiratkaya/Translator/blob/master/LICENSE) for more information.

## Contact

Firat Kaya - benfiratkaya@gmail.com

Project Link: [https://github.com/benfiratkaya/Translator](https://github.com/benfiratkaya/Translator)
