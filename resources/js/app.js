import './bootstrap';

import Alpine from 'alpinejs';


window.Alpine = Alpine;

Alpine.start();
  
// grab everything we need
const btn = document.querySelector(".mobile-menu-button");
const sidebar = document.querySelector(".sidebar");
let isSidebarOpen = false;

// add our event listener for the click
btn.addEventListener("click", () => {
  sidebar.classList.toggle("-translate-x-full");
});

// close sidebar if user clicks outside of the sidebar
document.addEventListener("click", (event) => {
  const isButtonClick = btn === event.target && btn.contains(event.target);
  const isOutsideClick =
    sidebar !== event.target && !sidebar.contains(event.target);

  // bail out if sidebar isnt open
  if (sidebar.classList.contains("-translate-x-full")) return;

  // if the user clicks the button, then toggle the class
  if (isButtonClick) {
    console.log("does not contain");
    sidebar.classList.toggle("-translate-x-full");
    return;
  }

  // check to see if user clicks outside the sidebar
  if (!isButtonClick && isOutsideClick) {
    console.log("outside click");
    sidebar.classList.add("-translate-x-full");
    return;
  }
});

// Graphs


// Add this JavaScript code within your <script> tags or in a separate .js file.
document.addEventListener('DOMContentLoaded', () => {
    // Get references to the modal and overlay
    const successModal = document.getElementById('successModal');
    const modalOverlay = document.querySelector('.modal-overlay');

    // Check if the success message is present in the session
    const successMessage = "{{ session('success') }}";
    if (successMessage) {
        // Show the modal
        successModal.classList.remove('hidden');

        // Close the modal when the overlay or window is clicked
        modalOverlay.addEventListener('click', closeModal);
        window.addEventListener('click', closeModal);

        // Prevent clicks inside the modal from closing it
        successModal.addEventListener('click', (e) => {
            e.stopPropagation(); // Prevent click event from bubbling to window/overlay
        });
    }

    // Function to close the modal
    function closeModal() {
        successModal.classList.add('hidden');
        modalOverlay.removeEventListener('click', closeModal);
        window.removeEventListener('click', closeModal);
    }
});


