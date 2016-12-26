<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="icon" href="images/favicon.ico" type="image/x-icon">

        <!-- Viewport mobile tag for sensible mobile support -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <title><?php echo $__env->yieldContent('title'); ?></title>

        <!-- Fonts - try and get lemon_milk -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!--STYLES-->
        <link rel="stylesheet" href="<?php echo e(URL::to('css/animate.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(URL::to('css/bootstrap.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(URL::to('css/colors.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(URL::to('css/components.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(URL::to('css/core.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(URL::to('css/mbr-additional.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(URL::to('css/mobirise-style.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(URL::to('css/moborise-slider-style.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(URL::to('css/style.css')); ?>">
        <!--STYLES END-->
    </head>
    <body>
        
        <?php echo $__env->yieldContent('header'); ?>
        <?php echo $__env->yieldContent('content'); ?>
        
        <!--SCRIPTS-->
        <script src="<?php echo e(URL::to('js/jquery.js')); ?>"></script>
        <script src="<?php echo e(URL::to('js/bootstrap.min.js')); ?>"></script>
        <script src="<?php echo e(URL::to('js/SmoothScroll.js')); ?>"></script>
        <script src="<?php echo e(URL::to('js/bootstrap-carousel-swipe.js')); ?>"></script>
        <script src="<?php echo e(URL::to('js/jarallax.js')); ?>"></script>
        <script src="<?php echo e(URL::to('js/mobirise-script.js')); ?>"></script>
        <!--SCRIPTS END-->
    </body>
</html>
