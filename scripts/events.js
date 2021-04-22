events = document.querySelector("#events");

window.onload = function () {
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "../private/events.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                events.innerHTML = data;
            }
        }
    }
    xhr.send();
};