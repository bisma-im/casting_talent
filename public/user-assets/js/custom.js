$('#testimonailSlider').owlCarousel({
    loop:true,
    margin:10,
    fade:true,
    nav:false,
    speed:3000,
    autoplay:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:1
        }
    }
})


$('#netflixSlider').owlCarousel({
    loop:true,
    margin:10,
    fade:true,
    nav:false,
    speed:3000,
    autoplay:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})






// gsap animation start
gsap.registerPlugin(ScrollTrigger, ScrollSmoother);


ScrollTrigger.normalizeScroll(true)

// create the smooth scroller FIRST!
let smoother = ScrollSmoother.create({
    smooth: 1,
    effects: true,
    normalizeScroll: true
});


