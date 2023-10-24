@extends('layouts.master')
@section('content')
<div class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="text-center">
                    <h2 class="mt-5 text-center mb-4 text-dark font-weight-bold">Add New Session</h2>
                </div>
                <form action="{{ URL::to('create_session') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Session</label>
                        <input type="text" class="form-control" name="session">
                    </div>

                    <div class="form-group">
                        <a class="btn btn-success" href="{{ URL::to('session') }}">Cancel</a>
                        <button type="submit" class="btn btn-primary" name="submit">Add Session</button>
                    </div>
                </form>

            </div><!-- col-md-10 -->
        </div><!-- row -->
    </div><!-- Container -->
</div>
@stop