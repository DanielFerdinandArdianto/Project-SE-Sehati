<?php $__env->startSection('container'); ?>
    <div class="inner-container">
        <div class="text">Medicine Added Successfully!</div>
        <img src="<?php echo e(asset('assets/Icon/Check.jpg')); ?>" alt="check" class="img">
    </div>
    <div class="tutup-container">
        <a href="/admin" class="tutup">BACK</a> 
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.succeed', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\christian.wiranata\Desktop\Porject SE\resources\views/admin/add-obat-success.blade.php ENDPATH**/ ?>