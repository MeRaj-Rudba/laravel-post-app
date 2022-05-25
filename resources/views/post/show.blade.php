@extends('layout.app')
@section('title', 'Post Details')
@section('heading', 'Post Details')
@section('link_text', 'Home')
@section('link', '/post')

@section('content')

    <div class="">
        <div class=" flex justify-center ">
            <div class="sm:w-10/12 md:w-8/12 lg:w-6/12  shadow-2xl rounded-lg m-5">
                <div>
                    <img src="{{ asset('storage/images/' . $post->image) }}" class="w-full rounded-t-lg"
                        style="object-fit: contain;">
                </div>
                <div class=" p-5">
                    <div class="d-flex justify-content-between align-items-center">
                        <button
                            class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-cyan-500 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
                            <span
                                class="relative px-5 py-1 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                {{ $post->category }}
                            </span>
                        </button>
                        <p class="italic text-gray-400">{{ \Carbon\Carbon::parse($post->created_at)->diffForHumans() }}</p>
                    </div>


                    <h3 class="font-medium text-cyan-500 text-2xl">{{ $post->title }}</h3>
                    <p class="py-10 text-slate-600 text-lg">{{ $post->content }}</p>

                    <a class="text-indigo-400" href="{{ asset('storage/files/' . $post->refFile) }}" download><i
                            class="fa-solid fa-paperclip"></i>
                        Attachment</a>
                </div>
                <div class="flex justify-end p-5">
                    <a href="/post/{{ $post->id }}/edit"
                        class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Edit</a>
                    <form action="/post/{{ $post->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="text-white bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
