<?php $__env->startSection('isi'); ?>
	<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<a href="<?php echo e(base_url()); ?>index.php/blog/detail/<?php echo e($data->id); ?>" class="list-postingan">
			<div class="panel <?php if($data->dipublish_di_media == 'on'): ?> panel-success <?php else: ?> panel-default <?php endif; ?>">
				<div class="panel-heading"><?php echo e($data->judul); ?></div>
				<div class="panel-body">
					<div class="truncate">
						<?php echo e($data->isi); ?>

					</div>
				</div>
			</div>
		</a>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	<?php echo $halaman; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/zen/www/blog/application/views/blog/halaman_awal.blade.php ENDPATH**/ ?>