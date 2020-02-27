<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
  <base href="<?php echo e(URL::to('/')); ?>" />
  <title>Laravel Pagination</title>
  <meta charset="utf-8" />
  <meta name="description" content="" />
  <meta name="keywords" content="" />
	<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
  <!-- Chrome, Firefox OS and Opera -->
  <meta name="theme-color" content="">
  <!-- Windows Phone -->
  <meta name="msapplication-navbutton-color" content="">
  <!-- iOS Safari -->
  <meta name="apple-mobile-web-app-status-bar-style" content="">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> <!-- responsive use only -->
  <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="/images/favicon.ico" type="image/x-icon">
  <link href="css/style.css" rel="stylesheet" type="text/css" />
  <link href="css/responsive.css" rel="stylesheet" type="text/css" />
  <?php echo $__env->yieldPushContent('styles'); ?>
</head>
<body>
  <main>
    <?php echo $__env->yieldContent('content'); ?>
  </main>
  
  <script src="js/common.js" type="text/javascript"></script>

  <?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html><?php /**PATH C:\xampp\project-pagination\resources\views/parts/template.blade.php ENDPATH**/ ?>