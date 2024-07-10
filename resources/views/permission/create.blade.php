@extends('layouts.layout')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">
                        @if (isset($permission->id))
                            Update Permission
                        @else
                            Create Permission
                        @endif
                    </h4>
                    <form action="{{ isset($permission) ? route('admin.permissions.update', $permission->id) : route('admin.permissions.store') }}" method="POST">
                        @csrf
                        @if(isset($permission))
                            @method('PUT')
                        @endif
                        <div class="form-group">
                            <label for="name">Permission Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Permission Name" value="{{ isset($permission) ? $permission->name : old('name') }}" required>
                        </div>
                        <button type="submit" class="btn btn-primary">{{ isset($permission) ? 'Update' : 'Submit' }}</button>
                        <a href="{{ route('admin.permissions.index') }}" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
