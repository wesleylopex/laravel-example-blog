@extends('layouts/app')

@section('content')
    <section class="py-12 bg-gray-100 h-screen flex items-center">
        <div class="max-w-screen-xl mx-auto px-4">
            <div class="w-full max-w-sm mx-auto p-4 bg-white shadow-md rounded-sm">
                <form action="" method="POST" class="grid grid-cols-1 gap-4">
                    <div>
                        <label class="block text-gray-800" for="email">E-mail</label>
                        <input type="text" id="email" name="email" class="mt-2 p-2 w-full border border-gray-300 rounded-sm">
                    </div>
                    <div>
                        <label class="block text-gray-800" for="password">Senha</label>
                        <input type="text" id="password" name="password" class="mt-2 p-2 w-full border border-gray-300 rounded-sm">
                    </div>
                    <div>
                        <a href="{{ route('admin/posts') }}">
                            <button type="button" class="w-full bg-gray-600 rounded-sm py-2 text-gray-100">
                                Entrar
                            </button>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
