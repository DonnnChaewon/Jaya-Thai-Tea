

<?php $__env->startSection('container'); ?>
<!-- Banner 1 Part -->
<div class="row pt-2 pb-2">
  <div class="col-12 d-flex justify-content-center">
    <div class="banner-img position-relative">
      <img src="<?php echo e(asset('images/thai_tea_banner1.png')); ?>" />
      <a href="tel:+6285779083324" class="home-button btn btn-warning">Order Sekarang Juga!</a>
    </div>
  </div>
</div>
<!-- Menu Part -->
<?php echo $__env->make('partials.menu-template',[
    'products' => $products
  ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- Banner 2 Part -->
<div class="row pt-2 pb-2 banner-2">
  <div class="col-12 d-flex justify-content-center">
    <img class="banner-img" src="<?php echo e(asset('images/thai_tea_banner2.png')); ?>">
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\jaya\resources\views/home.blade.php ENDPATH**/ ?>