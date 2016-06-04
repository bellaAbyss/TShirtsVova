var images = ["bg1.jpg", "bg2.jpg", "bg3.jpg", "bg4.jpg", "bg5.jpg"];

$("div.section").each(function(index, item) {
    item.style.backgroundImage = getCurrentImageUrl(index);
});

var currentImage = 0;
var delay = 3000;

function getCurrentImageUrl(index) {
    return "url(\"../img/" + images[index] + "\")";
}

var timeout = setTimeout(function animate() {
    var activeSection = $("div.section.active");
    activeSection.css("background-image", getCurrentImageUrl(currentImage++));
    currentImage = currentImage > 4 ? 0 : currentImage;
    timeout = setTimeout(animate, delay);
}, delay);