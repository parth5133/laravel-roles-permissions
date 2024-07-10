@extends('layouts.layout')
@section('content')
    <div class="template-demo">
        @can('Role create')
            <a href="{{ route('admin.roles.create') }}" class="btn btn-primary" style="position: absolute; right: 0;">
                Create Role
            </a>
        </div>
    @endcan
    <div class="main-panel">
        <div class="content-wrapper" style="cursor: pointer">
            <div class="row">
                <div class="col-lg-12 mt-5 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Role Table</h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Permissions</th>
                                            <th class="text-end">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @can('Role access')
                                            @foreach ($roles as $role)
                                                <tr>
                                                    <td>{{ $role->name }}</td>
                                                    <td>
                                                        @foreach ($role->permissions as $permission)
                                                            {{ $permission->name }}
                                                        @endforeach
                                                    </td>

                                                    <td class="text-end">
                                                        @can('Role edit')
                                                            <a href="{{ route('admin.roles.edit', $role->id) }}"
                                                                class="btn btn-sm btn-info">Edit</a>
                                                        @endcan
                                                        @can('Role delete')
                                                            <form action="{{ route('admin.roles.destroy', $role->id) }}"
                                                                method="POST" style="display: inline-block;">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-sm btn-danger"
                                                                    onclick="return confirm('Are you sure you want to delete this user?')">Delete</button>
                                                            </form>
                                                        @endcan
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endcan
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endsection
