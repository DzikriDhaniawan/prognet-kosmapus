// Example JavaScript functionality
document.addEventListener('DOMContentLoaded', function() {
    // Add event listener to the login button
    const loginButton = document.querySelector('.login-button');
    loginButton.addEventListener('click', function() {
        // Example functionality: open a modal or redirect to a login page
        alert('Login button clicked!');
    });

    // Add event listeners to the university buttons
    const universityButtons = document.querySelectorAll('.button-grid a');
    universityButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            // Example functionality: open a new page with university details
            alert(`You clicked on ${button.textContent}!`);
        });
    });

    // Add event listeners to the area buttons
    const areaButtons = document.querySelectorAll('.button-grid a');
    areaButtons.forEach(function(button, index) {
        if (index >= 9) {
            button.addEventListener('click', function() {
                // Example functionality: open a new page with area details
                alert(`You clicked on ${button.textContent}!`);
            });
        }
    });
});