<x-guest-layout>
    <form action="{{route('landlord.register')}}" method="POST">
        <div class="flex flex-col items-center justify-center min-h-screen space-y-4">
            <h1 class="py-4 text-4xl font-bold text-indigo-700 ">Register</h1>
            @csrf
            <div>
                <input type="text" name="name" placeholder="Name">
            </div>
            <div>
                <input type="text" name="domain" placeholder="Domain">
            </div>
            <div>
                <button class="px-8 py-1.5 text-white bg-indigo-500 rounded" type="submit">Crear</button>
            </div>
        </div>
    </form>
</x-guest-layout>
