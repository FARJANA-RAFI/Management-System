<!DOCTYPE html>
<html lang="en">
    <head>
    <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </head>
    <body class="sb-nav-fixed">
        <!-- navbar here -->
        <?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
               <!-- sidebar here -->
               <?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div id="layoutSidenav_content">
                <main>
                   <!-- main content here -->
                   <?php echo $__env->yieldContent('content'); ?>
                </main>
                <!-- footer here -->
            </div>
        </div>
        <?php echo $__env->make('layouts.all-scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\SD_final_project\sd_final_rjns\resources\views/layouts/master.blade.php ENDPATH**/ ?>