const selectElement = document.getElementById('roleSelect');

selectElement.addEventListener('change', function() {
    if (this.value === '') {
        this.setCustomValidity('Please select a role.');
    } else {
        this.setCustomValidity('');
    }
});

$(document).ready(function() {
    $('#roleSelect').change(function() {
        if ($(this).val() === '') {
            $(this).addClass('invalid');
        } else {
            $(this).removeClass('invalid');
        }
    });
});

