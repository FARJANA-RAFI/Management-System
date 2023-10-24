<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SEISDL Project 1</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <style>
    body {
        background-color: #263238;
        color: #fff;
    }
    </style>
</head>

<body>
    <div class="page-content">
        <div class="container text-white mt-4 mb-5">
            <div class="row">
                <div class="col-md-10 offset-md-1 font-weight-bold">
                    <h1 class="mt-2 mb-4">Teacher Registration</h1>

                    <form action="<?php echo e(URL::to('add_teacher')); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>

                        <!-- registration succeded message -->
                        <div class="result">
                            <?php if(Session::get('success')): ?>
                            <div class="alert alert-success">
                                <?php echo e(Session::get('success')); ?>

                            </div>
                            <?php endif; ?>
                        </div><!-- registration succeded message end-->

                        <!-- registration failed message -->
                        <div class="result">
                            <?php if(Session::get('fail')): ?>
                            <div class="alert alert-success">
                                <?php echo e(Session::get('fail')); ?>

                            </div>
                            <?php endif; ?>
                        </div><!-- registration failed message end-->

                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control rounded-0" name="name" value="<?php echo e(old('name')); ?>">
                            <span class="text-danger"><?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> </span>
                        </div>

                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" class="form-control rounded-0" name="email" value="<?php echo e(old('email')); ?>">
                            <span class="text-danger"><?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> </span>
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control rounded-0" name="password">
                            <span class="text-danger"><?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> </span>
                        </div>

                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control rounded-0" name="confirm_password">
                            <span class="text-danger"><?php $__errorArgs = ['confirm_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> </span>
                        </div>

                        <div class="form-group radio-btn">
                            <label class="mr-3">Gender: </label>
                            <input type="radio" name="gender" value="male"
                                <?php echo e((old('gender') == 'male') ? 'checked' : ''); ?>> Male
                            <input type="radio" class="ml-3" name="gender" value="female"
                                <?php echo e((old('gender') == 'female') ? 'checked' : ''); ?>> Female
                            <span class="text-danger"><?php $__errorArgs = ['gender'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> </span>
                        </div>

                        <div class="form-group">
                            <label>Date of Birth</label>
                            <input type="date" class="form-control rounded-0" name="date_of_birth"
                                value="<?php echo e(old('date_of_birth')); ?>">
                            <span class="text-danger"><?php $__errorArgs = ['date_of_birth'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> </span>
                        </div>

                        <!-- <div class="form-group radio-btn">
            <label class="mr-3">User Type: </label>
            <input type="radio" name="user_type" value="admin" id="admin" required> 
            <label for="admin">Admin</label>
            <input type="radio" class="ml-3" name="user_type" value="teacher" id="teacher">
            <label for="teacher">Teacher</label>
          </div> -->

                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                        </div>

                        <a href="login">I already have an account!</a>
                    </form>
                </div><!-- col-md-10 -->
            </div><!-- row -->
        </div><!-- Container -->
    </div><?php /**PATH C:\xampp\htdocs\SD_final_project\sd_final_rjns\resources\views/pages/auth/registration.blade.php ENDPATH**/ ?>