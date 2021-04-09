foodbanks = document.querySelector("#foodbanks");


window.onload = function () {
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "../private/foodbanks.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                foodbanks.innerHTML = data;

            }
        }
    }
    xhr.send();
};