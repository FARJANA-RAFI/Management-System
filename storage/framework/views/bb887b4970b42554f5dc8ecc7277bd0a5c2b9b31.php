
<?php $__env->startSection('content'); ?>

<div class="page-content" style="background-color: #264348;height:100vh">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="text-center">
                    <h2 class="mt-5 text-center mb-4 font-weight-bold">Create New Department</h2>
                </div>
                <form action="<?php echo e(URL::to('insert_department')); ?>" method="post">
                    <?php echo e(csrf_field()); ?>

                    <div class="form-group">
                        <label class="text-light ml-1">Department Name</label>
                        <input type="text" class="form-control text-left" name="department">
                    </div>

                    <div class="form-group">
                        <label class="text-light ml-1">Department Short Name</label>
                        <input type="text" class="form-control text-left" name="short_name">
                    </div>

                    <div class="form-group">
                        <label class="text-light ml-1">Department Code</label>
                        <input type="text" class="form-control text-left" name="code">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary ml-1" name="submit">Add Department</button>
                    </div>
                </form>

            </div><!-- col-md-10 -->
        </div><!-- row -->
    </div><!-- Container -->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SD_final_project\sd_final_rjns\resources\views/admin/add_department.blade.php ENDPATH**/ ?>