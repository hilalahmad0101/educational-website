$(document).ready(function () {
  const owl = $(".owl-carousel");
  owl.owlCarousel({
    loop: true,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    dots: false,
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

  $("#next__button__offer").click(function () {
    console.log("working");
    owl.trigger("next.owl.carousel");
  });
  $("#customPrevBtn").click(function () {
    owl.trigger("prev.owl.carousel", [300]);
  });
});
