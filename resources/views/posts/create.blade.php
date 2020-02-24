@extends('layouts.app')

@section('content')
<div class="card card-default">
  <div class="card-header">
    Create Post
  </div>
  <div class="card-body">
    <form class="" action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
      @csrf

      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" name="title" value="" id="title">
      </div>

      <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" id="description" rows="3" cols="5" class="form-control"></textarea>
      </div>

      <div class="form-group">
        <label for="content">Content</label>
        <textarea name="content" id="content" rows="5" cols="5" class="form-control"></textarea>
      </div>

      <div class="form-group">
        <label for="published_at">Published At</label>
        <input type="text" class="form-control" name="published_at" value="" id="published_at">
      </div>

      <div class="form-group">
        <label for="image">Image</label>
        <input type="file" class="form-control" name="image" value="" id="image">
      </div>

      <div class="form-group">
        <button type="submit" name="button" class="btn btn-success">Create Post</button>
      </div>

    </form>
  </div>
</div>

@endsection
