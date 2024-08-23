<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-green-100 text-center">
    <h1>Hello! : )</h1>
    <h1 class="text-3xl font-bold underline text-blue-600 bg-slate-400">BU BAŞLIK KOCAMAN</h1>
    <h2 class="text-2xl text-yellow-700">acaba</h2>
    <h3 class="text-xl">h3 yazdım</h3>
    <p class="text-xl">paragfraf</p>

    @if (true)
        <h1>Hello brain de</h1>
    @else
        <h1>Bye bye</h1>
    @endif

    @if (false)
        <h1>Hello brain de</h1>
    @else
        <h1 class="text-green-400">Bye byebyebyebyebye</h1>
    @endif


</body>
</html>
