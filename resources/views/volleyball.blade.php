<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
  <div class="relative min-h-screen md:flex">

  <!-- mobile menu bar -->

  <div class="bg-gray-800 text-gray-100 flex justify-between md:hidden py-5">
            <!-- Wrap the logo image in an anchor element -->
            <a href="{{ route('dashboard') }}">
                <img src="/images/logo.png" alt="Logo" class="block h-12 w-15">
            </a>

            <a href="{{ route('dashboard') }}" class="block p-4 text-white font-bold">Volleyball</a>
            <!-- mobile menu button -->
            <button class="mobile-menu-button p-4 focus:outline-none focus:bg-gray-700">
                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>

        <!-- mobile menu content -->
        <div id="mobile-menu-content" class="md:hidden hidden bg-gray-800 text-gray-100 absolute top-16 left-0 w-full p-4">
    <!-- Your mobile menu links go here -->
    <a class="link1 block py-2 text-white" href="{{ ('/dashboard') }}">All Sports </a>
    <a class="link1 block py-2 text-white" href="{{ ('/football') }}"><i class="fas fa-futbol mr-2"></i>Football</a>
    <a class="link1 block py-2 text-white" href="{{ ('/football') }}"><i class="fas fa-volleyball-ball mr-2"></i>Volleyball</a>
    <a class="link1 block py-2 text-white" href="{{ ('/football') }}"><i class="fas fa-hockey-puck mr-2"></i>Hockey</a>
    <a class="link1 block py-2 text-white" href="{{ ('/football') }}"><i class="fas fa-basketball-ball mr-2"></i>Basketball</a>
    <a class="link1 block py-2 text-white" href="{{ ('/tennis') }}"><i class="fas fa-table-tennis mr-2"></i>Tennis</a>
    <a class="link1 block py-2 text-white" href="{{ ('/netball') }}"><i class="fas fa-basketball-ball mr-2"></i>Netball</a>

    <!-- Add more links as needed -->
</div>


                                                              
    <!-- sidebar -->
    <div class="sidebar bg-blue-800 text-blue-100 w-64 h-65  py-9 px-4 absolute inset-y-0 left-0 transform -translate-x-full md:relative md:translate-x-0 transition duration-200 ease-in-out">

    <!-- nav -->
      <nav> 
        <div class="block py-1 px-4 rounded transition text-center duration-200 hover:bg-blue-700 hover:text-white">
          <!-- Wrap the logo image in an anchor element -->
          <a href="{{ route('dashboard') }}">
              <img src="/images/logo.png" alt="Logo" class="block p-4 h-35 w-35">
          </a>
        </div>
        
        <div class="block py-2.5 px-4 rounded transition text-center duration-200 hover:bg-blue-700 hover:text-white">
          <h1 class="text-30px">Volleyball</h1>
        </div>

      <section class="p-menu1 py-1">
        <nav id="navbar" class="navigation" role="navigation">
          <input id="toggle1" type="checkbox" />
          <label class="hamburger1 relative" for="toggle1">
          <i class="fas fa-arrow-down absolute left-8 top-5 transform -translate-y-1/3 text-white text-3xl" style="height: 2rem;"></i>
          <div class="top"></div>
          <div class="meat"></div>
          <div class="bottom"></div>
      </label>

          <h3 id="all-sports" class="block py-1 px-4 rounded text-center transition duration-200 hover:bg-blue-700 hover:text-white">
            All Sports
          </h3>
          <nav class="menu1">
            <a class="link1" href="{{ ('/football') }}"><i class="fas fa-futbol mr-2"></i>Football</a>
            <a class="link1" href="{{ ('/volleyball') }}"><i class="fas fa-volleyball-ball mr-2"></i>Volleyball</a>
            <a class="link1" href="{{ ('/hockey') }}"><i class="fas fa-hockey-puck mr-2"></i>Hockey</a>
            <a class="lin1" href="{{ ('/basketball') }}"><i class="fas fa-basketball-ball mr-2"></i>Basketball</a>
            <a class="link1" href="{{ ('/tennis') }}">Tennis</a>
            <a class="link1" href="{{ ('/netball') }}">Netball</a>
            <a class="link1" href="{{ ('/hockey') }}"><i class="fas fa-hockey-puck mr-2"></i>Hockey</a>
            <a class="lin1" href="{{ ('/basketball') }}">Basketball</a>
          </nav>
        </nav>
    </section>
    

      <a href="{{ ('/tennis') }}" class="block py-2.5 px-4 rounded text-center transition duration-200 hover:bg-blue-700 hover:text-white"><i class="fas fa-futbol mr-2"></i>
        Tennis
      </a>
      <a href="{{ ('/netball') }}" class="block py-2.5 px-4 rounded transition text-center duration-200 hover:bg-blue-700 hover:text-white"><i class="fas fa-futbol mr-2"></i>
        Netball
      </a>
      <a href="{{ ('/hockey') }}" class="block py-2.5 px-4 rounded transition text-center duration-200 hover:bg-blue-700 hover:text-white"><i class="fas fa-hockey-puck mr-2"></i>
        Hockey
      </a>
    </nav>
  </div>

    
    <div class="p-8 text-center flex justify-center items-center w-full">
            <div class="p-1">
                <h1 class="text-center text-xl text-gray-700 font-semibold">CUSTOMER DETAILS</h1>

                <div class="w-full mx-5  py-8 my-4 px-2 shadow-xl rounded-xl flex justify-center bg-gray-200">
                    <form class="space-y-4" action="{{ route('volleyball.store') }}" method="POST">
                        @csrf

                        <div class="flex justify-between items-center">
                            <label for="firstname" class="block font-medium px-1">First Name<span class="text-red-500">*</span></label>
                            <input type="text" id="firstname" name="firstname" class="flex-1 rounded-lg border px-3 py-2" required>
                        </div>

                        <div class="flex justify-between items-center">
                            <label for="lastname" class="block font-medium px-1">Last Name<span class="text-red-500">*</span></label>
                            <input type="text" id="lastname" name="lastname" class="flex-1 rounded-lg border px-3 py-2" required>
                        </div>


                        <div class="flex justify-between items-center ">
                            <label for="league" class="block font-medium px-5">  League</label>
                            <select id="league" name="league" class="flex-1 rounded-lg border px-4 py-2">
                                <option value="Super League">Super League</option>
                                <option value="Airtel Top *">Airtel Top *</option>
                                <option value="Chipiku">Chipiku</option>
                            </select>
                        </div>

                        <div class="flex justify-between items-center">
                            <label for="game" class="block font-medium px-6">Game</label>
                            <select id="team1" name="team1" class="flex-1 rounded-lg border px-3 py-2">
                              <option value="big bullets ">MUST Queens</option>
                              <option value="Silver Striker">Silver Striker</option>
                              <option value="Mighty Wanderers">Mighty Wanderers</option>
                            </select>
                            <label for="team2" class="block font-medium">VS</label>
                            <select id="team2" name="team2" class="flex-1 rounded-lg border px-3 py-2">
                              <option value="big bullets ">POLY Queens</option>
                              <option value="Silver Striker">Silver Striker</option>
                              <option value="Mighty Wanderers">Mighty Wanderers</option>
                            </select>

                        </div>

                        <div class="flex justify-between items-center ">
                            <label for="standname" class="block font-medium px-1">Stand Name</label>
                            <select id="standname" name="standname" class="flex-1 rounded-lg border px-3 py-2">
                                <option value="VVIP">VVIP</option>
                                <option value="VIP">VIP</option>
                                <option value="Covered Stand">Covered Stand</option>
                                <option value="Open Stand">Open Stand</option>
                            </select>
                        </div>

                        <div class="flex justify-between items-center">
                            <label for="standnumber" class="block font-medium">Seat Number</label>
                            <select id="standnumber" name="standnumber" class="flex-1 rounded-lg border px-3 py-2">
                                <option value="Seat 1">Seat 1</option>
                                <option value="Seat 2">Seat 2</option>
                                <option value="Seat 3">Seat 3</option>
                            </select>
                        </div>

                        <div class="flex justify-between">
                            <button type="button" class="bg-gray-300 text-gray-700 py-2 px-4 rounded" onclick="clearForm()">Cancel</button>
                            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Submit</button>
                        </div>

                        @if(session('success'))
                        <!-- Modal for Success Message -->
                        <!-- Modal for Success Message -->
<div id="successModal" class="fixed inset-0 flex items-center justify-center hidden">
    <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>
    <div class="modal-container bg-white w-64 mx-auto rounded shadow-lg z-50 overflow-y-auto">
        <!-- Modal content -->
        <div class="modal-content text-left p-4">
            <!-- Success Message -->
            <div class="bg-green-200 p-3 rounded">
                Thank you for buying a ticket with us.
            </div>
        </div>
    </div>
</div>



                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
  </div>

 <script>

        function clearForm() {
        // Get a reference to the form element
        const form = document.querySelector('form');

        // Reset the form to its initial state
        form.reset();
    }

        document.addEventListener('DOMContentLoaded', () => {
            // Get references to the mobile menu button and the mobile menu content
            const mobileMenuButton = document.querySelector('.mobile-menu-button');
            const mobileMenuContent = document.getElementById('mobile-menu-content');

            // Add a click event listener to the mobile menu button
            mobileMenuButton.addEventListener('click', () => {
                // Toggle the visibility of the mobile menu content
                mobileMenuContent.classList.toggle('hidden');
            });
        });
    </script>
</body>
</html>




  