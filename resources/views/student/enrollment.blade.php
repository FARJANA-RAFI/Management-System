@extends('layouts.master')
@section('content')

<div class="page-content" style="background-color: #607d8b;color: #fff;">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <h1 class="mt-4 mb-5">Course Enrollment</h1>

                <form action="{{ URL::to('course_enrollment/'.$user->id) }} method=" post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Student Name</label>
                        <input type="text" readonly class="form-control" value="{{ $user->name }}" name="student_name">
                    </div>

                    <div class="form-group">
                        <label>Student Id</label>
                        <input type="text" readonly class="form-control" value="{{ $user->id }}" name="student_id ">
                    </div>

                    <!-- Session Start -->
                    <div class="form-group">
                        <label>Session</label>
                        <select class="form-control" name="session" required="required">
                            <option disabled selected value="">Select Session</option>
                            @foreach($session as $s)
                            <option value="{{ $s->id }}">{{ $s->session }}</option>
                            @endforeach
                        </select>
                    </div>
                    <!-- Session End -->

                    <!-- Department Start -->
                    <div class="form-group">
                        <label>Department</label>
                        <select class="form-control" name="department" required="required">
                            <option disabled selected value="">Select Department</option>
                            @foreach($department as $d)
                            <option value="{{ $d->id }}">{{ $d->department }}</option>
                            @endforeach
                        </select>
                    </div>
                    <!-- Department End -->

                    <!-- Semester Start -->
                    <div class="form-group">
                        <label>Semester</label>
                        <select class="form-control" name="semester" required="required">
                            <option disabled selected value="">Select Semester</option>
                            @foreach($semester as $sem)
                            <option value="{{ $sem->id }}">{{ $sem->semester }}</option>
                            @endforeach
                        </select>
                    </div>
                    <!-- Semester End -->

                    <!-- Course Start -->
                    <div class="form-group">
                        <label>Course</label>
                        <select class="form-control" name="course" required="required">
                            <option disabled selected value="">Select Course</option>
                            @foreach($courses as $c)
                            <option value="{{ $c->id }}">{{ $c->course_name }}</option>
                            @endforeach
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
@stop

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