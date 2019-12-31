const menu = document.getElementById('menutopo');

function scrollmenu() {
    let y = window.scrollY;

    if(y > 100) {
        menu.style.backgroundColor = "#363636";
    } else {
        menu.style.backgroundColor = "rgba(36,36,36,0.5)";
    }
};

window.addEventListener("scroll", scrollmenu);


