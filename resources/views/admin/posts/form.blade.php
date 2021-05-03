@extends('layouts/app')

@section('content')
    <section class="py-12 bg-gray-100 h-screen">
        <div class="max-w-screen-xl mx-auto h-full grid place-items-center">
            <div class="w-full max-w-md m-auto p-4 bg-white shadow-md rounded-sm">
                <form action="{{ route('posts/save') }}" method="POST" class="grid grid-cols-1 gap-4">
                    @csrf
                    <h1 class="text-gray-800 font-medium text-2xl">Adicionar post</h1>
                    <div>
                        <label class="block text-gray-800" for="title">Imagem</label>
                        <input type="file" name="image" class="mt-2">
                        @error('image')
                            <div class="mt-1 text-sm text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label class="block text-gray-800" for="title">Título</label>
                        <input type="text" id="title" name="title" required value="{{ old('title') }}" class="mt-2 p-2 w-full border border-gray-300 rounded-sm">
                        @error('title')
                            <div class="mt-1 text-sm text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label class="block text-gray-800" for="content">Conteúdo</label>
                        <textarea id="content" name="content" required class="mt-2 p-2 w-full border border-gray-300 rounded-sm">{{ old('content') }}</textarea>
                        @error('content')
                            <div class="mt-1 text-sm text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <button class="px-4 bg-gray-600 rounded-sm py-2 text-gray-100">
                            Salvar post
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
