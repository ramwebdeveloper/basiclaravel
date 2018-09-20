<?php ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<link rel="stylesheet" href="\css\app.css" />
<title>JEEMA</title>

</head>
<body>

	<?php echo $__env->make('inc.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<div class="container">
		<div class="row">
			<div class="col-md-8 col-lg-8">
				<?php echo $__env->make('inc.messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
				<?php echo $__env->yieldContent('content'); ?>
			</div>
			<div class="col-md-4 col-lg-4">
				<?php echo $__env->make('inc.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			</div>
		</div>
	</div>
</body>
</html>