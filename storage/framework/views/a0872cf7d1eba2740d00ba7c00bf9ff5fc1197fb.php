
<?php $__env->startSection('content'); ?>

<div class="page-content" style="background-color: #607d8b;color: #fff;">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <h1 class="mt-4 mb-5">Course Enrollment</h1>

                <form action="<?php echo e(URL::to('course_enrollment/'.$user->id)); ?> method=" post">
                    <?php echo e(csrf_field()); ?>

                    <div class="form-group">
                        <label>Student Name</label>
                        <input type="text" readonly class="form-control" value="<?php echo e($user->name); ?>" name="student_name">
                    </div>

                    <div class="form-group">
                        <label>Student Id</label>
                        <input type="text" readonly class="form-control" value="<?php echo e($user->id); ?>" name="student_id ">
                    </div>

                    <!-- Session Start -->
                    <div class="form-group">
                        <label>Session</label>
                        <select class="form-control" name="session" required="required">
                            <option disabled selected value="">Select Session</option>
                            <?php $__currentLoopData = $session; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($s->id); ?>"><?php echo e($s->session); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <!-- Session End -->

                    <!-- Department Start -->
                    <div class="form-group">
                        <label>Department</label>
                        <select class="form-control" name="department" required="required">
                            <option disabled selected value="">Select Department</option>
                            <?php $__currentLoopData = $department; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($d->id); ?>"><?php echo e($d->department); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <!-- Department End -->

                    <!-- Semester Start -->
                    <div class="form-group">
                        <label>Semester</label>
                        <select class="form-control" name="semester" required="required">
                            <option disabled selected value="">Select Semester</option>
                            <?php $__currentLoopData = $semester; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($sem->id); ?>"><?php echo e($sem->semester); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <!-- Semester End -->

                    <!-- Course Start -->
                    <div class="form-group">
                        <label>Course</label>
                        <select class="form-control" name="course" required="required">
                            <option disabled selected value="">Select Course</option>
                            <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($c->id); ?>"><?php echo e($c->course_name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <!-- Course End -->


                    <div class="form-group">
                        <input type="submit" class="btn btn-primary pl-4 pr-4" name="submit" value="Enroll">
                    </div>
                </form>

            </div><!-- col-md-10 -->
        </div><!-- row -->
    </div><!-- Container -->
</div>


<div class="margin-down"></div>
<?php $__env->stopSection(); ?>

<?php 
	if(isset($_POST['submit'])){
		// $student_name = $_POST['student_name'];
		// $student_id = $_POST['student_id'];
		// $session = $_POST['session'];
		// $department = $_POST['department'];
		// $semester = $_POST['semester'];
		// $course = $_POST['course']; 

		// $data_insert = "INSERT INTO course_enrolled(student_name, student_id, session, department, semester, course, enrolled_date) VALUES ('$student_name','$student_id','$session','$department','$semester','$course',curdate());";
		// if(mysqli_query($conn, $data_insert)){
		// 	echo "Data Inserted Successfully";
		// }

	}
 ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SD_final_project\sd_final_rjns\resources\views/student/enrollment.blade.php ENDPATH**/ ?>