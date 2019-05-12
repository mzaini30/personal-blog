<!DOCTYPE html>
<html>
<head>
	<title>Zen</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo e(base_url()); ?>aset/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo e(base_url()); ?>aset/app/style.css">
	<script type="text/javascript">
		console.log('muhammadzaini.com')
	</script>
</head>
<body>
	<div class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<a href="<?php echo e(base_url()); ?>" class="navbar-brand">Zen</a>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-8 theia">
				<?php echo $__env->yieldContent('isi'); ?>
			</div>
			<div class="col-sm-4 theia">
				<div class="panel panel-default">
					<div class="panel-heading">Postingan</div>
					<div class="list-group">
						<a href="<?php echo e(base_url()); ?>index.php/blog/baru" class="list-group-item">Postingan Baru</a>
					</div>
				</div>
				<?php echo $__env->yieldContent('sidebar'); ?>
				<div class="panel panel-warning">
					<div class="panel-heading">Admin</div>
					<div class="list-group">
						<a href="<?php echo e(base_url()); ?>index.php/blog/ganti_password" class="list-group-item">Ganti Password</a>
						<a href="<?php echo e(base_url()); ?>index.php/login/keluar" class="list-group-item">Keluar</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="<?php echo e(base_url()); ?>aset/vendor/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo e(base_url()); ?>aset/vendor/fixed/ResizeSensor.min.js"></script>
	<script type="text/javascript" src="<?php echo e(base_url()); ?>aset/vendor/fixed/theia-sticky-sidebar.min.js"></script>
	<?php echo $__env->yieldContent('skrip'); ?>
	<script type="text/javascript" src="<?php echo e(base_url()); ?>aset/app/app.js"></script>
</body>
</html><?php /**PATH /home/zen/www/blog/application/views/layout/default.blade.php ENDPATH**/ ?>