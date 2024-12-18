

<?php $__env->startSection('container'); ?>
<div class="row">
    <div class="col-md-6">
        <img src="<?php echo e(asset('images/menu/'.$product->image)); ?>" alt="<?php echo e($product->name); ?>" class="img-fluid">
    </div>
    <div class="col-md-6 menu-detail">
        <h1><?php echo e($product->name); ?></h1>
        <p><?php echo e($product->description); ?></p>
        <p><strong>Price:</strong> Rp. <?php echo e(number_format($product->price, 0, ',', '.')); ?>,00</p>
        <a href="tel:+6285779083324" class="btn btn-primary">Order Sekarang Juga!</a>
    </div>
</div>
<div class="row my-4 d-flex justify-content-center flex-column flex-md-row">
    <div class="col-12 col-md-4 mb-4 mb-md-0">
        <form id="postReview">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="product_id" value="<?php echo e($product->product_id); ?>">
            <div class="form-group d-flex">
                <p class="mr-1">Rating:</p>
                <div id="starRating">
                    <i class="bi bi-star" data-value="1"></i>
                    <i class="bi bi-star" data-value="2"></i>
                    <i class="bi bi-star" data-value="3"></i>
                    <i class="bi bi-star" data-value="4"></i>
                    <i class="bi bi-star" data-value="5"></i>
                </div>
                <input type="hidden" name="rating" id="rating" required>
            </div>
            <div class="form-group d-flex">
                <p class="mr-1">Comment:</p>
                <textarea name="comment" id="comment" maxlength="255"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit Review</button>
        </form>
    </div>
    <div class="col-12 col-md-6">
        <ul class="list-unstyled">
            <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <div id="reviewStar">
                    <?php for($i = 1; $i <= 5; $i++): ?> <i class="bi bi-star<?php echo e($i <= $review->rating ? '-fill' : ''); ?>"></i>
                        <?php endfor; ?>
                </div>
                <div><?php echo e($review->comment); ?></div>
            </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
</div>


<script src="<?php echo e(asset("js/api/PostReview.js")); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\jaya\resources\views/menu-detail.blade.php ENDPATH**/ ?>