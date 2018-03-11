<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="simple.css">
		<title><?=$title?></title>
	</head>
	<body>
		<div class="topnav">
			<?=navmenu?>
		</div>	
		<main>
			<?php if (isset($error)): ?>
			<p> <?=$error?> </p>
			<?php else: ?>
				<?=$output?>
			<?php endif; ?>
		</main>
		<footer>
			&copy; 5402Technologies
		</footer>
	</body>
</html>