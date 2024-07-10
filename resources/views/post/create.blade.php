@extends('layouts.layout')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">
                            @if (isset($post->id))
                                Update Post
                            @else
                                Create Post
                            @endif
                        </h4>
                        <form
                            action="{{ isset($post) ? route('admin.posts.update', $post->id) : route('admin.posts.store') }}"
                            method="POST">
                            @csrf
                            @if (isset($post))
                                @method('PUT')
                            @endif
                            <div class="form-group">
                                <label for="name">Title</label>
                                <input type="text" class="form-control" id="title" name="title"
                                    value="{{ isset($post) ? $post->title : old('title') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="name">Description</label>
                                <input type="text" class="form-control" id="description" name="description"
                                    value="{{ isset($post) ? $post->description : old('description') }}" required>
                            </div>
                            <button type="submit" class="btn btn-primary">{{ isset($post) ? 'Update' : 'Submit' }}</button>
                            <a href="{{ route('admin.posts.index') }}" class="btn btn-light">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
