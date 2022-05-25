@extends('layout.app')
@section('title', 'Add New Post')
@section('heading', 'Create a New Post')
@section('link_text', 'Home')
@section('link', '/post')

@section('content')

    <div class="grid place-items-center">
        <div class="col-lg-8 mx-auto">
            <div class="shadow-2xl p-5">
                <div class="px-5">
                    <h3 class="text-xl font-medium text-cyan-500">Add New Post</h3>
                </div>
                <div class="card-body p-5">
                    <form action="/post" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="my-2">
                            <input type="text" name="title" id="title"
                                class="border w-full p-2 rounded-lg border-gray-500  focus:outline-cyan-500 @error('title') is-invalid @enderror"
                                placeholder="Title" value="{{ old('title') }}">
                            @error('title')
                                <div class="text-rose-500">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="my-2">
                            <input type="text" name="category" id="category"
                                class="border w-full p-2 rounded-lg border-gray-500  focus:outline-cyan-500 @error('category') is-invalid @enderror"
                                placeholder="Category" value="{{ old('category') }}">
                            @error('category')
                                <div class="text-rose-500">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="my-2">
                            <input type="file" name="file" id="file" accept="image/*"
                                class=" w-full p-2 rounded-lg   focus:outline-cyan-500 @error('file') is-invalid @enderror">
                            @error('file')
                                <div class="text-rose-500">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="my-2">
                            <textarea name="content" id="content" rows="6"
                                class="border w-full p-2 rounded-lg border-gray-500  focus:outline-cyan-500 @error('content') is-invalid @enderror"
                                placeholder="Post Content">{{ old('content') }}</textarea>
                            @error('content')
                                <div class="text-rose-500">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="my-2">
                            <label class="p-2 " for="refFile">Attachment</label>
                            <input type="file" name="refFile" id="refFile" accept=".doc,.docx,.pdf,.csv"
                                class=" w-full p-2 rounded-lg   focus:outline-cyan-500 @error('refFile') is-invalid @enderror">
                            @error('refFile')
                                <div class="text-rose-500">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="my-2">
                            <input type="submit" value="Add Post"
                                class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
