<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('backend/css/style.css')); ?>">
    <style>
    body {
        background: linear-gradient(rgba(0, 0, 0, .7), rgba(0, 0, 0, .7)),
        url('<?php echo e(asset('backend/images/1.jpg')); ?>') center no-repeat;
        background-size: cover;
    }
    </style>

</head>

<body>

    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->

            <!-- Icon -->
            <div class="fadeIn first my-4 text-dark">
                <h1>LOGIN</h1>
            </div>

            <!-- Login Form -->
            <form action="<?php echo e(URL::to('user_login')); ?>" method="POST">
                <?php echo csrf_field(); ?>

                <!-- login failed message -->
                <div class="result">
                    <?php if(Session::get('fail')): ?>
                    <div class="alert alert-danger">
                        <?php echo e(Session::get('fail')); ?>

                    </div>
                    <?php endif; ?>
                </div><!-- login failed message end-->

                <input type="email" class="fadeIn second text-left" name="email" value="<?php echo e(old('email')); ?>"
                    placeholder="Email Address">
                <br>
                <!-- validating message email -->
                <span class="text-danger">
                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </span><!-- validating message email end -->

                <input type="password" class="fadeIn third mb-3 text-left" name="password" placeholder="Password">
                <!-- validating message password -->
                <br>
                <span class="text-danger">
                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </span><!-- validating message password end -->

                <input type="submit" name="submit" class="fadeIn fourth" value="Log In">
            </form>

            <!-- Remind Passowrd -->
            <div id="formFooter" class="text-right">
                <a class="btn btn-info text-right" href="<?php echo e(URL::to('register')); ?>">SIGN UP</a>
            </div>

        </div>
    </div>

</body>

</html><?php /**PATH C:\xampp\htdocs\SD_final_project\sd_final_rjns\resources\views/pages/auth/login.blade.php ENDPATH**/ ?>