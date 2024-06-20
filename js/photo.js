let image = document.querySelector(".img_photo");

image.addEventListener("click", function(e) {
    e.preventDefault();
    image.classList.toggle("show");
    image.classList.toggle("img_photo");
});