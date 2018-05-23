var activemenu = document.getElementsByClassName("is-active")[0];
if(activemenu !== null) {
    var element = activemenu.parentElement;
    if(element !== null){
        while(element !== null && element.className !== "sidebar") {
            element.classList.add("is-active");
            element = element.parentElement;
        }
    }
}
$(document).foundation();
var controller = new ScrollMagic.Controller();
var blockTween = new TweenMax.to(".animated_text",1.5,{backgroundColor:"rgba(255,0,0,1)"});
var outTween = new TweenMax.to(".animated_text",1.5,{backgroundColor:"rgba(255,0,0,0)"});
var scene = new ScrollMagic.Scene({
    triggerElement: ".animated_text",
    duration:400,
    triggerHook:1
})
.setTween(blockTween)
//.setTween(outTween)
.addIndicators()
.addTo(controller);
var outscene = new ScrollMagic.Scene({
    triggerElement:".animated_text",
    duration:400,
    triggerHook:0
})
.setTween(outTween)
.addIndicators()
.addTo(controller)