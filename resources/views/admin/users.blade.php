@extends('layouts.admin_master')
@section('title')
    <?php echo "All Users - TTS" ?>
@stop

@section('content')

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h1>All Users</h1>

            <h3>Super Users</h3>
            <table class="table table-bordered">
                <thead class="text-center">
                    <th>Name</th>
                    <th>email</th>
                    <th>Phone</th>
                    <th colspan="3" class="text-center">Action</th>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr class="text-center">
                            <td>{{ $user->first_name }} {{ ' '.$user->last_name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->phone }}</td>
                            <td><a href="#" class="btn btn-xs btn-info">more info</a></td>
                            <td><a href="#" class="btn btn-xs btn-success">edit</a></td>
                            <td><a href="#" class="btn btn-xs btn-danger">delete</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="#" class="btn btn-md btn-info pull-right">Add new user</a>

        </div>
    </div>

@stop
