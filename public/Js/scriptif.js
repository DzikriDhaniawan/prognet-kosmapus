// Add event listener to change photo button
document.getElementById('change-photo').addEventListener('click', function() {
    // Open file dialog to select new photo
    const fileInput = document.createElement('input');
    fileInput.type = 'file';
    fileInput.accept = 'image/*';
    fileInput.addEventListener('change', function() {
        const file = fileInput.files[0];
        const reader = new FileReader();
        reader.addEventListener('load', function() {
            const photo = document.querySelector('.photo img');
            photo.src = reader.result;
        });
        reader.readAsDataURL(file);
    });
    fileInput.click();
});

// Add event listener to cancel button
document.getElementById('cancel-button').addEventListener('click', function() {
    // Clear all form fields
    const formGroups = document.querySelectorAll('.form-group');
    formGroups.forEach(function(formGroup) {
        const input = formGroup.querySelector('input');
        const select = formGroup.querySelector('select');
        if (input) {
            input.value = '';
        }
        if (select) {
            select.selectedIndex = 0;
        }
    });
});

// Add event listener to save button
document.getElementById('save-button').addEventListener('click', function() {
    // Get all form fields
    const formGroups = document.querySelectorAll('.form-group');
    const formData = {};
    formGroups.forEach(function(formGroup) {
        const input = formGroup.querySelector('input');
        const select = formGroup.querySelector('select');
        if (input) {
            formData[input.id] = input.value;
        }
        if (select) {
            formData[select.id] = select.value;
        }
    });
    // Save form data to local storage
    localStorage.setItem('formData', JSON.stringify(formData));
    alert('Data saved successfully!');
});