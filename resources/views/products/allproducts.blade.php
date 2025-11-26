<x-app-layout>

        <div class="flex  h-screen overflow-auto bg-gray-800" >

        <aside class="bg-gray-900 text-white p-6 flex-shrink-0">
            <ul>
                <li class="mb-3 hover:bg-gray-700 p-2 rounded"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="mb-3 hover:bg-gray-700 p-2 rounded"><a href="{{ route('products.allproducts') }}">">Products</a></li>
                <li class="mb-3 hover:bg-gray-700 p-2 rounded"><a href="{{ route('products.addproducts') }}">Add Products</a></li>
                <li class="mb-3 hover:bg-gray-700 p-2 rounded"><a href="#">Orders</a></li>
                <li class="mb-3 hover:bg-gray-700 p-2 rounded"><a href="#">Transaction</a></li>
                <li class="mb-3 hover:bg-gray-700 p-2 rounded"><a href="#">Messages</a></li>
                <li class="mb-3 hover:bg-gray-700 p-2 rounded"><a href="#">Calendar</a></li>
                <li class="mb-3 hover:bg-gray-700 p-2 rounded"><a href="#">Profile</a></li>
            </ul>
        </aside>
    
    <h2 class="text-2xl font-semibold mb-6">All Products</h2>

    <div class="flex  gap-6 bg-gray-800 mt-6">
        @foreach ($products as $product)
            <div class="bg-gray-900 shadow-md p-4 rounded-lg text-white">
                <img src="{{ asset('storage/products/' . $product->image) }}" 
                     class="w-full h-40 object-cover rounded-md mb-3">
                <h3 class="text-lg font-bold">{{ $product->p_name }}</h3>
                <h3 class="text-lg font-bold">{{ $product->price }}</h3>
                <h3 class="text-lg font-bold">{{ $product->stock }}</h3>
            </div>
        @endforeach
    </div>
</div>

</x-app-layout>