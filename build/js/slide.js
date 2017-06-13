var idx = window.location.href;
var n = idx.search('#');
idx = parseInt(idx.substring(n+1));

var mySlide = setInterval(slide, 3000);

function slide() {
    idx++;
    if(document.querySelectorAll('section').length >= idx)
        window.location.href = window.location.pathname + "#" + idx;
    else clearInterval(mySlide);
}

document.getElementById('slide').onmousedown = function() {
    clearInterval(mySlide);
}
document.getElementById('slide').onmouseup = function() {
    mySlide = setInterval(slide, 3000);
}