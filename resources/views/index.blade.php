@extends('layout.base')

@section('title','Home')

@section('content')

    <div class="w-3/12 py-12 px-12 m-auto bg-gray-100 rounded-lg">
        <form action="">
            <div class="mb-5">
                <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 ">Nome</label>
                <input type="text" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm font-sans rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="mb-5">
                <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 ">E-mail</label>
                <input type="text" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm font-sans rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div>
                <x-button type="submit" mode="Enviar" />


            </div>
        </form>
@endsection
