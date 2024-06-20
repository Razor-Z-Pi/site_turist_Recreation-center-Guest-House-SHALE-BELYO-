let index = 1;
showSlides(index);

// Вперед/назад элементы управления
function plusSlides(n) {
    showSlides(index += n);
}

// Элементы управления миниатюрами изображений
function currentSlide(n) {
    showSlides(index = n);
}

function showSlides(n) {
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");

    if (n > slides.length) index = 1;
    if (n < 1) index = slides.length;

    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (let i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[index - 1].style.display = "block";
    dots[index - 1].className += " active";
}