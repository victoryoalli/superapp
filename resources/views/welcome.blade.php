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
    <div class="flex flex-col-reverse h-screen sm:flex-row bg-gray-50">
        <div class="flex items-center justify-center text-white bg-indigo-700 h-1/2 sm:h-full sm:w-1/2">
            <div class="px-8 space-y-4 sm:px-24">
                <h1 class="text-5xl font-bold sm:text-6xl">{{$post->title}}</h1>
                <p class="">{{$post->content}}</p>
            </div>
        </div>
        <div class="flex items-center justify-center bg-gray-700 h-1/2 sm:h-full sm:w-1/2">
            <div class="w-10/12 p-8 mx-auto rounded bg-gray-50">
                <h1 class="text-3xl font-black text-center text-indigo-700">Supper APP</h1>
                <form method="POST" class="space-y-6" action="{{route('posts.store')}}">
                    @csrf
                    <div>
                        <label class="block text-sm font-medium leading-5 text-gray-700" for="title">
                            Título
                        </label>
                        <input type="text" name="title" class="block w-full px-3 py-2 mt-1 transition duration-150 ease-in-out border border-gray-300 rounded-md shadow-sm form-input String focus:outline-none sm:text-sm sm:leading-5" id="title" value="" maxlength="255" required="required">
                    </div>
                    <div>
                        <label class="block text-sm font-medium leading-5 text-gray-700" for="content">
                            Message
                        </label>
                        <div class="rounded-md shadow-sm">
                            <textarea rows="2" class="block w-full mt-1 transition duration-150 ease-in-out border-gray-300 rounded-md Text form-textarea sm:text-sm sm:leading-5" name="content" id="content"></textarea>
                        </div>
                    </div>
                    <div>
                        <button class="w-full py-2 font-semibold text-white bg-indigo-500 rounded shadow" type="submit"> Enviar</button>
                    </div>

                </form>

            </div>
        </div>

    </div>
</body>

</html>
