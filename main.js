$(document).ready(function ($) {
  "use strict";

  var team_slider = new Swiper(".katalog-slider", {
    slidesPerView: 3,
    spaceBetween: 30,
    loop: false,
    autoplay: {
      delay: 3000,
      disableOnInteraction: true,
    },
    speed: 2000,

    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      0: {
        slidesPerView: 1.2,
      },
      575: {
        slidesPerView: 2,
      },
      992: {
        slidesPerView: 3,
      },
      1200: {
        slidesPerView: 3,
      },
    },
  });

  var tanam_slider = new Swiper(".katalog-tanam-slider", {
    slidesPerView: 4,
    spaceBetween: 20,
    loop: false,
    autoplay: {
      delay: 3000,
      disableOnInteraction: true,
    },
    speed: 2000,

    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      0: {
        slidesPerView: 1.2,
      },
      575: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 3,
      },
      1200: {
        slidesPerView: 4,
      },
      1600: {
        slidesPerView: 5,
      },
    },
  });

  jQuery(".menu-toggle").click(function () {
    jQuery(".main-navigation").toggleClass("toggled");
  });

  jQuery(".header-menu ul li a").click(function () {
    jQuery(".main-navigation").removeClass("toggled");
  });

  gsap.registerPlugin(ScrollTrigger);

  var elementFirst = document.querySelector(".site-header");
  ScrollTrigger.create({
    trigger: "body",
    start: "30px top",
    end: "bottom bottom",

    onEnter: () => myFunction(),
    onLeaveBack: () => myFunction(),
  });

  function myFunction() {
    elementFirst.classList.toggle("sticky_head");
  }
});

jQuery(window).on("load", function () {
  $("body").removeClass("body-fixed");

  //activating tab of filter
  let targets = document.querySelectorAll(".filter");
  let activeTab = 0;
  let old = 0;
  let dur = 0.4;
  let animation;

  for (let i = 0; i < targets.length; i++) {
    targets[i].index = i;
    targets[i].addEventListener("click", moveBar);
  }

  // initial position on first === All
  gsap.set(".filter-active", {
    x: targets[0].offsetLeft,
    width: targets[0].offsetWidth,
  });

  function moveBar() {
    if (this.index != activeTab) {
      if (animation && animation.isActive()) {
        animation.progress(1);
      }
      animation = gsap.timeline({
        defaults: {
          duration: 0.4,
        },
      });
      old = activeTab;
      activeTab = this.index;
      animation.to(".filter-active", {
        x: targets[activeTab].offsetLeft,
        width: targets[activeTab].offsetWidth,
      });

      animation.to(
        targets[old],
        {
          color: "#0d0d25",
          ease: "none",
        },
        0
      );
      animation.to(
        targets[activeTab],
        {
          color: "#fff",
          ease: "none",
        },
        0
      );
    }
  }
});
