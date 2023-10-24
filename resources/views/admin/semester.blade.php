@extends('layouts.master')
@section('content')

<div class="page-content" style="background-color: #5B3256; height: 100vh">
    <!-- showing data from database -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div>
                    <h2 class="mt-4 mb-4 text-light">Add New Semester</h2>
                    <a class="btn btn-info" href="{{ URL::to('add_semester') }}">Add Semester</a>
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
                        @foreach($semester as $s)
                        <tr>
                            <td>{{$s->semester}}</td>
                            <td>
                                <a class="btn btn-success" href="{{ URL::to('edit_semester/'.$s->id) }}">Edit</a>
                                <a class="btn btn-warning" data-toggle="modal"
                                    data-target="#myModal{{$s->id}}">Delete</a>
                                <!-- Modal Start -->
                                <div class="modal fade" id="myModal{{$s->id}}">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title text-dark">Are you sure to delete
                                                    <b>{{$s->semester}}</b> ?<h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                            </div>
                                            <div class="modal-footer">
                                                <a href="{{ URL::to('delete_semester/'.$s->id) }}"
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