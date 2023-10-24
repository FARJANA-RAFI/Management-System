
<?php $__env->startSection('content'); ?>
<div class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1 mt-5">
                <h1 class="mt-4 mb-5">Edit Course</h1>

                <form action="<?php echo e(URL::to('update_course/'.$course->id)); ?>" method="post">
                    <?php echo e(csrf_field()); ?>

                    <div class="form-group">
                        <input type="text" value="<?php echo e($course->course_name); ?>" class="form-control" name="course_name">
                    </div>

                    <div class="form-group">
                        <input type="text" value="<?php echo e($course->course_code); ?>" class="form-control" name="course_code">
                    </div>

                    <div class="form-group mt-4 ">
                        <button type="submit" class="btn btn-primary" name="submit">Update Course</button>
                        <a href="<?php echo e(URL::to('course')); ?>" class="btn btn-info">cancel</a>
                    </div>

                </form>

            </div><!-- col-md-10 -->
        </div><!-- row -->
    </div><!-- Container -->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\sd_project\sd_final_rjns\resources\views/admin/edit_course.blade.php ENDPATH**/ ?>