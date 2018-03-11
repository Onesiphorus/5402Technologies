<?php
if (!isset($_POST['username'])) {
	include __DIR__ . '/../templates/form.html.php';
} else {
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	try {
		$pdo = new PDO('mysql:host=localhost;dbname=website;charset=utf8', 'websiteuser', 'dev:1234');
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$sql = "SELECT username FROM website.users WHERE username = '" . $username . "' and password = '" . $password . "'";
		
		$result = $pdo->query($sql);
		$username = $result->fetch()['username'];
	} catch (PDOException $e) {
		$title = 'An error has occurred';
		$error = 'Unable to connect to the database server: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine();
	}
	$output = 'Welcome, ' . $username . '!';
	include __DIR__ . '/../templates/welcome.html.php';
}


?>