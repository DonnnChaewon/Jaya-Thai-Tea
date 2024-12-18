<a class="card card-box" href="menu/<?php echo e($product->product_id); ?>">
  <div class="card-img-top">
    <img src="<?php echo e(asset('images/menu/'.$product->image)); ?>" alt="Card image cap">
  </div>
  <div class="card-body">
    <h5 class="card-title"><?php echo e($product->name); ?></h5>
    <p class="card-text card-desc"><?php echo e($product->description); ?></p>
  </div>
</a><?php /**PATH C:\xampp\htdocs\jaya\jaya-thai-tea\resources\views/partials/card.blade.php ENDPATH**/ ?>