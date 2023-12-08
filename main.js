(() => {
 //gsap.registerPlugin(ScrollTrigger, ScrollSmoother)

 //let smoother = ScrollSmoother.create({
  //wrapper :'.scrollSmooth-con',
  //contecnt: '.contentSmooth',
  //smooth: 2,
  //smoothTouch:0.1
 //})
 //const hambuger = document.querySelector("#Hambuger-menu");
 //const navMenu = document.querySelector(".nav-menu");
  //hambuger.addEventListener("click", () => {
  //hambuger.classList.toggle("active");
  //navMenu.classList.toggle("active");
  //});

   document.addEventListener("DOMContentLoaded", function () {
            const hamburger = document.getElementById("Hambuger-menu");
            const navMenu = document.querySelector(".nav-menu");
            hamburger.addEventListener("click", function () {
            hamburger.classList.toggle("active");
            navMenu.classList.toggle("active");
            });
    });
})();