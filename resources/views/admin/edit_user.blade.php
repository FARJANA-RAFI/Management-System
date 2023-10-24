@extends('layouts.master')
@section('content')
<div class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1 mt-5">
                <h1 class="mt-3 mb-4">Edit User Data</h1>

                <form action="{{ URL::to('update_user/'.$user->id) }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="text-left" value="{{ $user->name }}" class="form-control rounded-0"
                            name="name">
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="text-left" value="{{ $user->email }}" class="form-control rounded-0"
                            name="email">
                    </div>

                    <div class="form-group radio-btn">
                        <label class="mr-3">Gender: </label>
                        <input type="radio" name="gender" <?php if ($user->gender == 'male'){ echo "checked"; } ?>
                            value="male" required id="male">
                        <label for="male">Male</label>
                        <input type="radio" class="ml-3" name="gender" <?php if ($user->gender == 'female')
                                    { echo "checked"; }?> value="female" id="female">
                        <label for="female">Female</label>
                    </div>

                    <div class="form-group">
                        <label>Date of Birth</label>
                        <input type="date" value="{{ $user->date_of_birth }}" class="form-control rounded-0"
                            name="date_of_birth">
                    </div>

                    <div class="form-group mt-4 ">
                        <button type="submit" class="btn btn-primary" name="submit">Update User</button>
                        <a href="{{ URL::to('manage_users') }}" class="btn btn-info">cancel</a>
                    </div>
                </form>
            </div><!-- col-md-10 -->
        </div><!-- row -->
    </div><!-- Container -->
</div>
@stop