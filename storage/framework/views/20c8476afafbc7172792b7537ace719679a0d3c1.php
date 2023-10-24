
<?php $__env->startSection('content'); ?>
<div class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2  mt-5">
                <h1 class="mt-4 mb-5">Edit Semester</h1>

                <form action="<?php echo e(URL::to('update_semester/'.$semester->id)); ?>" method="post">
                    <?php echo e(csrf_field()); ?>

                    <div class="form-group">
                        <input type="text" value="<?php echo e($semester->semester); ?>" class="form-control" name="semester">
                    </div>

                    <div class="form-group mt-4 ">
                        <button type="submit" class="btn btn-primary" name="submit">Update Semester</button>
                        <a href="<?php echo e(URL::to('semester')); ?>" class="btn btn-info">Cancel</a>
                    </div>

                </form>

            </div><!-- col-md-10 -->
        </div><!-- row -->
    </div><!-- Container -->
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\sd_project\sd_final_rjns\resources\views/admin/edit_semester.blade.php ENDPATH**/ ?>