<?php $__env->startSection('isi'); ?>
	<div class="panel <?php if($data->dipublish_di_media == 'on'): ?> panel-success <?php else: ?> panel-default <?php endif; ?>">
		<div class="panel-heading">
			<?php echo e($data->judul); ?>

		</div>
		<div class="panel-body bawah-mepet">
			<textarea class="markdown-input">
<?php echo e($data->isi); ?>	
			</textarea>
			<div class="markdown-output"></div>
		</div>
		<div class="panel-footer">
			<small><?php echo e($data->waktu_posting_pertama); ?><br><?php echo e($data->waktu_update); ?></small>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('skrip'); ?>
	<script type="text/javascript" src="<?php echo e(base_url()); ?>aset/vendor/marked/marked.min.js"></script>
	<script type="text/javascript">
		$('.markdown-output').html(marked($('.markdown-input').val()))
	</script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('sidebar'); ?>
	<div class="panel panel-danger">
		<div class="panel-heading">Menu Postingan</div>
		<div class="list-group">
			<a href="<?php echo e(base_url()); ?>index.php/blog/edit/<?php echo e($data->id); ?>" class="list-group-item">Edit</a>
			<a href="<?php echo e(base_url()); ?>index.php/blog/hapus/<?php echo e($data->id); ?>" class="list-group-item">Hapus</a>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/zen/www/blog/application/views/blog/detail.blade.php ENDPATH**/ ?>