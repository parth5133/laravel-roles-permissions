@extends('layouts.layout')
@section('content')
    <div class="template-demo">
        <a href="{{ route('admin.permissions.create') }}" class="btn btn-primary" style="position: absolute; right: 0;">
            New permissions
        </a>
    </div>
    <div class="main-panel">
        <div class="content-wrapper" style="cursor: pointer">
            <div class="row">
                <div class="col-lg-12 mt-5 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">List of Permissions</h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th class="text-end">Actions</th> <!-- Actions column set to right side -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($permissions as $permission)
                                            <tr>
                                                <td>{{ $permission->name }}</td>
                                                <td class="text-end">
                                                    <a href="{{ route('admin.permissions.edit', $permission->id) }}" class="btn btn-info btn-sm">Edit</a>
                                                    <form action="{{ route('admin.permissions.destroy', $permission->id) }}" method="POST" style="display: inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this permission?')">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
