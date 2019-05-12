<?php $__env->startSection('isi'); ?>
	<form action="<?php echo e(base_url()); ?>index.php/blog/posting" method="post">
		<div class="form-group">
			<label for="">Judul</label>
			<input type="text" class="form-control" name="judul" required="">
		</div>
		<div class="form-group">
			<label for="">Isi</label>
			<textarea name="isi" id="" cols="30" rows="10" class="form-control" required=""></textarea>
		</div>
		<div class="form-group">
			<label>
				<input type="checkbox" name="dipublish_di_media">
				Tulisan ini sudah dipublikasikan di media
			</label>
		</div>
		<div class="form-group">
			<input type="submit" class="btn btn-default" value="Posting">
		</div>
	</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/zen/www/blog/application/views/blog/baru.blade.php ENDPATH**/ ?>