
<?php $__env->startSection('content'); ?>
<div class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1 mt-5">
                <h1 class="mt-3 mb-4">Edit User Data</h1>

                <form action="<?php echo e(URL::to('update_user/'.$user->id)); ?>" method="post">
                    <?php echo e(csrf_field()); ?>

                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="text-left" value="<?php echo e($user->name); ?>" class="form-control rounded-0"
                            name="name">
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="text-left" value="<?php echo e($user->email); ?>" class="form-control rounded-0"
                            name="email">
                    </div>

                    <div class="form-group radio-btn">
                        <label class="mr-3">Gender: </label>
                        <input type="radio" name="gender" <?php if ($user->gender == 'male'){ echo "checked"; } ?>
                            value="male" required id="male">
                        <label for="male">Male</label>
                        <input type="radio" class="ml-3" name="gender" <?php if ($user->gender == 'female')
                                    { echo "checked"; }?> value="female" id="female">
                        <label for="female">Female</label>
                    </div>

                    <div class="form-group">
                        <label>Date of Birth</label>
                        <input type="date" value="<?php echo e($user->date_of_birth); ?>" class="form-control rounded-0"
                            name="date_of_birth">
                    </div>

                    <div class="form-group mt-4 ">
                        <button type="submit" class="btn btn-primary" name="submit">Update User</button>
                        <a href="<?php echo e(URL::to('manage_users')); ?>" class="btn btn-info">cancel</a>
                    </div>
                </form>
            </div><!-- col-md-10 -->
        </div><!-- row -->
    </div><!-- Container -->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SD_final_project\sd_final_rjns\resources\views/admin/edit_user.blade.php ENDPATH**/ ?>