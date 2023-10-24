
<?php $__env->startSection('content'); ?>
<div class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <h2 class="mt-4 mb-4 text-dark">Create New Group</h2>

                <form action="<?php echo e(URL::to('add_assignment')); ?>" method="post" id="form-data">
                    <div class="form-group">
                        <label>Group Name</label>
                        <input type="text" class="form-control mb-3 rounded-0 text-left" name="group_name">
                    </div>
                    <!-- table -->
                    <table class="table table-bordered" id="table-item">
                        <tr>
                            <th><button id="add-question" type="button" class="btn btn-success"><i
                                        class="fa fa-plus"></i></button><span class="pl-3">Add More Question</span
                                    class="pl-3"></th>
                            <td width="72%"><input type="text" class="form-control text-left" name="question[]"
                                    id="question" placeholder="Add Question"></td>
                        </tr>
                    </table>
                    <!-- /table -->

                    <div class="form-group">
                        <!-- <input type="submit" class="btn btn-primary pl-4 pr-4 mt-2" value="Save" name="submit"> -->
                        <button type="submit" class="btn btn-primary" name="submit">Save</button>
                    </div>
                </form>

            </div><!-- col-md-10 -->
        </div><!-- row -->
    </div><!-- Container -->
</div>

<script>
// To add dynamic table
$(document).ready(function() {
    var i = 1;
    $('#add-question').click(function() {
        i++;
        $('#table-item').append('<tr id="row' + i +
            '"><th><button type="button" name="remove-question" id="' + i +
            '" class="btn btn-danger remove-question"><i class="fa fa-window-close"></i></button><span class="pl-3">Delete</span></th><td><input width="72%" type="text" name="question[]" class="form-control" placeholder="Add Question"></td></tr>'
        );
    });

    $(document).on('click', '.remove-question', function() {
        var button_id = $(this).attr('id');
        $('#row' + button_id + '').remove();
    });

});
</script>
<?php $__env->stopSection(); ?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>




<?php 
	// if (isset($_POST['submit'])) {
	// 	for($i=0; $i<count($_POST['question']); $i++){
	// 	$question = $_POST['question'][$i];
	// 	$group_name = $_POST['group_name'];

 	// 	if ($_POST['group_name'] && $_POST['question'][$i] != '') {
 	// 		$query = "INSERT INTO groups(group_name,question) VALUES ('$group_name','$question')";
 	// 		$result = mysqli_query($conn, $query);
 	// 	}
 	//   }
	// }
 ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\sd_project\sd_final_rjns\resources\views/teacher/assignment.blade.php ENDPATH**/ ?>