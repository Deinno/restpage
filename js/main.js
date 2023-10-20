
var see_more_btn = document.querySelectorAll(".m-see-more")


see_more_btn.forEach(function(button){
button.addEventListener("click", function() {
    var destiny = button.getAttribute("m-see-more")
    console.log("Destino:", destiny);
    window.location.href = "../details-dts-crepes.html";
});
});
    

