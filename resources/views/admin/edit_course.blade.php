@extends('layouts.master')
@section('content')
<div class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1 mt-5">
                <h1 class="mt-4 mb-5">Edit Course</h1>

                <form action="{{ URL::to('update_course/'.$course->id) }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input type="text" value="{{ $course->course_name }}" class="form-control" name="course_name">
                    </div>

                    <div class="form-group">
                        <input type="text" value="{{ $course->course_code }}" class="form-control" name="course_code">
                    </div>

                    <div class="form-group mt-4 ">
                        <button type="submit" class="btn btn-primary" name="submit">Update Course</button>
                        <a href="{{ URL::to('course') }}" class="btn btn-info">cancel</a>
                    </div>

                </form>

            </div><!-- col-md-10 -->
        </div><!-- row -->
    </div><!-- Container -->
</div>
@stop