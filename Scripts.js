let anonucment = document.getElementById("Anouncment");
let title = document.getElementById("MainInfo");
let error = document.getElementById("ErrorInfo");
let button = document.getElementById("OkBtn");

function Show() {
    anonucment.classList.remove("Hidding");
}

function Information(Title) {
    Show();
    title.innerHTML = Title;
    error.innerHTML = "";

    button.onclick = function() {
        anonucment.classList.add("Hidding");
    };
}

function ErrorInfo(Title, Error) {
    Show();
    title.innerHTML = Title;
    error.innerHTML = Error;

    button.onclick = function() {
        anonucment.classList.add("Hidding");
    };
}