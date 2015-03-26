@extends('layout.admin')

@section('css')

@stop

@section('main_content')
    <div class="full-container">
        <div class="row">
            <div class="sixteen columns">
                <h2 class="u-pull-left">Users</h2>
                <a href="{{ URL::to('admin/dashboard/users/create') }}" class="btn btn-success u-pull-right">Create New User</a>
            </div>
        </div>
        <div class="row">
            <div class="sixteen columns">
                <div class="table-responsive-vertical shadow-z-1">
                    <!-- Table starts here -->
                    <table id="table" class="table table-striped table-hover table-mc-light-blue">
                        <thead>
                            <tr>
                                <th>Email</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Created</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($user as $users)
                                <tr>
                                    <td data-title="Email">{{ $users->email }}</td>
                                    <td data-title="First Name">{{ $users->first_name }}</td>
                                    <td data-title="Last Name">{{ $users->last_name }}</td>
                                    <td data-title="Created">{{ $users->created_at->format('F j, Y g:i:s a') }}</td>
                                    <td data-title="Action">
                                        <a href="{{ URL::to('admin/dashboard/users/edit/' . $users->id . '') }}" class="btn btn-outline-information">Edit</a>
                                        @if(Auth::user()->id == $users->id)

                                        @else
                                            <a href="{{ URL::to('admin/dashboard/users/delete/' . $users->id . '') }}" class="btn btn-error btn-small">Delete</a>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop

@section('javascript')

@stop