<x-app-layout>
    

   
    <div class="flex  h-screen overflow-auto">

        <aside class=" bg-gray-900 text-white p-6 flex-shrink-0">
            <ul>
                <li class="mb-3 hover:bg-gray-700 p-2 rounded"><a href="#">Home</a></li>
                <li class="mb-3 hover:bg-gray-700 p-2 rounded"><a href="#">Products</a></li>
                <li class="mb-3 hover:bg-gray-700 p-2 rounded"><a href="#">Add Products</a></li>
                <li class="mb-3 hover:bg-gray-700 p-2 rounded"><a href="#">Orders</a></li>
                <li class="mb-3 hover:bg-gray-700 p-2 rounded"><a href="#">Transaction</a></li>
                <li class="mb-3 hover:bg-gray-700 p-2 rounded"><a href="#">Messages</a></li>
                <li class="mb-3 hover:bg-gray-700 p-2 rounded"><a href="#">Calendar</a></li>
                <li class="mb-3 hover:bg-gray-700 p-2 rounded"><a href="#">Profile</a></li>
            </ul>
        </aside>


        <main class="flex-1 bg-gray-800  p-4 text-white overflow-auto">

        <div class="mb-6 overflow-hidden">
    <h1 class="text-4xl font-bold text-white-800">Dashboard Overview</h1>
    <p class="text-gray-400 mt-2">
        Welcome back! Here's what's happening with your business today.
    </p>
</div> 

             <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                

    <!-- Total Sales -->
    <div class="bg-gray-900 text-white p-6 rounded-xl shadow flex items-center justify-between">
        <div>
            <p class="text-sm opacity-90">Total Sales</p>
            <h2 class="text-3xl font-bold mt-2">$1,250</h2>
        </div>

        <!-- Banknotes Icon -->
        <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 opacity-80" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                d="M2.25 7.5h19.5m-19.5 0A2.25 2.25 0 0 1 4.5 5.25h15a2.25 2.25 0 0 1 2.25 2.25m-19.5 0v9a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 16.5v-9m-9 3.75a3 3 0 1 0 0 6 3 3 0 0 0 0-6Z" />
        </svg>
    </div>

    <!-- Total Orders -->
    <div class="bg-gray-900 text-white p-6 rounded-xl shadow flex items-center justify-between">
        <div>
            <p class="text-sm opacity-90">Total Orders</p>
            <h2 class="text-3xl font-bold mt-2">24</h2>
        </div>

        <!-- Shopping cart icon -->
        <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 opacity-80" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                d="M2.25 3h1.386c.51 0 .955.343 1.08.835l.383 1.53M7.5 14.25h9.75m-9.75 0L6.375 6.75m1.125 7.5L9 6.75m9.75 7.5l1.657-7.082A1.125 1.125 0 0 0 19.312 5.25H5.25M7.5 21a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Zm9 0a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z" />
        </svg>
    </div>

    <!-- Total Customers -->
    <div class="bg-gray-900 text-white p-6 rounded-xl shadow flex items-center justify-between">
        <div>
            <p class="text-sm opacity-90">Total Customers</p>
            <h2 class="text-3xl font-bold mt-2">9</h2>
        </div>

        <!-- Users icon -->
        <!-- User / Customers icon (outline) -->
<svg class="w-12 h-12 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a4 4 0 00-3-3.87M9 20H4v-2a4 4 0 013-3.87M12 12a4 4 0 100-8 4 4 0 000 8z" />
</svg>
    </div>

    <!-- Total Products -->
    <div class="bg-gray-900 text-white p-6 rounded-xl shadow flex items-center justify-between">
        <div>
            <p class="text-sm opacity-90">Total Products</p>
            <h2 class="text-3xl font-bold mt-2">58</h2>
        </div>

        <!-- Fire icon -->
        <svg class="w-12 h-12 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12v8a2 2 0 01-2 2H6a2 2 0 01-2-2v-8m16-4l-8-4-8 4m16 0l-8 4-8-4" />
</svg>
    </div>

</div>


        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mt-6">
    <!-- Revenue Overview -->
    <div class="bg-gray-900 p-6 rounded-xl shadow">
        <h2 class="text-xl font-semibold text-gray-200 mb-4">Revenue Overview</h2>
        <canvas id="revenueChart" class="w-full h-64"></canvas>
    </div>

    <!-- Products Overview -->
    <div class="bg-gray-900 p-6 rounded-xl shadow">
        <h2 class="text-xl font-semibold text-gray-200 mb-4">Products Overview</h2>
        <canvas id="productsChart" class="w-full h-64"></canvas>
    </div>
</div>

<!-- Chart.js Script -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Revenue Chart
    const revenueCtx = document.getElementById('revenueChart').getContext('2d');
    const revenueChart = new Chart(revenueCtx, {
        type: 'line', // line chart
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
            datasets: [{
                label: 'Revenue ($)',
                data: [1200, 1500, 1000, 1700, 2000, 1900],
                borderColor: '#4F46E5', // Indigo
                backgroundColor: 'rgba(79,70,229,0.1)',
                fill: true,
                tension: 0.4
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { display: false },
            },
            scales: {
                y: { beginAtZero: true }
            }
        }
    });

    // Products Chart
    const productsCtx = document.getElementById('productsChart').getContext('2d');
    const productsChart = new Chart(productsCtx, {
        type: 'bar', // bar chart
        data: {
            labels: ['Product A', 'Product B', 'Product C', 'Product D', 'Product E'],
            datasets: [{
                label: 'Units Sold',
                data: [50, 75, 40, 60, 90],
                backgroundColor: '#4F46E5' // Amber
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { display: false },
            },
            scales: {
                y: { beginAtZero: true }
            }
        }
    });
</script>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mt-6">
    <!-- Recently Orders -->
    <div class="bg-gray-900 p-6 rounded-xl shadow">
        <h2 class="text-xl font-semibold text-gray-200 mb-4">Recently Orders</h2>
        <ul class="divide-y divide-gray-200">
            <li class="py-4 flex justify-between items-center">
                <div>
                    <p class="font-medium text-gray-100">John Doe</p>
                    <p class="text-gray-400 text-sm">Product: iPhone 15</p>
                </div>
                <div class="text-right">
                    <p class="text-gray-100 font-semibold">$1200</p>
                    <span class="px-2 py-1 rounded-full text-xs font-medium bg-green-400 text-green-900">Completed</span>
                </div>
            </li>
            <li class="py-4 flex justify-between items-center">
                <div>
                    <p class="font-medium text-gray-100">Jane Smith</p>
                    <p class="text-gray-400 text-sm">Product: MacBook Pro</p>
                </div>
                <div class="text-right">
                    <p class="text-gray-100 font-semibold">$2500</p>
                    <span class="px-2 py-1 rounded-full text-xs font-medium bg-red-400 text-yellow-900">Pending</span>
                </div>
            </li>
            <li class="py-4 flex justify-between items-center">
                <div>
                    <p class="font-medium text-gray-100">Bob Johnson</p>
                    <p class="text-gray-400 text-sm">Product: Laptop Stand</p>
                </div>
                <div class="text-right">
                    <p class="text-gray-100 font-semibold">$49.99</p>
                    <span class="px-2 py-1 rounded-full text-xs font-medium bg-green-400 text-green-900">Completed</span>
                </div>
            </li>
            <li class="py-4 flex justify-between items-center">
                <div>
                    <p class="font-medium text-gray-100">Alice Williams</p>
                    <p class="text-gray-400 text-sm">Product: USB-C Cable</p>
                </div>
                <div class="text-right">
                    <p class="text-gray-100 font-semibold">$19.99</p>
                    <span class="px-2 py-1 rounded-full text-xs font-medium bg-blue-400 text-green-900">Processing</span>
                </div>
            </li>
            <li class="py-4 flex justify-between items-center">
                <div>
                    <p class="font-medium text-gray-100">Charlie Brown</p>
                    <p class="text-gray-400 text-sm">Product: Keyboard</p>
                </div>
                <div class="text-right">
                    <p class="text-gray-100 font-semibold">$89.99</p>
                    <span class="px-2 py-1 rounded-full text-xs font-medium bg-green-400 text-green-900">Completed</span>
                </div>
            </li>
            <!-- Add more orders here -->
        </ul>
    </div>

    <!-- Top Products -->
    <div class="bg-gray-900 p-6 rounded-xl shadow">
        <h2 class="text-xl font-semibold text-gray-100 mb-4">Top Products</h2>
        <ul class="divide-y divide-gray-200">
            <li class="py-4 flex justify-between items-center">
                <div>
                    <p class="font-medium text-gray-100">iPhone 15</p>
                    <p class="text-gray-400 text-sm">Units Sold: 2150</p>
                </div>
                <div class="text-right">
                    <p class="text-gray-100 font-semibold">$180,000</p>
                </div>
            </li>
            <li class="py-4 flex justify-between items-center">
                <div>
                    <p class="font-medium text-gray-100">MacBook Pro</p>
                    <p class="text-gray-400 text-sm">Units Sold: 1360</p>
                </div>
                <div class="text-right">
                    <p class="text-gray-100 font-semibold">$150,000</p>
                </div>
            </li>
              <li class="py-4 flex justify-between items-center">
                <div>
                    <p class="font-medium text-gray-100">Smart Watch</p>
                    <p class="text-gray-400 text-sm">Units Sold: 946</p>
                </div>
                <div class="text-right">
                    <p class="text-gray-100 font-semibold">$296,003.00</p>
                </div>
            </li>
              <li class="py-4 flex justify-between items-center">
                <div>
                    <p class="font-medium text-gray-100">USB-C Hub</p>
                    <p class="text-gray-400 text-sm">Units Sold: 743</p>
                </div>
                <div class="text-right">
                    <p class="text-gray-100 font-semibold">$51,901.00</p>
                </div>
            </li>
              <li class="py-4 flex justify-between items-center">
                <div>
                    <p class="font-medium text-gray-100">Mechanical Keyboard</p>
                    <p class="text-gray-400 text-sm">Units Sold: 621</p>
                </div>
                <div class="text-right">
                    <p class="text-gray-100 font-semibold">$55,890.00</p>
                </div>
            </li>
            <!-- Add more top products here -->
        </ul>
    </div>
</div>
        </main>
   
   
    </div>
    


</x-app-layout>