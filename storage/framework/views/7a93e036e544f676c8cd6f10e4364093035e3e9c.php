
<?php $__env->startSection('content'); ?>
<div class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 mt-5">
                <h2 class="mt-4 mb-4 text-dark">Create New Course</h2>

                <form action="<?php echo e(URL::to('insert_course')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label class="ml-1">Course Name</label>
                        <input type="text" class="form-control text-left" name="course_name">
                    </div>

                    <div class="form-group">
                        <label class="ml-1">Course Code</label>
                        <input type="text" class="form-control text-left" name="course_code">
                    </div>

                    <div class="form-group">
                        <a class="btn btn-success" href="<?php echo e(URL::to('course')); ?>">Cancel</a>
                        <button type="submit" class="btn btn-primary" name="submit">Add Course</button>
                    </div>
                </form>

            </div><!-- col-md-10 -->
        </div><!-- row -->
    </div><!-- Container -->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\sd_project\sd_final_rjns\resources\views/admin/add_course.blade.php ENDPATH**/ ?>