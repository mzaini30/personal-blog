<?php $__env->startSection('isi'); ?>
	<form action="<?php echo e(base_url()); ?>index.php/blog/ganti_password_do" method="post">
		<div class="form-group">
			<label for="">Password Baru</label>
			<input type="password" class="form-control" name="password" required="">
		</div>
		<input type="submit" class="btn btn-danger" value="Ganti">
	</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/zen/www/blog/application/views/blog/ganti_password.blade.php ENDPATH**/ ?>