
<?php $__env->startSection('content'); ?>

<div class="page-content" style="background-color: #5B3256; height: 100vh">
    <!-- showing data from database -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div>
                    <h2 class="mt-4 mb-4 text-light">Add New Semester</h2>
                    <a class="btn btn-info" href="<?php echo e(URL::to('add_semester')); ?>">Add Semester</a>
                </div>

                <h1 class="mt-4 mb-5 text-light">All Semester</h1>
                <!-- <a class="btn btn-info pl-3 pr-3 mb-3" href="student.php">Add Session</a> -->

                <table class="table table-dark text-center">
                    <thead>
                        <tr class="bg-info">
                            <th>Semester</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $semester; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($s->semester); ?></td>
                            <td>
                                <a class="btn btn-success" href="<?php echo e(URL::to('edit_semester/'.$s->id)); ?>">Edit</a>
                                <a class="btn btn-warning" data-toggle="modal"
                                    data-target="#myModal<?php echo e($s->id); ?>">Delete</a>
                                <!-- Modal Start -->
                                <div class="modal fade" id="myModal<?php echo e($s->id); ?>">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title text-dark">Are you sure to delete
                                                    <b><?php echo e($s->semester); ?></b> ?<h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                            </div>
                                            <div class="modal-footer">
                                                <a href="<?php echo e(URL::to('delete_semester/'.$s->id)); ?>"
                                                    class="btn btn-danger pl-4 pr-4">YES</a>
                                                <button type="button" class="btn btn-success pl-3 pr-3"
                                                    data-dismiss="modal">NO</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal End -->
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\sd_project\sd_final_rjns\resources\views/admin/semester.blade.php ENDPATH**/ ?>