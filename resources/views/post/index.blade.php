@extends('layouts.layout')
@section('content')
    <div class="template-demo">
        @can('Post create')
            <a href="{{ route('admin.posts.create') }}" class="btn btn-primary" style="position: absolute; right: 0;">
                Create Post
            </a>
        </div>
    @endcan
    <div class="main-panel">
        <div class="content-wrapper" style="cursor: pointer">
            <div class="row">
                <div class="col-lg-12 mt-5 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Post Table</h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th class="text-end">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @can('Post access')
                                            @foreach ($posts as $post)
                                                <tr>
                                                    <td>{{ $post->title }}</td>
                                                    <td class="text-end">
                                                        @can('Post edit')
                                                        <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-sm btn-info">Edit</a>
                                                        @endcan
                                                        @can('Post delete')
                                                        <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST" style="display: inline-block;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this user?')">Delete</button>
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
    </div>
@endsection
