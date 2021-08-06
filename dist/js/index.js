window.onscroll = function () {
  scrollFunction();
};
var mybutton = document.getElementsByClassName('btn__top');

function scrollFunction() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    $('.btn__top').show();
  } else {
    $('.btn__top').hide();
  }
}

$('.btn__top').on('click', () => {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
});

$('.owl-carousel').owlCarousel({
  loop: true,
  nav: false,
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 1,
    },
    700: {
      items: 2,
    },
    1200: {
      items: 3,
    },
    1600: {
      items: 4,
    },
  },
});
