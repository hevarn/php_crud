$(document).ready(function () {
  // Flip card to the back side
  $("#details").click(function () {
    $(".card").addClass("rotate");
    $(".back").show();
    gsap.from(".a", { opacity: 0, duration: 1, delay: 0.7, y: 30 });
    gsap.from(".b", { opacity: 0, duration: 1, delay: 0.8, y: 30 });
    gsap.from(".c", { opacity: 0, duration: 1, delay: 0.9, y: 30 });
    gsap.from(".d", { opacity: 0, duration: 1, delay: 1, y: 30 });
  });

  // Flip card back to the front side
  $("#flip-back").click(function () {
    $(".card").removeClass("rotate");

    setTimeout(function () {
      $(".back").hide();
      setTimeout(function () {
        $(".front").show();
      }, 400);
    }, 400);

    gsap.from("#details", { opacity: 0, duration: 1, delay: 0.7, y: 30 });
    gsap.from(".title", { opacity: 0, duration: 1, delay: 1, y: 30 });
    gsap.from(".p", { opacity: 0, duration: 1, delay: 1.1, y: 30 });
  });
});
