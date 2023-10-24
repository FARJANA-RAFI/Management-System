@extends('layouts.master')
@section('content')
<div class="page-content" style="background-color: #009999;height:100vh">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1 mt-5 text-white">
                <h2 class="mb-3 text-white ml-n1">Assign Course</h2>
                <!-- Add Teacher to a specific course -->
                <form action="{{ URL::to('assign_course') }}" method="post">
                    @csrf
                    <!-- Session Start -->
                    <div class="form-group">
                        <label>Session</label>
                        <select class="form-control" name="session_id" required="required">
                            <option disabled selected value="">Select Session</option>
                            @foreach($course_session as $s)
                            <option value="{{ $s->id }}">{{ $s->session }}</option>
                            @endforeach
                        </select>
                    </div>
                    <!-- Session End -->

                    <!-- Course Start -->
                    <div class="form-group">
                        <label>Course</label>
                        <select class="form-control" name="course_id" required="required">
                            <option disabled selected value="">Select Course</option>
                            @foreach($courses as $c)
                            <option value="{{ $c->id }}">{{ $c->course_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <!-- Course End -->

                    <!-- Course teacher part Start -->
                    <div class="form-group">
                        <label>Course Teacher</label>
                        <select class="form-control" name="teacher_id" required="required">
                            <option disabled selected value="">Assign Teacher</option>
                            @foreach($user as $u)
                            <option value="{{ $u->id }}">{{ $u->name }}</option>
                            @endforeach
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
@stop