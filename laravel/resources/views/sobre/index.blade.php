<!-- Herda o layout padrão definido no template "main" -->
@extends('templates.main', ['titulo' => "Sobre o Projeto", 'rota' => "gerencia.sobre.create", 'permission' => "App/Models/Sobre"] )

<!-- Preenche o conteúdo da seção "conteudo" -->
@section('conteudo')
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-label for="name" :value="__('Name')" />

            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-label for="email" :value="__('Email')" />

            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-label for="password" :value="__('Password')" />

            <x-input id="password" class="block mt-1 w-full"
                     type="password"
                     name="password"
                     required autocomplete="new-password" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-input id="password_confirmation" class="block mt-1 w-full"
                     type="password"
                     name="password_confirmation" required />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-button class="ml-4">
                {{ __('Register') }}
            </x-button>
        </div>


        <!-- Paper -->
        <div class="mt-4">
            <select name="role_id" class="rounded-md shadow-sm border-gray-300
                    focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                @foreach($roles as $item)
                    <option value="{{$item->id}}">
                        {{ $item->name }}
                    </option>
                @endforeach
            </select>
        </div>

    </form>
@endsection
