<x-app-layout>

    <div class="flex  h-screen overflow-auto">

        <aside class=" bg-gray-900 text-white p-6 flex-shrink-0">
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

    <div class="py-8 flex-1 bg-gray-800  text-gray-100  overflow-auto">

       <div class="mb-6 overflow-hidden ml-8">
    <h1 class="text-4xl font-bold text-white-800">Add New Product</h1>
    <p class="text-gray-400 mt-2">
        Create a new product and add it to your inventory..
    </p>
   </div> 
        <div class="max-w-5xl mx-auto bg-gray-900 rounded-xl shadow p-8">

            <h1 class="text-2xl font-bold mb-6 text-gray-100" >Add Product</h1>

            <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
                @csrf

                <!-- Product Name -->
                <div class="mb-4">
                    <label class="block text-gray-200 font-medium">Product Name</label>
                    <input type="text" name="p_name" class="w-full mt-1 p-3 border rounded-lg focus:ring focus:ring-blue-300 bg-gray-700">
                </div>
                
                <!-- Category -->
                
                <div class="mb-4">
                    <label class="block text-gray-200 font-medium">Category</label>
                    <input type="text" name="category" class="w-full mt-1 p-3 border rounded-lg focus:ring focus:ring-blue-300 bg-gray-700">
                </div>
                
                <!-- Price -->
                <div class="mb-4 ">
                    <label class="block text-white font-medium mt-7">Price</label>
                    <input type="number" name="price" min="0" class="w-full  p-3 border rounded-lg focus:ring focus:ring-blue-300 bg-gray-700">
                </div>
                  


                <!-- Quantity -->
                <div class="mb-4 ">
                    <label class="block text-gray-200 font-medium">Quantity</label>
                    <input type="number" name="stock" min="0" class="w-full mt-1 p-3 border rounded-lg focus:ring focus:ring-blue-300 bg-gray-700">
                </div>

                <!-- Image -->
                <div class="mb-4">
                    <label class="block text-gray-200 font-medium">Product Image</label>
                    <input type="file" name="image" class="mt-2 rouded bg-gray-700">
                </div>

                <!-- Description -->
                <div class="mb-4">
                    <label class="block text-gray-200 font-medium">Description</label>
                    <textarea name="description" rows="4" class="w-full mt-1 p-3 border rounded-lg focus:ring focus:ring-blue-300 bg-gray-700 mw-5"></textarea>
                </div>

                <!-- Submit -->
                <button type="submit" class="bg-blue-600 ml-9 text-white px-6 py-3 rounded-lg hover:bg-blue-700">
                    Save Product
                </button>

                <button class="border border-red-800 text-red-600 float-right mr-9 px-6 py-3 rounded-lg hover:bg-red-800 hover:text-white">
                   X  Cancel
                </button>

            </form>

        </div>
    </div>
</div>
</x-app-layout>