@extends('layout.base')

@section('title','Home')

@section('navigation')
    <div class="header sticky top-0 bg-white shadow-md flex items-center justify-between px-8 py-02">
        <!-- logo -->
        <h1 class="w-3/12 ">
            <a href="">
                <img class="inline-flex w-12" src="data:image/png;base64,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">
                <span class="text-xl hover:text-green-500">John's Ecommerce</span>
            </a>
        </h1>

        <!-- navigation -->
        <nav class="nav font-semibold text-lg text-center">
            <ul class="flex items-center">
                <li class="p-4 border-b-2 border-green-500 border-opacity-0 hover:border-opacity-100 hover:text-green-500 duration-200 cursor-pointer active">
                    <a href="">Dashboard</a>
                </li>

            </ul>
        </nav>

    </div>
@endsection

@section('content')
    <div class="container mx-auto">
        <h1 class="text-4xl font-bold">Second Page</h1>
        <p class="text-lg">This is second page.</p>
    </div>
    <div class="px-32 w-3/12 m-auto grid grid-cols-1 gap-4">
        <x-alert
            type="success"
            title="Criado"
            message="Criado com sucesso"
        />
        <x-alert
            type="error"
            title="Criado"
            message="Criado com sucesso"
        />
        <x-alert
            type="warning"
            title="Criado"
            message="Criado com sucesso"
        />

    </div>


@endsection
