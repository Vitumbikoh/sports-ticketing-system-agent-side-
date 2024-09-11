<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Web Page</title>
    <!-- Include Tailwind CSS -->
    
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body class="bg-gray-100 font-sans ">
<nav class="bg-blue-500 text-white p-4">
        <div class="container mx-auto flex items-center justify-between">
            <!-- Logo -->
            <a href="#" class="text-2xl font-semibold">Your Logo</a>
            
            <!-- Profile icon -->
            <div class="flex items-center space-x-4">
                <!-- Profile image (replace with your icon) -->
                <img src="profile-icon.png" alt="Profile" class="w-8 h-8 rounded-full">

                <!-- Profile name (replace with the user's name) -->
                <span class="text-sm font-medium">John Doe</span>
            </div>
        </div>
    </nav>


    <div class="flex">
    
    <!-- Left-side menu -->
    <div class="bg-gray-800 text-white h-screen w-1/4">
        <div class="p-4">
         
        <ul>
  <li><a href="#" class="block py-2 px-3 hover:bg-blue-700"><i class="fas fa-chart-bar"></i> Dashboard</a></li>
  <li><a href="#" class="block py-2 px-3 hover:bg-blue-700"><i class="fas fa-plus"></i> ADD FIXTURES</a></li>
  <li><a href="#" class="block py-2 px-3 hover:bg-blue-700"><i class="fas fa-plus"></i> ADD RESULTS</a></li>
  <li><a href="#" class="block py-2 px-3 hover-bg-blue-700"><i class="fas fa-bell"></i> NOTIFICATIONS</a></li>
  <li><a href="#" class="block py-2 px-3 hover:bg-blue-700"><i class="fas fa-envelope"></i> MESSAGES</a></li>
  <li><a href="#" class="block py-2 px-3 hover:bg-blue-700"><i class="fas fa-cog"></i> Settings</a></li>
</ul>

        </div>
    </div>

    <!-- Right-side content -->
<div class="w-3/4 p-8">
    <div>
   
    <div class="container mx-auto mt-8">
    <h1 class="text-2xl font-semibold mb-4">Upload A Sports Event</h1>
    <form method="POST" action="{{ route('addgame') }}" class="flex flex-wrap">
        @csrf <!-- CSRF protection -->

        <!-- Select Sport -->
        <div class="mb-4 w-full md:w-1/2 px-2">
            <label for="sport" class="block text-sm font-medium text-gray-700">Select Sport:</label>
            <select id="sport" name="sport" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-500" required>
                <option value="Football">Football</option>
                <option value="Netball">Netball</option>
                <option value="Basketball">Basketball</option>
            </select>
        </div>

        <!-- Select League -->
        <div class="mb-4 w-full md:w-1/2 px-2">
            <label for="league" class="block text-sm font-medium text-gray-700">Select League:</label>
            <select id="league" name="league" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-500" required>
                <!-- Options for leagues will be dynamically populated based on the selected sport -->
            </select>
        </div>

        <!-- Team Selection -->
        <div class="mb-4 w-full px-2">
            <label for="team1" class="block text-sm font-medium text-gray-700">Team 1:</label>
            <select id="team1" name="team1" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-500" required>
                <!-- Options for Team 1 will be dynamically populated based on the selected sport and league -->
            </select>
        </div>

        <div class="mb-4 w-full px-2">
            <label for="team2" class="block text-sm font-medium text-gray-700">Team 2:</label>
            <select id="team2" name="team2" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-500" required>
                <!-- Options for Team 2 will be dynamically populated based on the selected sport and league -->
            </select>
        </div>

        <!-- Venue Selection -->
        <div class="mb-4 w-full md:w-1/2 px-2">
            <label for="venue" class="block text-sm font-medium text-gray-700">Venue:</label>
            <select id="venue" name="venue" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-500" required>
                <option value="Stadium A">Bingu Stadium</option>
                <option value="Stadium B">Kamuzu Stadium B</option>
                <option value="Stadium C">Mzuzu Stadium</option>
                <!-- Add more options for different venues -->
            </select>
        </div>

        <!-- Date Selection -->
        <div class="mb-4 w-full md:w-1/2 px-2">
            <label for="match_date" class="block text-sm font-medium text-gray-700">Match Date:</label>
            <input type="date" id="match_date" name="match_date" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-500" required>
        </div>
        <div>
            <div id="popupMessage" class="hidden bg-white border text-green-700 px-4 py-2 rounded-md"></div>
        </div>

        <!-- Other match information fields here -->

        <div class="w-full px-2">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" submitButton>Submit</button>
        </div>
    </form>

    

</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Get the form element and add an event listener for form submission
        const form = document.querySelector('form');
        form.addEventListener('submit', function (event) {
            event.preventDefault(); // Prevent the default form submission

            // Show the pop-up message
            const popupMessage = document.getElementById('popupMessage');
            popupMessage.style.display = 'block';

            // Customize your message here
            const messageText = "Successfully Sent !!!!";
            popupMessage.textContent = messageText;

            // Hide the pop-up message after a certain time (e.g., 3 seconds)
            setTimeout(function () {
                popupMessage.style.display = 'none';

                // Submit the form programmatically
                form.submit(); // This line triggers the form submission
            }, 3000); // Adjust the time (in milliseconds) as needed
        });
    });
</script>
</div>
<!-- Dropdown to select the type of sport -->
<label for="sportFilter" class="block text-sm font-medium text-gray-700 mb-2">Select Sport:</label>
    <select id="sportFilter" class="px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-500">
        <option value="All">All</option>
        <option value="Football">Football</option>
        <option value="Netball">Netball</option>
        <option value="Basketball">Basketball</option>
    </select>

    <table class="min-w-full bg-white border rounded-lg overflow-hidden">
        <thead class="bg-gray-800 text-white">
            <tr class="border-b-2 border-blue-500">
                <th class="py-2 px-4">Date</th>
                <th class="py-2 px-4">Team 1</th>
                <th class="py-2 px-4"></th>
                <th class="py-2 px-4">Team 2</th>
                <th class="py-2 px-4">Venue</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody id="fixtureBody">
            @foreach ($allGames as $game)
            <tr class="sport-row" data-sport="{{ $game->sport }}">
                <td class="py-2 px-4 text-center">{{ $game->kick_off_time }}</td>
                <td class="py-2 px-4 text-center">{{ $game->team_1 }}</td>
                <td>VS</td>
                <td class="py-2 px-4 text-center">{{ $game->team_2 }}</td>
                <td class="py-2 px-4 text-center">{{ $game->Venue }}</td>
                <td class="py-2 px-4 text-center"><span class="mr-2"><a href="" class="text-blue-500">View</a></span> <span class="mr-2"><a href="" class="text-blue-500">Edit</a></span><span class="mr-2"><a href="" class="text-blue-500">Delete</a></span></td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <script>
        // JavaScript code to filter the table based on the selected sport
        const sportFilter = document.getElementById('sportFilter');
        const sportRows = document.querySelectorAll('.sport-row');

        sportFilter.addEventListener('change', () => {
            const selectedSport = sportFilter.value;

            sportRows.forEach(row => {
                if (selectedSport === 'All' || row.getAttribute('data-sport') === selectedSport) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });
    </script>



</div>
        </div>
    </div>
    </div>
    <script>
    // JavaScript to populate leagues and teams based on the selected sport
    const sportSelect = document.getElementById('sport');
    const leagueSelect = document.getElementById('league');
    const team1Select = document.getElementById('team1');
    const team2Select = document.getElementById('team2');

    // Define data for different sports
    const sportsData = {
        Football: {
            leagues: ['TNM Super League', 'FDH CUP',],
            teams: ['Silver Strikers', 'Chitipa United', 'Big Bullets','Mzuzu United']
        },
        Netball: {
            leagues: ['TNM Super League', 'Castel Trophy', 'Coca Cola Trophy'],
            teams: ['Blue Eagle Sisters', 'Civo Nets', 'Thunder Queens']
        },
        Basketball: {
            leagues: ['NBA', 'EuroLeague'],
            teams: ['LA Lackers', 'Miami Heat', 'Chicago Bulls','Golden State Warriors']
        }
    };

    // Function to populate the league select based on the selected sport
    function populateLeagues(selectedSport) {
        leagueSelect.innerHTML = '';
        const leagues = sportsData[selectedSport].leagues || [];
        leagues.forEach(league => {
            const option = document.createElement('option');
            option.value = league;
            option.textContent = league;
            leagueSelect.appendChild(option);
        });

        // Trigger change event to populate teams when the league select changes
        leagueSelect.dispatchEvent(new Event('change'));
    }

    // Function to populate teams based on the selected sport and league
    function populateTeams(selectedSport, selectedLeague) {
        const teams = (selectedSport && selectedLeague) ? sportsData[selectedSport].teams || [] : [];
        team1Select.innerHTML = '';
        team2Select.innerHTML = '';

        teams.forEach(team => {
            const option1 = document.createElement('option');
            option1.value = team;
            option1.textContent = team;

            const option2 = document.createElement('option');
            option2.value = team;
            option2.textContent = team;

            team1Select.appendChild(option1);
            team2Select.appendChild(option2);
        });
    }

    // Event listener for sport selection
    sportSelect.addEventListener('change', function () {
        const selectedSport = sportSelect.value;
        populateLeagues(selectedSport);
    });

    // Event listener for league selection
    leagueSelect.addEventListener('change', function () {
        const selectedSport = sportSelect.value;
        const selectedLeague = leagueSelect.value;
        populateTeams(selectedSport, selectedLeague);
    });

    // Initialize the form with the default values (e.g., Football)
    populateLeagues(sportSelect.value);
</script>

   
    
</body>
</html>
