@extends('layouts.blog')

@section('content')

<div class="container">
    
    
    <!-- component -->
<div class="max-w-4xl px-10 my-4 py-6 bg-white rounded-lg shadow-md p-4">
    <div class="flex justify-between items-center">
        <span class="font-light text-gray-600">{{$post->created_at}}</span>
    </div>
    <div class="mt-2">
        <h1 class="text-2xl text-gray-700 font-bold hover:text-gray-600">{{$post->title}}</h1>
        <p class="mt-2 text-gray-600">{{$post->content}}</p>
    </div>
    <div class="flex justify-between items-center mt-4">
        <a class="text-blue-600 hover:underline" href="#">Read more</a>
        <div>
            <a class="flex items-center" href="#">
                <img class="mx-4 w-10 h-10 object-cover rounded-full hidden sm:block" src="https://images.unsplash.com/photo-1502980426475-b83966705988?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=373&q=80" alt="avatar">
                <h1 class="text-gray-700 font-bold">{{$post->user->name}}</h1>
            </a>
        </div>
    </div>
</div>
<h4 class="flex justify-center">Commentaires</h4>
    @foreach ($post->comments as $comment)
<div class="flex justify-center relative top-1/3">




    <!-- This is an example component -->
    <div class="relative grid grid-cols-1 gap-4 p-4 mb-8 border rounded-lg bg-white shadow-lg">
        <div class="relative flex gap-4">
            <div class="flex flex-col w-full">
                <div class="flex flex-row justify-between">
                    <p class="relative text-xl whitespace-nowrap truncate overflow-hidden">{{$comment->user->name}}</p>
                    <a class="text-gray-500 text-xl" href="#"><i class="fa-solid fa-trash"></i></a>
                </div>
                <p class="text-gray-400 text-sm">{{$comment->created_at}}</p>
            </div>
        </div>
        <p class="-mt-4 text-gray-500">{{$comment->content}}</p>
    </div>
    
    
    
    </div>
    @endforeach

    @auth
        <form action="" method="POST">
            @csrf
        </form>
    @endauth
</div>
@endsection
