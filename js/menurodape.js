var menurodape = document.getElementById("rodapeMenu");
var menuhidden = document.getElementById("rodapeMenuHidden");
var clickmenu;

menurodape.addEventListener('click', function(){
    if(!clickmenu) {
        clickmenu = true;
        menuhidden.style.display = "block";
    } else {
        clickmenu = false;
        menuhidden.style.display = "none";
    }
    console.log(clickmenu);
});