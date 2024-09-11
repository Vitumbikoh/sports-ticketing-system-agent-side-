<x-app-layout>
    <div class="relative min-h-screen md:flex">
        <!-- sidebar -->
        <div class="sidebar bg-blue-800 text-blue-100 w-64 h-65 py-9 px-4 absolute inset-y-0 left-0 transform -translate-x-full md:relative md:translate-x-0 transition duration-200 ease-in-out">
            <!-- nav -->
            <nav>
                <div class="block py-2.5 px-4 rounded transition text-center duration-200 hover:bg-blue-700 hover:text-white">
                    <h1 class="text-30px"><i class="fas fa-home mr-2"></i>Dashboard</h1>
                </div>
                <section class="p-menu1 py-1">
                    <nav id="navbar" class="navigation" role="navigation">
                        <input id="toggle1" type="checkbox" />
                        <label class="hamburger1 relative" for="toggle1">
                            <i class="fas fa-arrow-down absolute left-12 top-5 transform -translate-y-1/3 text-white text-3xl" style="height: 2rem;"></i>
                            <div class="top"></div>
                            <div class="meat"></div>
                            <div class="bottom"></div>
                        </label>
                        <h1 id="all-sports" class="block py-3 px-4 text-2xl rounded text-center transition duration-200 hover:bg-blue-700 hover:text-white">
                            All Sports
                        </h1>
                        <nav class="menu1">
                            <a class="link1" href="{{ ('/volleyball') }}"><i class="fas fa-volleyball-ball mr-2"></i>Volleyball</a>
                            <a class="lin1" href="{{ ('/basketball') }}"><i class="fas fa-basketball-ball mr-2"></i>Basketball</a>
                            <a class="link1" href="{{ ('/tennis') }}"><i class="fas fa-futbol mr-2"></i>Tennis</a>
                            <a class="link1" href="{{ ('/hockey') }}"><i class="fas fa-hockey-puck mr-2"></i>Hockey</a>
                        </nav>
                    </nav>
                </section>
                <a href="{{ ('/football') }}" class="block py-2.5 px-4 rounded text-center transition duration-200 hover:bg-blue-700 hover:text-white"><i class="fas fa-futbol mr-2"></i>
                    Football
                </a>
                <a href="{{ ('/netball') }}" class="block py-2.5 px-4 rounded transition text-center duration-200 hover:bg-blue-700 hover:text-white"><i class="fas fa-futbol mr-2"></i>
                    Netball
                </a>
                <a href="{{ ('/basketball') }}" class="block py-2.5 px-4 rounded transition text-center duration-200 hover:bg-blue-700 hover:text-white"><i class="fas fa-hockey-puck mr-2"></i>
                    Basketball
                </a>
            </nav>
        </div>

        <!-- content -->
        <div class="flex-1 p-10 text-2xl font-bold">
            <h2 class="text-xl font-semibold mb-4">Dashboard Overview</h2>
            <!-- Cards Container -->
            <div class="flex flex-wrap -mx-2">
                <!-- Sample Card 1 -->
                <div class="bg-blue-100 p-4 rounded-md shadow-md mb-4 w-full md:w-1/2 lg:w-1/3 px-2">
                    <div class="flex items-center mb-2">
                        <div class="bg-blue-500 text-white rounded-full p-2 mr-2">
                            <i class="fas fa-users"></i>
                        </div>
                        <h3 class="text-lg font-semibold">Total Tickets</h3>
                    </div>
                    <p class="text-gray-600">5000</p>
                </div>
                <!-- Sample Card 2 -->
                <div class="bg-green-100 p-4 rounded-md shadow-md mb-4 w-full md:w-1/2 lg:w-1/3 px-2">
                    <div class="flex items-center mb-2">
                        <div class="bg-green-500 text-white rounded-full p-2 mr-2">
                            <i class="fas fa-users"></i>
                        </div>
                        <h3 class="text-lg font-semibold">Tickets Remaining</h3>
                    </div>
                    <p class="text-gray-600">Number: {{ $subCount }}</p>
                </div>
                <!-- Sample Card 3 -->
                <div class="bg-yellow-100 p-4 rounded-md shadow-md mb-4 w-full md:w-1/2 lg:w-1/3 px-2">
                    <div class="flex items-center mb-2">
                        <div class="bg-yellow-500 text-white rounded-full p-2 mr-2">
                            <i class="fas fa-users"></i>
                        </div>
                        <h3 class="text-lg font-semibold">Tickets Sold</h3>
                    </div>
                    <p class="text-gray-600">Number: {{ $totalCount }}</p>
                </div>
            </div>
            <div class="bg-gray-300 p-4 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold mb-2">Monthly Ticket Sales</h3>
                <canvas id="graph" style="max-height: 300px;"></canvas>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

            <script>
                // Sample data for the 12 months
                const labels = [
                    'January', 'February', 'March', 'April', 'May', 'June',
                    'July', 'August', 'September', 'October', 'November', 'December'
                ];

                // Sample data for ticket counts for each month
                const ticketCounts = [100, 150, 200, 180, 220, 300, 250, 280, 320, 310, 280, 260];

                const graphData = {
                    labels: labels,
                    datasets: [{
                        label: 'Tickets Sold',
                        data: ticketCounts,
                        backgroundColor: 'rgba(54, 162, 235, 0.5)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1,
                    }],
                };

                window.addEventListener('DOMContentLoaded', () => {
                    const ctx = document.getElementById('graph').getContext('2d');
                    const myChart = new Chart(ctx, {
                        type: 'bar',
                        data: graphData,
                        options: {
                            responsive: true,
                            maintainAspectRatio: false,
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    });
                });
            </script>
        </div>
    </div>
</x-app-layout>
