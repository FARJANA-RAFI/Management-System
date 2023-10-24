@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2 mt-5">
            <h1 class="mt-4 mb-5">Edit Session</h1>

            <form action="{{ URL::to('update_session/'.$course_session->id) }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="text" value="{{ $course_session->session }}" class="form-control" name="session">
                </div>

                <div class="form-group mt-4 ">
                    <button type="submit" class="btn btn-primary" name="submit">Update Session</button>
                    <a href="{{ URL::to('session') }}" class="btn btn-info">All Sessions</a>
                </div>

            </form>

        </div><!-- col-md-10 -->
    </div><!-- row -->
</div><!-- Container -->
@stop