@extends('layout.app')
@section('title', 'Edit Post')
@section('heading', 'Edit This Post')
@section('link_text', 'Home')
@section('link', '/post')

@section('content')

    <div class="row my-3">
        <div class="col-lg-8 mx-auto">
            <div class="card shadow">
                <div class="card-header ">
                    <h3 class="text-secondary fw-bold">Edit Post</h3>
                </div>
                <div class="card-body p-4">
                    <form action="/post/{{ $post->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="my-2">
                            <input type="text" name="title" id="title" class="form-control" placeholder="Title"
                                value="{{ $post->title }}" required>
                        </div>

                        <div class="my-2">
                            <input type="text" name="category" id="category" class="form-control" placeholder="Category"
                                value="{{ $post->category }}" required>
                        </div>

                        <div class="my-2">
                            <input type="file" name="file" id="file" accept="image/*" class="form-control">
                        </div>

                        <img src="{{ asset('storage/images/' . $post->image) }}" class="img-fluid img-thumbnail"
                            width="150">

                        <div class="my-2">
                            <textarea name="content" id="content" rows="6" class="form-control" placeholder="Post Content"
                                required>{{ $post->content }}</textarea>
                        </div>
                        <div class="my-2">
                            <label for="refFile">Attachment</label>
                            <input type="file" name="refFile" id="refFile" accept=".doc,.docx,.pdf,.csv"
                                class="form-control">
                        </div>
                        <div class="my-2">
                            <input type="submit" value="Update Post"
                                class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
