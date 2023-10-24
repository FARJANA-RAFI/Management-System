@extends('layouts.master')
@section('content')
<div class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2  mt-5">
                <h1 class="mt-4 mb-5">Edit Semester</h1>

                <form action="{{ URL::to('update_semester/'.$semester->id) }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input type="text" value="{{ $semester->semester }}" class="form-control" name="semester">
                    </div>

                    <div class="form-group mt-4 ">
                        <button type="submit" class="btn btn-primary" name="submit">Update Semester</button>
                        <a href="{{ URL::to('semester') }}" class="btn btn-info">Cancel</a>
                    </div>

                </form>

            </div><!-- col-md-10 -->
        </div><!-- row -->
    </div><!-- Container -->
</div>

@stop