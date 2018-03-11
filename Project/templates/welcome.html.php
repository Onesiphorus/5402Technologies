<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<?php if (isset($error)): ?>
		<p>
			<?=$error?>
		</p>
		<?php else: ?>
			<?=$output?>
		<?php endif; ?>
	</body>
</html>