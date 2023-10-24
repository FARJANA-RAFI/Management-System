@extends('layouts.master')
@section('content')
<div class="page-content" style="background-color: #576574; height: 100vh;">
    <!-- showing data from database -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h2 class="mt-4 mb-4 text-light">Add New Session</h2>
                    <a class="btn btn-info" href="{{ URL::to('add_session') }}">Add Session</a>
                </div>

                <h1 class="mt-5 mb-5 text-light">List of all Sessions</h1>
                <table class="table table-dark text-center">
                    <thead>
                        <tr class="bg-success">
                            <th>Session</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($course_session as $s)
                        <tr>
                            <td>{{ $s->session }}</td>
                            <td>
                                <a class="btn btn-success" href="{{ URL::to('edit_session/'.$s->id) }}">Edit</a>
                                <a class="btn btn-warning" data-toggle="modal"
                                    data-target="#myModal{{ $s->id }}">Delete</a>
                                <!-- Modal Start -->
                                <div class="modal fade" id="myModal{{ $s->id }}">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title text-dark">Are you sure to delete
                                                    <b>{{ $s->session }}</b> ?<h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                            </div>
                                            <div class="modal-footer">
                                                <a href="{{ URL::to('delete_session/'.$s->id) }}"
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
                        @endforeach
                    </tbody>
                </table>


            </div><!-- col-md-8 -->
        </div><!-- row -->
    </div><!-- Container -->
</div>
@stop