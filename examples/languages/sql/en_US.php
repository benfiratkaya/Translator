<?php
	try {
		$db = new PDO("mysql:host=localhost;dbname=test", "root", "");
	} catch (PDOException $e) {
		echo $e->getMessage();
	}

	$words = array();
	$query = $db->query('SELECT title_en FROM Translator');
	while ($row = $query->fetch()) {
		$words[$row['title_en']] = $row['title_en'];
	}
	return $words;
