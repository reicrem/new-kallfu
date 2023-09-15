<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kallfu</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="<?php echo e(asset('plugins/fontawesome-free/css/all.min.css')); ?>">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('css/theme.css')); ?>">

    <?php echo $__env->yieldContent('css'); ?>

</head>

<body class="hold-transition sidebar-mini layout-fixed sidebar-collapse">
    <div class="wrapper">

        <?php echo $__env->make('layouts.partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->yieldContent('content'); ?>

        <footer class="main-footer">
            <strong>Copyright &copy; 2023</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Kallfu</b> v 2.2.0
            </div>
        </footer>
    </div>

    <!-- jQuery -->
    <script src="<?php echo e(asset('plugins/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('plugins/jquery-ui/jquery-ui.min.js')); ?>"></script>
    <script src="<?php echo e(asset('plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>


    <script src="<?php echo e(asset('js/kallfu.js')); ?>"></script>

    <!-- AdminLTE App -->
    <script src="<?php echo e(asset('js/adminlte.js')); ?>"></script>

    <?php echo $__env->yieldContent('js'); ?>



</body>

</html>
<?php /**PATH C:\Users\Gerardo Mercier\Desktop\Kallfu-new\resources\views/layouts/app-master.blade.php ENDPATH**/ ?>