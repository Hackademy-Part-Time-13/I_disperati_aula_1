// // javascript per la galleria immagini //
if (location.href.includes('http://127.0.0.1:8000/announcement/')) {
    let productImg = document.getElementById("productImg");
    let smallImg = document.getElementsByClassName("small-img");

    // // // richiama le immagini della galleria e le fa apparire nel riquadro grande al click del mouse
    smallImg[0].onclick = function () {
        productImg.src = smallImg[0].src;
    }

    smallImg[1].onclick = function () {
        productImg.src = smallImg[1].src;
    }

    smallImg[2].onclick = function () {
        productImg.src = smallImg[2].src;
    }

    smallImg[3].onclick = function () {
        productImg.src = smallImg[3].src;
    }
    // }

    // foreach(smallImg){
    //     smallImg[i].onclick = function () {
    //         productImg.src = smallImg[i].src;
    //     }
}
