<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="<?php echo e(asset('bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" type='text/css'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo e(asset('/css/main.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('/css/navbar.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('/css/card.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('/css/home.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('/css/menu-detail.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('/css/footer.css')); ?>">
  <title>Jaya Thai Tea</title>
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
</head>
  <body>
  <?php echo $__env->make('partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <div class="container-fluid bg-e5dfc7">
    <?php echo $__env->yieldContent('container'); ?>
  </div>
  <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </body>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="<?php echo e(asset('bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
</html><?php /**PATH C:\xampp\htdocs\jaya\jaya-thai-tea\resources\views/layouts/main.blade.php ENDPATH**/ ?>