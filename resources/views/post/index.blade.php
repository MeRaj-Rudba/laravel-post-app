@extends('layout.app')
@section('title', 'Home Page')
@section('heading', 'All Posts')
@section('link_text', 'Add New Post')
@section('link', '/post/create')

@section('content')

    @if (session('message'))
        <div class="alert alert-{{ session('status') }} alert-dismissible fade show" role="alert">
            <strong>{{ session('message') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="grid  xl:grid-cols-3 lg:grid-cols-2 place-items-center p-5">
        @forelse($posts as $key => $post)
            <div class="m-5">

                <div
                    class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-2xl dark:bg-gray-800 dark:border-gray-700">

                    <div style="width:100%;height:250px;overflow:hidden;">

                        <img src="{{ asset('storage/images/' . $post->image) }}" class="rounded-t-lg"
                            style="object-fit: contain;">
                    </div>

                    <div class="p-5">

                        <button
                            class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-cyan-500 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
                            <span
                                class="relative px-5 py-1 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                {{ $post->category }}
                            </span>
                        </button>
                        <div class="text-xl text-cyan-500 font-medium">{{ $post->title }}</div>

                        <p class="text-xl text-gray-500 my-3">{{ Str::limit($post->content, 50) }}</p>

                        <a class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center my-2"
                            href="post/{{ $post->id }}">Details</a>
                    </div>

                </div>

            </div>
        @empty
            <h2 class="text-center text-secondary p-4">No post found in the database!</h2>
        @endforelse
        <div class="d-flex justify-content-center my-5">
            {{ $posts->onEachSide(1)->links() }}
        </div>

    </div>

@endsection
