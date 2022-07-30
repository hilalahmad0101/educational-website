$(document).ready(function () {
  const owl = $(".top__offer__right__carousel");
  owl.owlCarousel({
    loop: true,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    dots: false,
    nav: false,
    stagePadding: -5,
    responsiveBaseElement: "body",
    responsive: {
      0: {
        items: 3,
      },
      700: {
        items: 4,
      },
      1220: {
        items: 6,
      },
    },
  });
  const testimonial = $(".testimonial__carousel");
  testimonial.owlCarousel({
    loop: true,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    nav: false,
    responsive: {
      0: {
        items: 1,
      },
      700: {
        items: 1,
      },
      1220: {
        items: 1,
      },
    },
  });

  $("#next__button__offer").click(function () {
    owl.trigger("next.owl.carousel");
  });
  $("#customPrevBtn").click(function () {
    owl.trigger("prev.owl.carousel", [300]);
  });
  $("#left__testimonial").click(function () {
    owl.trigger("next.owl.carousel");
  });
  $("#right__testimonial").click(function () {
    owl.trigger("prev.owl.carousel", [300]);
  });

  const showNavbarBtn = document.querySelector("#show__navbar");
  const navbar = document.querySelector(".navbar__right_side");
  showNavbarBtn.addEventListener("click", function () {
    navbar.classList.toggle("active__navbar");
  });
});
