$('.owl-carousel').owlCarousel({
  autoplay: true,
  autoplayTimeout: 3000,
  autoplayHoverPause: true,
  loop: true,
  margin: 50,
  responsiveClass: true,
  nav: true,
  loop: false,
  stagePadding: 30,
  responsive: {
    0: {
      items: 2
    },
    568: {
      items: 3
    },
    600: {
      items: 5
    },
    1000: {
      items:8
    }
  }
})