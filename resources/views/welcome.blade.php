<x-app-layout>
    <div class="bg-indigo-100">
        <x-container>
            <h2 class="font-bold m-2 text-lg">This is home page</h2>
            <ul class="my-10">
                @foreach ($products as $product)
                    <li class="p-4 shadow-md bg-white rounded-md mb-2">
                        <h4 class="font-bold text-lg">{{ $product->title }}</h4>
                        <span class="text-blue-500"><b>Price: </b>{{ $product->price }}$</span>
                    </li>
                @endforeach
            </ul>
        </x-container>
    </div>
</x-app-layout>