    /* Bluring the welcome or login background image */
function blurbg(){
    document.getElementById("blur").style="filter: blur(6px); transition: 1s; transition-timing-function: ease-in-out;";
}
function bgnormal(){
    document.getElementById("blur").style="filter: none; transition: 1s; transition-timing-function: ease-in-out;";
}
// $(document).ready(function()
// {
//     $("#displayTable").on("click",function(){

//     })
// })

// l(document).on("click","a.scroll-to-top",function(e){var o=l(this);l("html, body").stop().animate({scrollTop:l(o.attr("href")).offset().top},1e3,"easeInOutExpo")
