<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Super App</title>
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <script src="{{mix('js/app.js')}}"></script>

</head>

<body class="min-h-screen antialiased">
    <div class="flex flex-col h-screen sm:flex-row bg-gray-50">
        <div class="flex items-center justify-center text-white bg-indigo-700 h-1/3 sm:h-full sm:w-1/2">
            <div class="p-8 space-y-4">
                <h1 class="text-6xl font-bold">Super APP</h1>
                <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum est ullam tempore doloribus.</p>
            </div>
        </div>
        <div class="flex items-center justify-center bg-gray-700 h-2/3 sm:h-full sm:w-1/2">
            <div class="rounded bg-gray-50">
                <form action="{{route('posts')}}">
                    @csrf

                </form>

            </div>
        </div>

    </div>
</body>

</html>
