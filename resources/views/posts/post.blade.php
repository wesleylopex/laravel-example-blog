@extends('layouts/app')

@section('content')
    <section class="py-12 bg-gray-100 min-h-screen">
        <div class="max-w-screen-xl mx-auto px-4">
            <div class="md:w-1/2 md:mx-auto">
                <a href="{{ url()->previous() }}">
                    <button class="flex items-center hover:underline text-blue-600">
                        <i class="mr-1" data-feather="chevron-left"></i>
                        Voltar
                    </button>
                </a>
                <h1 class="mt-6 text-2xl font-medium text-gray-800">{{ $post->title }}</h1>
                <p class="mt-6 text-gray-600 leading-relaxed">{{ nl2br($post->content) }}</p>
            </div>
        </div>
    </section>
@endsection
