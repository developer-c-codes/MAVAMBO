<x-app-layout>

        <div class="flex  h-screen overflow-auto bg-gray-800" >

        <aside class="bg-gray-900 text-white p-6 flex-shrink-0">
            <ul>
                <li class="mb-3 hover:bg-gray-700 p-2 rounded"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="mb-3 hover:bg-gray-700 p-2 rounded"><a href="{{ route('products.allproducts') }}">Products</a></li>
                <li class="mb-3 hover:bg-gray-700 p-2 rounded"><a href="{{ route('products.addproducts') }}">Add Products</a></li>
                <li class="mb-3 hover:bg-gray-700 p-2 rounded"><a href="#">Orders</a></li>
                <li class="mb-3 hover:bg-gray-700 p-2 rounded"><a href="#">Transaction</a></li>
                <li class="mb-3 hover:bg-gray-700 p-2 rounded"><a href="#">Messages</a></li>
                <li class="mb-3 hover:bg-gray-700 p-2 rounded"><a href="#">Calendar</a></li>
                <li class="mb-3 hover:bg-gray-700 p-2 rounded"><a href="#">Profile</a></li>
            </ul>
        </aside>
    
    <div class="p-8">
    <h2 class="text-2xl font-semibold mb-6 text-gray-300">All Products</h2>
     
    <div class="bg-gray-900  text-white p-0 ">

    <table  class="divide-y divide-gray-800 bg-gray-900 rounded border-collapse border-0 min-w-full">
        <thead class="text-left">
            <tr>
                <th class="p-3">Image</th>
                <th class="p-3">Product Name</th>
                <th class="p-3">Category</th>
                <th class="p-3">Price (Tsh)</th>
                <th class="p-3">Stock</th>
                <th class="p-3">Descripton</th>
            </tr> 
        </thead>

        <tbody  class="divide-y divide-gray-800">
             @foreach ($products as $product)
            <tr class="hover:bg-gray-700">
                <td class="p-4">
                    <img 
                          src="{{ asset('storage/products/' . $product->image) }}"
                          alt="{{ $product->p_name }}"
                          class="h-12 w-12 object-cover rounded"
                    >
                <td class="p-4  font-semibold">{{ $product->p_name }}</td>
                <td class="p-4">{{ $product->category }}</td>
                <td class="p-4  text-green-600">{{ $product->price }}</td>
                <td class="p-4 ">{{ $product->stock }}</td>
                <td class="p-4 text-sm text-gray-700">{{ $product->descripton}}</td>
                <td class="p-4 ">
                    <form 
                         action="{{ route('products.destroy', $product->id) }}"
                         method="POST"
                         onsubmit="return confirm('Are you sure you want to delete this product?');">

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="px-3 py-1 bg-red-600 text-white rounded hover:bg-red-700">
                        Delete
                    </button>
                </td>
            </tr><hr>
            @endforeach
        </tbody><hr>
    </table>
    </div>
</div>

</x-app-layout>