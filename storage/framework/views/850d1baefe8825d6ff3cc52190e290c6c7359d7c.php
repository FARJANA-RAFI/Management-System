
<?php $__env->startSection('content'); ?>
<div class="page-content" style="background-color: #263238;">
    <div class="container text-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-10 offset-md-1 font-weight-bold">
                <h1 class="mt-3 mb-4">Edit User Data</h1>


                <form action="<?php echo e(URL::to('update_user/'.$user->id)); ?>" method="post">
                    <?php echo e(csrf_field()); ?>

                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" value="<?php echo e($user->name); ?>" class="form-control rounded-0" name="name">
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" value="<?php echo e($user->email); ?>" class="form-control rounded-0" name="email">
                    </div>



                    <div class="form-group">
                        <label>Date of Birth</label>
                        <input type="date" value="<?php echo e($user->date_of_birth); ?>" class="form-control rounded-0"
                            name="date_of_birth">
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                    </div>
                </form>
            </div><!-- col-md-10 -->
        </div><!-- row -->
    </div><!-- Container -->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\sd_project\sd_final_rjns\resources\views/admin/edit_users.blade.php ENDPATH**/ ?>