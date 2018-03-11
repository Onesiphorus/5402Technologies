<?php

try {
	$pdo = new PDO('mysql:host=localhost;dbname=website;charset=utf8', 'websiteuser', 'dev:1234');
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
	$sql = "select name, link from nav_menu";		
	$result = $pdo->query($sql);
	
	while ($row == $result->fetch()) {
		$links[] = array($row['name'], $row['link']);
	}	
	
	ob_start();
	
	include __DIR__ . '/../templates/nav.html.php';
	
	$output = ob_get_clean();
} catch (PDOException $e) {
	$title = 'An error has occurred';
	$error = 'Database error: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine();
}

include __DIR__ . '/../templates/layout.html;