<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>SHOPPE - THIEN DUONG MUA SAM</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link href="<?php echo e(asset('css/bootstrap.min.css')); ?>"rel="stylesheet">
		<link href="<?php echo e(asset('css/bootstrap-responsive.min.css')); ?>" rel="stylesheet">

		<link href="<?php echo e(asset('css/bootstrappage.css')); ?>" rel="stylesheet"/>

		<!-- global styles -->
		<link href="<?php echo e(asset('css/flexslider.css')); ?>" rel="stylesheet"/>
		<link href="<?php echo e(asset('css/main.css')); ?>" rel="stylesheet"/>

		<!-- scripts -->
		<script src="<?php echo e(asset('js/jquery-1.7.2.min.js')); ?>"></script>
		<script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
		<script src="<?php echo e(asset('js/superfish.js')); ?>"></script>
		<script src="<?php echo e(asset('js/jquery.scrolltotop.js')); ?>"></script>
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
  </head>
  <body>
    <?php echo $__env->make('layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div id="wrapper" class="container">
    <?php echo $__env->make('layouts.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->yieldContent('content'); ?>
    <?php echo $__env->make('layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
        <script src="<?php echo e(asset('js/common.js')); ?>"></script>
    		<script src="<?php echo e(asset('js/jquery.flexslider-min.js')); ?>"></script>
    		<script type="text/javascript">
    			$(function() {
    				$(document).ready(function() {
    					$('.flexslider').flexslider({
    						animation: "fade",
    						slideshowSpeed: 4000,
    						animationSpeed: 600,
    						controlNav: false,
    						directionNav: true,
    						controlsContainer: ".flex-container" // the container that holds the flexslider
    					});
    				});
    			});
    		</script>
  </body>
</html>
