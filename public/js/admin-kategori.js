// Admin Kategori JavaScript

document.addEventListener('DOMContentLoaded', function() {
    // Photo preview functionality
    const photoInput = document.getElementById('photo');
    const photoPreview = document.getElementById('photo-preview');
    const previewImage = document.getElementById('preview-image');
    
    if (photoInput && photoPreview && previewImage) {
        photoInput.addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    previewImage.src = e.target.result;
                    photoPreview.classList.remove('hidden');
                };
                reader.readAsDataURL(file);
            } else {
                photoPreview.classList.add('hidden');
            }
        });
    }

    // Toggle switch functionality
    const toggleSwitch = document.querySelector('input[name="is_required"]');
    if (toggleSwitch) {
        const offText = toggleSwitch.parentElement.querySelector('.text-gray-500');
        const onText = toggleSwitch.parentElement.querySelector('.text-blue-600');

        function updateToggleText() {
            if (toggleSwitch.checked) {
                offText.classList.add('hidden');
                onText.classList.remove('hidden');
            } else {
                offText.classList.remove('hidden');
                onText.classList.add('hidden');
            }
        }

        toggleSwitch.addEventListener('change', updateToggleText);
        updateToggleText(); // Initial state
    }
});
