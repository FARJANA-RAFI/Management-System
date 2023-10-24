
<?php $__env->startSection('content'); ?>
<div class="page-content">
    <!-- showing data from database -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h2 class="mt-4 mb-4 text-dark">Add New Course</h2>
                    <a class="btn btn-info" href="<?php echo e(URL::to('add_course')); ?>">Add Course</a>
                </div>


                <h1 class="mt-4 mb-5 text-dark">List of all Courses</h1>

                <table class="table table-dark text-center">
                    <thead>
                        <tr class="bg-danger">
                            <th>Course Name</th>
                            <th>Course Code</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($c->course_name); ?></td>
                            <td><?php echo e($c->course_code); ?></td>
                            <td>
                                <a class="btn btn-warning" href="<?php echo e(URL::to('edit_course/'.$c->id)); ?>">Edit</a>
                                <a data-toggle="modal" data-target="#myModal<?php echo e($c->id); ?>" class="btn btn-danger"
                                    href="#">Delete</a>
                                <!-- Modal -->
                                <div id="myModal<?php echo e($c->id); ?>" class="modal fade" role="dialog">
                                    <div class="modal-dialog">
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title text-dark">Delete Confirmation</h4>
                                                <button type="button" class="close"
                                                    data-dismiss="modal">&times;</button>
                                            </div>

                                            <div class="modal-body text-dark">
                                                Are you sure you want to delete <b><?php echo e($c->course_name); ?></b>?
                                            </div>

                                            <div class="modal-footer">
                                                <a href="<?php echo e(URL::to('delete_course/'.$c->id)); ?>"
                                                    class="btn btn-danger">Yes</a>
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                            </div>
                                        </div>

                                    </div>
                                </div><!-- modal end -->
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </tbody>
                </table>


            </div><!-- col-md-8 -->
        </div><!-- row -->
    </div><!-- Container -->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\sd_project\sd_final_rjns\resources\views/admin/course.blade.php ENDPATH**/ ?>