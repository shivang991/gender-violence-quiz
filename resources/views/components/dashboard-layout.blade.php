<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dashboard</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-200">
    <nav class="grid grid-cols-4 text-purple-800 w-8/12 mx-auto py-4">
        <a href=""
            class="text-center flex items-center flex-col py-4 px-4 @if (request()->is('quiz-knowledge')) bg-purple-200 @endif hover:bg-purple-100 hover:shadow-xl hover:shadow-purple-200 rounded-md">
            <x-icons.knowledge></x-icons.knowledge>
            <p>Knowledge quiz</p>
        </a>
        <a href=""
            class="text-center flex items-center flex-col py-4 px-4 @if (request()->is('quiz-personal')) bg-purple-200 @endif hover:bg-purple-100 hover:shadow-xl hover:shadow-purple-200 rounded-md">
            <x-icons.gender></x-icons.gender>
            <p>Personal quiz</p>
        </a>
        <a href="{{ route('profile') }}"
            class="text-center flex items-center flex-col py-4 px-4 @if (request()->is('profile')) bg-purple-200 @endif hover:bg-purple-100 hover:shadow-xl hover:shadow-purple-200 rounded-md">
            <x-icons.user></x-icons.user>
            <p>Edit your profile</p>
        </a>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit"
                class="text-center flex items-center flex-col py-4 px-4 hover:bg-orange-100 rounded-md text-orange-600 hover:shadow-xl hover:shadow-orange-200 w-full">
                <x-icons.logout></x-icons.logout>
                <p>Logout</p>
            </button>
        </form>
    </nav>
    <div class="w-8/12 mx-auto h-px bg-purple-800"></div>
    {{ $slot }}
</body>

</html>