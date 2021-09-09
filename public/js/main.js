/*===== HOME PAGE ANIMATION =====*/
/*========== ============ =======*/
// VARIABLE
const navMenu = document.getElementById("nav-menu"),
  toggleMenu = document.getElementById("nav-toggle"),
  closeMenu = document.getElementById("nav-close");


var curPage = 1;
var numOfPages = document.querySelector(".page") + length;
var animTime = 1500;
var scrolling = false;
var pgPrefix = ".page-";
// MAIN

// show function
toggleMenu.addEventListener("click", (e) => {
  navMenu.classList.add("show");
});
closeMenu.addEventListener("click", (e) => {
  navMenu.classList.remove("show");
});

// MOUSSLOVE
document.addEventListener("mousemove", move);

function move(e) {
  this.querySelectorAll(".move").forEach((layer) => {
    const speed = layer.getAttribute("data-speed");

    const x = (window.innerWidth - e.pageX * speed) / 120;
    const y = (window.innerHeight - e.pageY * speed) / 120;

    layer.style.transform = `translateX(${x}px) translateY(${y}px)`;
  });
}


/*===== LOADING ANIMATION HOME PAGE =====*/
//OVERLAY
TweenMax.to(".first", 1.5, {
  delay: 2.2,
  top: "-170%",
  ease: Expo.easeInOut,
});
TweenMax.to(".second-th", 1.5, {
  delay: 2.2,
  top: "-170%",
  ease: Expo.easeInOut,
});
TweenMax.to(".third", 1.5, {
  delay: 2.2,
  top: "-170%",
  ease: Expo.easeInOut,
});
TweenMax.to(".fourth", 1.5, {
  delay: 2.2,
  top: "-170%",
  ease: Expo.easeInOut,
});


/*===== GSAP ANIMATION HOME PAGE =====*/
// NAV
gsap.from(".nav-item", {
  opacity: 0,
  duration: 1,
  delay: 1.5,
  y: 30,
  stagger: 0.2,
});

// HOME
gsap.from(".home-paragraphe", {
  opacity: 0,
  duration: 1,
  delay: 1.5,
  y: 30
});
gsap.from(".home-button", {
  opacity: 0,
  duration: 1,
  delay: 1.6,
  y: 30
});
gsap.from(".home-img", {
  opacity: 0,
  duration: 1,
  delay: 1.4,
  y: 30
});

/*===== GSAP ANIMATION INDEXARTICLE PAGE =====*/

gsap.from(".card", {
  opacity: 0,
  duration: 1,
  delay: 1.5,
  y: 30
});
gsap.from(".body-card", {
  opacity: 0,
  duration: 1,
  delay: 1.6,
  y: 30
});
gsap.from(".imag-card-wine", {
  opacity: 0,
  duration: 1,
  delay: 1.4,
  y: 30
});

/*===== GSAP ANIMATION SHOWARTICLE PAGE =====*/
gsap.from(".img-cardWine", {
  opacity: 0,
  duration: 1,
  delay: 1.2,
  x: -50
});

/*===== FORM LOGIN  =====*/
/*===== ==========  =====*/


// FORM
function initAcc(elem, option) {
  document.addEventListener('click', function (e) {
    if (!e.target.matches(elem + ' .a-btn')) return;
    else {
      if (!e.target.parentElement.classList.contains('active')) {
        if (option == true) {
          var elementList = document.querySelectorAll(elem + ' .a-container');
          Array.prototype.forEach.call(elementList, function (e) {
            e.classList.remove('active');
          });
        }
        e.target.parentElement.classList.add('active');
      } else {
        e.target.parentElement.classList.remove('active');
      }
    }
  });
}

initAcc('.accordion.v1', true);
initAcc('.accordion.v2', false);
/* ====== CARD USER ADMIN ANIMATION =======*/
/*========= =========== ============*/
// Flip card to the back side

const btnDetails = document.getElementById('details-card'),
  cardAdmin = document.querySelector('.card-admin'),
  backCard = document.querySelector('.back');

btnDetails.addEventListener("click", () => {
  cardAdmin.classList.toggle("rotate");
  backCard.style.display = "block";

  gsap.from(".a", {
    opacity: 0,
    duration: 1,
    delay: 0.7,
    y: 30
  });
  gsap.from(".b", {
    opacity: 0,
    duration: 1,
    delay: 0.8,
    y: 30
  });
  gsap.from(".c", {
    opacity: 0,
    duration: 1,
    delay: 0.9,
    y: 30
  });
  gsap.from(".d", {
    opacity: 0,
    duration: 1,
    delay: 1,
    y: 30
  });
});

// Flip card back to the front side
$("#flip-back").click(function () {
  $(".card-admin").removeClass("rotate");

  setTimeout(function () {
    $(".back").hide();
    setTimeout(function () {
      $(".front").show();
    }, 400);
  }, 400);

  gsap.from("#details", {
    opacity: 0,
    duration: 1,
    delay: 0.7,
    y: 30
  });
  gsap.from(".title", {
    opacity: 0,
    duration: 1,
    delay: 1,
    y: 30
  });
  gsap.from(".p", {
    opacity: 0,
    duration: 1,
    delay: 1.1,
    y: 30
  });
});


/* ====== ERROR MESSAGE IN LOGIN PAGE  =======*/
/*========= =========== ============*/
function deleteFlash(){
  console.log("deleteFlash");
  document.getElementById("flash").style.display = "none";
  
}
function deleteErrors(){
  console.log("deleteErrors");
  if (!document.cookie.indexOf('error')) {
    document.getElementById("general-error").style.display = "none";
  }
  
}
function distroyCookieBanner(){
  console.log("distroy");
  document.getElementById("container-cookie-banner").style.display = "none";
  
  
}

  





