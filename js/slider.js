var imgs = [];
var slider;
var imgAtual;
var maxImg;


function preCarregamento() {
    var s = 1;

    for (var i = 0; i < 5; i++) {
        imgs[i] = new Image();
        imgs[i].src = "img/s" + s + ".jpg";
        s++;
    }
}

function carregarImg(img) {
    slider.style.backgroundImage = "url('" + imgs[img].src + "')";
}

function iniciar() {
    preCarregamento();
    imgAtual = imgs.length - 1;
    maxImg = imgs.length;
    slider = document.getElementById("slider");
    carregarImg(imgAtual);
}

function trocaImg() {
    imgAtual++;
    if (imgAtual > maxImg) {
        imgAtual = 0;
    }
    carregarImg(imgAtual);
}

window.addEventListener("load", iniciar);