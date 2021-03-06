@extends('layouts/app')

@section('content')
    <section class="py-12 bg-gray-100">
        <div class="max-w-screen-xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-4">
                @foreach ($posts as $post)
                    <div class="p-4 bg-white shadow-md rounded-sm">
                        <a href="{{ route('post', ['post' => $post->id]) }}">
                            <figure class="overflow-hidden rounded-sm">
                                <img class="transition-transform duration-200 object-cover transform hover:scale-110 rounded-sm" src="{{ asset('images/ales-nesetril-Im7lZjxeLhg-unsplash.jpg') }}" alt="Computador minimalista">
                            </figure>
                        </a>
                        <a href="{{ route('post', ['post' => $post->id]) }}">
                            <h2 class="mt-2 text-gray-800 hover:underline text-lg font-medium">{{ \Illuminate\Support\Str::words($post->title, 14) }}</h2>
                        </a>
                        <p class="mt-2 text-gray-600">{{ \Illuminate\Support\Str::words($post->content, 14) }}</p>
                        <a href="{{ route('post', ['post' => $post->id]) }}">
                            <button class="mt-2 flex items-center hover:underline text-blue-600">
                                Ver mais
                                <i class="ml-1" data-feather="chevron-right"></i>
                            </button>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
