var talwinElements = document.getElementsByClassName("talwin");

for (var i = 0; i < talwinElements.length; i++) {
    var talwin = talwinElements[i];

    if (talwin.textContent === "en attente") {
        talwin.style.color = "red";
    } else {
        talwin.style.color = "green";
    }
}



