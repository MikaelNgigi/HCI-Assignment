const header=document.querySelector("header");
const sectionOne=document.querySelector("#home");
const sectionOneOptions={
  rootMargin:'-550px 0px 0px 0px'
};

const sectionOneObserver= new IntersectionObserver
(function(
    entries,
    sectionOneObserver
  ){
    entries.forEach(entry => {
      if(!entry.isIntersecting){
        header.classList.add("nav-scrolled");
      }else{
        header.classList.remove("nav-scrolled");
      }
    });
  },
sectionOneOptions);
sectionOneObserver.observe(sectionOne);

// sliders js plugin

$(document).ready(function () {
  $(".testimonial-carousel").owlCarousel({
    items: 1,
    itemsDesktop: [1000, 1],
    itemsDesktopSmall: [980, 1],
    itemsTablet: [768, 1],
    itemsMobile: [650, 1],
    pagination: true,
    navigation: false,
    slideSpeed: 100,
    autoPlay: true
  });
  
});$(document).ready(function () {
  $(".manufacturers").owlCarousel({
    items: 5,
    itemsTablet: [768, 2],
    itemsMobile: [650, 1],
    pagination: false,
    navigation: false,
    slideSpeed: 100,
    autoPlay: true,
    autoplayHoverPause:true,
    loop:true
  });
  
});


