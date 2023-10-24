
<?php $__env->startSection('content'); ?>

<div class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h1 class="mt-4 mb-5">List of all Users</h1>
                <table class="table table-bordered table-dark text-center">
                    <thead>
                        <tr class="bg-danger">
                            <th>Username</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>Date of birth</th>
                            <th>UserType</th>
                            <th>Actions</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $manage_users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($user->name); ?></td>
                            <td><?php echo e($user->email); ?></td>
                            <td><?php echo e($user->gender); ?></td>
                            <td><?php echo e($user->date_of_birth); ?></td>
                            <td><?php echo e($user->user_type); ?></td>
                            <td>
                                <a class="btn btn-warning" href="<?php echo e(URL::to('edit_user/'.$user->id)); ?>">Edit</a>
                                <a data-toggle="modal" data-target="#myModal<?php echo e($user->id); ?>" class="btn btn-danger"
                                    href="#">Delete</a>
                                <!-- Modal -->
                                <div id="myModal<?php echo e($user->id); ?>" class="modal fade" role="dialog">
                                    <div class="modal-dialog">
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title text-dark">Delete Confirmation</h4>
                                                <button type="button" class="close"
                                                    data-dismiss="modal">&times;</button>
                                            </div>

                                            <div class="modal-body text-dark">
                                                Are you sure you want to delete <b><?php echo e($user->name); ?></b>?
                                            </div>

                                            <div class="modal-footer">
                                                <a href="<?php echo e(URL::to('delete_user/'.$user->id)); ?>"
                                                    class="btn btn-danger">Yes</a>
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Cancel</button>
                                            </div>
                                        </div>

                                    </div>
                                </div><!-- modal end -->
                            </td>
                            <td>
                                <?php if($user->status == '1'){ ?>

                                <a href="<?php echo e(url('/changeStatus',$user->id)); ?>" class="btn btn-success">Active</a>

                                <?php }else{ ?>

                                <a href="<?php echo e(url('/changeStatus',$user->id)); ?>" class="btn btn-danger">Deactive</a>

                                <?php } ?>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>

            </div><!-- col-md-10 -->
        </div><!-- row -->
    </div><!-- Container -->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\sd_project\sd_final_rjns\resources\views/admin/manage_users.blade.php ENDPATH**/ ?>