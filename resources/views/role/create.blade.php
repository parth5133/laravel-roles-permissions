@extends('layouts.layout')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">
                            @if (isset($role->id))
                                Update Roles
                            @else
                                Create Roles
                            @endif
                        </h4>
                        <form
                            action="{{ isset($role) ? route('admin.roles.update', $role->id) : route('admin.roles.store') }}"
                            method="POST">
                            @csrf
                            @if (isset($role))
                                @method('PUT')
                            @endif
                            <div class="form-group">
                                <label for="name">Role Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Enter Role Name" value="{{ isset($role) ? $role->name : old('name') }}"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="name">Permissions</label><br>
                                @foreach ($permissions as $permission)
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox"
                                            id="permission_{{ $permission->id }}" name="permissions[]"
                                            value="{{ $permission->id }}"
                                            {{ in_array($permission->id, $rolePermissionIds) ? 'checked' : '' }}>


                                        <label class="form-check-label"
                                            for="permission_{{ $permission->id }}">{{ $permission->name }}</label>
                                    </div>
                                @endforeach
                            </div>

                            <button type="submit" class="btn btn-primary">{{ isset($role) ? 'Update' : 'Submit' }}</button>
                            <a href="{{ route('admin.roles.index') }}" class="btn btn-light">Cancel</a>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
