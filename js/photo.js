function photoOpen(photo) {
    if (photo > -1) {
        let expandImg = document.getElementById("expandedImg");
        let image = document.getElementsByClassName("img_photo")[photo];
        
        // тот же src в развернутом изображении, что и изображение, нажатое на сетке
        expandImg.src = image.src;
        // Показать элемент контейнера (скрытый с помощью CSS)
        expandImg.parentElement.style.display = "block";
    }
}