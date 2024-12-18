

<?php $__env->startSection('container'); ?>
  <?php echo $__env->make('partials.menu-template',[
    'products' => $products
  ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\jaya\resources\views/aboutus.blade.php ENDPATH**/ ?>