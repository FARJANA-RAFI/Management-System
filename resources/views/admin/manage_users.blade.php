@extends('layouts.master')
@section('content')

<div class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h1 class="mt-4 mb-5">List of all Users</h1>
                <table class="table table-bordered table-dark text-center">
                    <thead>
                        <tr class="bg-danger">
                            <th>Username</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>Date of birth</th>
                            <th>UserType</th>
                            <th>Actions</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($manage_users as $user)
                        <tr>
                            <td>{{ $user->name}}</td>
                            <td>{{ $user->email}}</td>
                            <td>{{ $user->gender}}</td>
                            <td>{{ $user->date_of_birth}}</td>
                            <td>{{ $user->user_type}}</td>
                            <td>
                                <a class="btn btn-warning" href="{{ URL::to('edit_user/'.$user->id) }}">Edit</a>
                                <a data-toggle="modal" data-target="#myModal{{$user->id}}" class="btn btn-danger"
                                    href="#">Delete</a>
                                <!-- Modal -->
                                <div id="myModal{{$user->id}}" class="modal fade" role="dialog">
                                    <div class="modal-dialog">
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title text-dark">Delete Confirmation</h4>
                                                <button type="button" class="close"
                                                    data-dismiss="modal">&times;</button>
                                            </div>

                                            <div class="modal-body text-dark">
                                                Are you sure you want to delete <b>{{$user->name}}</b>?
                                            </div>

                                            <div class="modal-footer">
                                                <a href="{{ URL::to('delete_user/'.$user->id) }}"
                                                    class="btn btn-danger">Yes</a>
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Cancel</button>
                                            </div>
                                        </div>

                                    </div>
                                </div><!-- modal end -->
                            </td>
                            <td>
                                <?php if($user->status == '1'){ ?>

                                <a href="{{url('/changeStatus',$user->id)}}" class="btn btn-success">Active</a>

                                <?php }else{ ?>

                                <a href="{{url('/changeStatus',$user->id)}}" class="btn btn-danger">Deactive</a>

                                <?php } ?>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div><!-- col-md-10 -->
        </div><!-- row -->
    </div><!-- Container -->
</div>
@stop