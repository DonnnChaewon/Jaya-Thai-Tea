<div class="row pt-2 pb-2">
  <div class="col-12 d-flex justify-content-center">
    <h1 class="header-text">Menu</h1>
  </div>
</div>
<div class="row pt-2 pb-2 d-flex justify-content-center">
    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="col-lg-3 col-6 mb-4">
        <?php echo $__env->make('partials.card',[
            'product' => $product
          ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div><?php /**PATH C:\xampp\htdocs\jaya\resources\views/partials/menu-template.blade.php ENDPATH**/ ?>