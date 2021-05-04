@extends('layouts/app')

@section('content')
    <section class="py-12 bg-gray-100">
        <div class="max-w-screen-xl mx-auto px-4">
            <div class="flex justify-end">
                <a href="{{ route('admin/posts/create') }}">
                    <button class="mt-2 p-1 rounded-full flex items-center hover:underline text-blue-600">
                        Adicionar
                        <i class="ml-1" data-feather="chevron-right"></i>
                    </button>
                </a>
            </div>
            <table class="mt-10 w-full">
                <thead>
                    <tr>
                        <th class="border border-gray-300 text-left p-2">Título</th>
                        <th class="border border-gray-300 text-left p-2">Conteúdo</th>
                        <th class="border border-gray-300 text-left p-2">Editar</th>
                        <th class="border border-gray-300 text-left p-2">Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr class="bg-gray-200">
                            <td class="p-2 border border-gray-300">{{ $post->title }}</td>
                            <td class="p-2 border border-gray-300">{{ \Illuminate\Support\Str::words($post->content, 8) }}</td>
                            <td class="p-2 border border-gray-300">
                                <a href="{{ route('admin/posts/update', ['post' => $post->id]) }}">
                                    <button class="mt-2 p-1 rounded-full flex items-center hover:underline text-blue-600">
                                        <i data-feather="edit"></i>
                                    </button>
                                </a>
                            </td>
                            <td class="p-2 border border-gray-300">
                                <form action="{{ route('admin/posts/delete', ['post' => $post->id]) }}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button class="mt-2 p-1 rounded-full flex items-center hover:underline text-blue-600">
                                        <i data-feather="trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
