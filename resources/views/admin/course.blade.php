@extends('layouts.master')
@section('content')
<div class="page-content">
    <!-- showing data from database -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h2 class="mt-4 mb-4 text-dark">Add New Course</h2>
                    <a class="btn btn-info" href="{{ URL::to('add_course') }}">Add Course</a>
                </div>


                <h1 class="mt-4 mb-5 text-dark">List of all Courses</h1>

                <table class="table table-dark text-center">
                    <thead>
                        <tr class="bg-danger">
                            <th>Course Name</th>
                            <th>Course Code</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($courses as $c)
                        <tr>
                            <td>{{ $c->course_name}}</td>
                            <td>{{ $c->course_code}}</td>
                            <td>
                                <a class="btn btn-warning" href="{{ URL::to('edit_course/'.$c->id) }}">Edit</a>
                                <a data-toggle="modal" data-target="#myModal{{$c->id}}" class="btn btn-danger"
                                    href="#">Delete</a>
                                <!-- Modal -->
                                <div id="myModal{{$c->id}}" class="modal fade" role="dialog">
                                    <div class="modal-dialog">
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title text-dark">Delete Confirmation</h4>
                                                <button type="button" class="close"
                                                    data-dismiss="modal">&times;</button>
                                            </div>

                                            <div class="modal-body text-dark">
                                                Are you sure you want to delete <b>{{$c->course_name}}</b>?
                                            </div>

                                            <div class="modal-footer">
                                                <a href="{{ URL::to('delete_course/'.$c->id) }}"
                                                    class="btn btn-danger">Yes</a>
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                            </div>
                                        </div>

                                    </div>
                                </div><!-- modal end -->
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>


            </div><!-- col-md-8 -->
        </div><!-- row -->
    </div><!-- Container -->
</div>
@endsection