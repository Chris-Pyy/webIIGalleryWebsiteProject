
const imageAPI = "https://www.randyconnolly.com/funwebdev/3rd/api/travel/images.php";

document.addEventListener("DOMContentLoaded", () => {

    if (!JSON.parse(localStorage.getItem('images'))) {
        fetch(imageAPI)
            .then((response) => response.json())
            .then((images) => {
                localStorage.setItem('images', JSON.stringify(images));
            });
    }

});

function getImages() {
    return JSON.parse(localStorage.getItem('images'));
}