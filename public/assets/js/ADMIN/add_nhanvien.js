const imgInput = document.getElementById('img_link');
const imgPreview = document.getElementById('preview');

imgInput.addEventListener('change', function(event) {
    const file = event.target.files[0];
    const reader = new FileReader();

    reader.onload = function() {
        imgPreview.src = reader.result;
        imgPreview.style.display = 'block';
    }

    if (file) {
        reader.readAsDataURL(file);
    } else {
        imgPreview.src = '#';
        imgPreview.style.display = 'none';
    }
});