<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Momentum</title>

    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/orologio.js'])

</head>

<body class="">

    <div class="flex flex-row justify-between">
        <div>
            <h1 class="md:ml-6 ml-0 md:text-4xl text-3xl p-2">MoMentum</h1>
        </div>
        <div>
            <input type="text" id="orologio"
                class="w-32 rounded-xl border-2 border-black bg-gray-200 m-2 mr-4 text-center font-bold text-black">
        </div>
    </div>

    <div class="flex flex-col sm:justify-center sm:items-center min-h-screen bg-gray-900">

        <div class="md:w-1/5 text-center rounded-xl w-100 p-2 m-2 text-black bg-white">
            <p class="">Oggi è {{ $data['oggi'] }}</p>
        </div>

        <div class="md:w-1/5 text-center rounded-xl w-100 p-2 m-2 text-black bg-white">
            <p class="">Longitudine {{ $data['longitudine'] }} ° nord</p>
        </div>
        <div class="md:w-1/5 text-center rounded-xl w-100 p-2 m-2 text-black bg-white">
            <p class="">Latitudine {{ $data['latitudine'] }} ° est</p>
        </div>


        <div class="md:w-1/5 text-center rounded-xl border-blue w-100 p-2 m-2 text-black bg-white">
            <p>L'alba sarà alle ore {{ $data['alba'] }}</p>
        </div>
        <div class="md:w-1/5 text-center rounded-xl border-blue w-100 p-2 m-2 text-black bg-white">
            <p>Il tramonto sarà alle ore {{ $data['tramonto'] }}</p>
        </div>
        <div class="md:w-1/5 text-center rounded-xl border-blue w-100 p-2 m-2 text-black bg-white">
            <p>Il giorno solare dura {{ $data['giornosolare'] }}</p>
        </div>
        <div class="md:w-1/5 text-center rounded-xl border-blue w-100 p-2 m-2 text-black bg-white">
            <p>Il momentum è di {{ $data['momentum'] }}</p>
        </div>

        <footer>
            <p class="m-4 text-gray-400"><strong class="text-red-500">MoMentum</strong> è un'idea geniale di FRA</p>
        </footer>

    </div>
</body>

</html>
