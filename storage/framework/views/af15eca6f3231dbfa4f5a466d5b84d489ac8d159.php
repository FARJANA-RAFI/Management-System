
<?php $__env->startSection('content'); ?>
<div class="page-content" style="background-color: #009999;height:100vh">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1 mt-5 text-white">
                <h2 class="mb-3 text-white ml-n1">Assign Course</h2>
                <!-- Add Teacher to a specific course -->
                <form action="<?php echo e(URL::to('assign_course')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <!-- Session Start -->
                    <div class="form-group">
                        <label>Session</label>
                        <select class="form-control" name="session_id" required="required">
                            <option disabled selected value="">Select Session</option>
                            <?php $__currentLoopData = $course_session; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($s->id); ?>"><?php echo e($s->session); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <!-- Session End -->

                    <!-- Course Start -->
                    <div class="form-group">
                        <label>Course</label>
                        <select class="form-control" name="course_id" required="required">
                            <option disabled selected value="">Select Course</option>
                            <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($c->id); ?>"><?php echo e($c->course_name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <!-- Course End -->

                    <!-- Course teacher part Start -->
                    <div class="form-group">
                        <label>Course Teacher</label>
                        <select class="form-control" name="teacher_id" required="required">
                            <option disabled selected value="">Assign Teacher</option>
                            <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($u->id); ?>"><?php echo e($u->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <!-- Course teacher part End -->

                    <div class="form-group">
                        <button type="submit" class="btn btn-warning" name="submit">Assign Teacher</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SD_final_project\sd_final_rjns\resources\views/admin/manage_course.blade.php ENDPATH**/ ?>