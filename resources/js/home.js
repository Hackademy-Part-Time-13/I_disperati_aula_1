// Script per Cards Categorie nella welcome

const carousel = document.querySelector(".carousel-cards"),
firstImg = carousel.querySelectorAll("img")[0],
arrowIcons = document.querySelectorAll(".wrapper i");

let isDragStart = false, isDragging = false, prevPageX, prevScrollLeft, positionDiff;

const showHideIcons = () => {
// mostra e nasconde l'icona a seconda dello scroll del carosello
let scrollWidth = carousel.scrollWidth - carousel.clientWidth; // ottiene la larghezza massima scorrevole
arrowIcons[0].style.display = carousel.scrollLeft == 0 ? "none" : "block";
arrowIcons[1].style.display = carousel.scrollLeft == scrollWidth ? "none" : "block";
}

arrowIcons.forEach(icon => {
icon.addEventListener("click", () => {

let firstImgWidth = firstImg.clientWidth + 14; // prende la dimensione della prima immagine e aggiunge un valore di margine di 14

// se si clicca sull'icona sinistra, questa funzione riduce il valore della larghezza dallo scorrimento del carosello a sinistra, altrimenti lo aggiunge
carousel.scrollLeft += icon.id == "left" ? -firstImgWidth : firstImgWidth;

setTimeout(() => showHideIcons(), 60); // richiama questa funzione dopo 60ms
});

});


const autoSlide = () => {
// se non ci sono immagini da scorrere a sinistra, ritorna questa funzione
if (carousel.scrollLeft - (carousel.scrollWidth - carousel.clientWidth) > -1 || carousel.scrollLeft <= 0) return;


if (carousel.scrollLeft == 0) {
return (carousel.scrollLeft = 0)
}
if (carousel.scrollLeft == carousel.scrollWidth) {
return (carousel.scrollLeft = carousel.scrollWidth)
}


positionDiff = Math.abs(positionDiff); // rende il valore di positionDiff positivo
let firstImgWidth = firstImg.clientWidth + 14;
let imagesToScroll = Math.round(positionDiff / firstImgWidth);

// ottiene il valore della differenza che deve essere aggiunto o ridotto dal carosello a sinistra per portare l'immagine centrale
let varDifference = firstImgWidth - positionDiff;

varDifference = positionDiff > firstImgWidth ? firstImgWidth * imagesToScroll - positionDiff : firstImgWidth - positionDiff;

// se positionDiff è maggiore del 33 % della larghezza dell'immagine, aggiunge il valore della differenza allo scrollLeft, altrimenti lo riduce

// se l'utente scorre verso destra
if (carousel.scrollLeft > prevScrollLeft) {
return carousel.scrollLeft += positionDiff > firstImgWidth / 3 ? varDifference : -positionDiff;
}

//se l'utente scorre verso sinistra
carousel.scrollLeft -= positionDiff > firstImgWidth / 3 ? varDifference : -positionDiff;
}



// if (positionDiff > firstImgWidth / 3) {
// carousel.scrollLeft += VarDifference;
// } else {
// carousel.scrollLeft -= positionDiff;
// }




const dragStart = (e) => {
// aggiorna il valore delle variabili globali all'evento del click del mouse
isDragStart = true;
prevPageX = e.pageX || e.touches[0].pageX;
prevScrollLeft = carousel.scrollLeft;
}

const dragging = (e) => {
// permette lo scroll a sinistra a seconda della direzione dove punta il mouse
if (!isDragStart) return;
e.preventDefault();
isDragging = true;
carousel.classList.add("dragging");
positionDiff = (e.pageX || e.touches[0].pageX) - prevPageX;
carousel.scrollLeft = prevScrollLeft - positionDiff;
showHideIcons();
}

const dragStop = () => {
isDragStart = false;
carousel.classList.remove("dragging");

if (!isDragging) return;
isDragging = false;
autoSlide();
 }


// Da desktop
carousel.addEventListener("mousedown", dragStart);
carousel.addEventListener("mousemove", dragging);
carousel.addEventListener("mouseup", dragStop);
carousel.addEventListener("mouseleave", dragStop);

carousel.addEventListener("scroll", showHideIcons);

// Mobile Friendly
carousel.addEventListener("touchstart", dragStart);
carousel.addEventListener("touchmove", dragging);
carousel.addEventListener("touchend", dragStop);
