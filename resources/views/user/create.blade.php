@extends('layouts.layout')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">
                            @if (isset($user->id))
                                Update User
                            @else
                                Create User
                            @endif
                        </h4>
                        <form action="{{ isset($user) ? route('admin.users.update', $user->id) : route('admin.users.store') }}"
                            method="POST">
                            @csrf
                            @if (isset($user))
                                @method('PUT')
                            @endif
                            <div class="form-group">
                                <label for="name">User Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ isset($user) ? $user->name : old('name') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ isset($user) ? $user->email : old('email') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" value="{{ isset($user) ? $user->password : old('password') }}" required>
                            </div>
                            <div class="form-group">
                                <label>Roles</label><br>
                                @foreach($roles as $role)
                                    <div class="form-check form-check-inline">
                                        <label class="inline-flex items-center mt-3">
                                            <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" name="roles[]" value="{{$role->id}}"
                                            ><span class="ml-2 text-gray-700">{{ $role->name }}</span>
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{ route('admin.users.index') }}" class="btn btn-light">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
