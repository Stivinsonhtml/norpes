document.addEventListener('DOMContentLoaded', function () {
    const smallImages = document.querySelectorAll('.small-image');
    const smallVideos = document.querySelectorAll('.small-video');
    let largeMedia = document.querySelector('.large-media'); // Usamos 'let' para poder modificarlo

    smallImages.forEach(image => {
        image.addEventListener('click', function () {
            // Asegúrate de que el elemento 'large-media' existe antes de modificarlo
            if (largeMedia) {
                largeMedia.src = this.src; // Cambia la fuente de la imagen grande
                // Remover borde seleccionado de otras imágenes y videos
                smallImages.forEach(img => img.classList.remove('selected'));
                smallVideos.forEach(vid => vid.classList.remove('selected'));
                // Añadir borde seleccionado a la imagen actual
                this.classList.add('selected');
            }
        });
    });

    smallVideos.forEach(video => {
        video.addEventListener('click', function () {
            // Asegúrate de que el elemento 'large-media' existe antes de modificarlo
            if (largeMedia) {
                largeMedia.outerHTML = `<video src="${this.src}" controls class="large-media img-fluid"></video>`; // Cambia la imagen grande a un video
                largeMedia = document.querySelector('.large-media'); // Actualiza la referencia
                // Remover borde seleccionado de otras imágenes y videos
                smallImages.forEach(img => img.classList.remove('selected'));
                smallVideos.forEach(vid => vid.classList.remove('selected'));
                // Añadir borde seleccionado al video actual
                this.classList.add('selected');
            }
        });
    });
});
