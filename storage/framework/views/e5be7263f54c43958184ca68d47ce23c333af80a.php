<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>hello</title>
</head>
<body>
	<ul>
		<?php foreach($data as $v): ?>
		<li><?php echo e($v); ?></li>
		<?php endforeach; ?>

	</ul>
</body>
</html>