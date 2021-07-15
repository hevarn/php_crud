
/*===== HOME PAGE ANIMATION =====*/ 
/*========== ============ =======*/
// VARIABLE
const navMenu = document.getElementById("nav-menu"),
  toggleMenu = document.getElementById("nav-toggle"),
  closeMenu = document.getElementById("nav-close");


  var curPage = 1;
  var numOfPages = document.querySelector(".page")+ length;
  var animTime = 1500;
  var scrolling = false;
  var pgPrefix = ".page-";
// MAIN


// show function
toggleMenu.addEventListener("click", (e) => {
 navMenu.classList.add('show');
});
closeMenu.addEventListener("click", (e) => {
 navMenu.classList.remove('show');
});

// MOUSSLOVE
document.addEventListener('mousemove', move);
function move(e){
    this.querySelectorAll('.move').forEach(layer =>{
        const speed = layer.getAttribute('data-speed')

        const x = (window.innerWidth - e.pageX*speed)/120
        const y = (window.innerHeight - e.pageY*speed)/120

        layer.style.transform = `translateX(${x}px) translateY(${y}px)`
    })
}

/*===== LOADING ANIMATION HOME PAGE =====*/ 
//OVERLAY
TweenMax.to(".first", 1.5, {
  delay: 2.2,
  top: "-100%",
  ease: Expo.easeInOut
});
TweenMax.to(".second-th", 1.5, {
  delay: 2.2,
  top: "-100%",
  ease: Expo.easeInOut
});
TweenMax.to(".third", 1.5, {
  delay: 2.2,
  top: "-100%",
  ease: Expo.easeInOut
});
/*===== LOADING CARD WINE SECTION =====*/ 
//OVERLAY
document.querySelectorAll('.goCave').forEach (goCave=>
  goCave.addEventListener('click', ()=> {
  
      TweenMax.to(".fourth", 1.5, {
         delay: 1,
         top: "-100%",
         ease: Expo.easeInOut
       });
       
       TweenMax.to(".fifth", 1.5, {
         delay: 1.1,
         top: "-100%",
         ease: Expo.easeInOut
       });
       
       TweenMax.to(".sixth", 1.5, {
         delay: 1.2,
         top: "-100%",
         ease: Expo.easeInOut
        });
    })
)



/*===== GSAP ANIMATION HOME PAGE =====*/
// NAV
gsap.from('.nav-item', {opacity: 0, duration: 1, delay: 1.5, y: 30, stagger: 0.2,})

// HOME
gsap.from('.home-paragraphe', {opacity: 0, duration: 1, delay:1.5, y: 30})
gsap.from('.home-button', {opacity: 0, duration: 1, delay:1.6, y: 30})
gsap.from('.home-img', {opacity: 0, duration: 1, delay:1.4, y: 30})

/*===== GSAP ANIMATION INDEXARTICLE PAGE =====*/

gsap.from('.card', {opacity: 0, duration: 1, delay:1.5, y: 30})
gsap.from('.body-card', {opacity: 0, duration: 1, delay:1.6, y: 30})
gsap.from('.imag-card-wine', {opacity: 0, duration: 1, delay:1.4, y: 30})

/*===== GSAP ANIMATION SHOWARTICLE PAGE =====*/
gsap.from('.img-cardWine', {opacity: 0, duration: 1, delay:1.2, x: -50})

/*===== FORM LOGIN  =====*/ 
/*===== ==========  =====*/ 
// MOUSSMOVE
document.addEventListener('mousemove', move);
function move(e){
    this.querySelectorAll('.move').forEach(layer =>{
        const speed = layer.getAttribute('data-speed')

        const x = (window.innerWidth - e.pageX*speed)/120
        const y = (window.innerHeight - e.pageY*speed)/120

        layer.style.transform = `translateX(${x}px) translateY(${y}px)`
    })
}

// FORM
console.clear();

const loginBtn = document.getElementById('login');
const signupBtn = document.getElementById('signup');

loginBtn.addEventListener('click', (e) => {
	let parent = e.target.parentNode.parentNode;
	Array.from(e.target.parentNode.parentNode.classList).find((element) => {
		if(element !== "slide-up") {
			parent.classList.add('slide-up')
		}else{
			signupBtn.parentNode.classList.add('slide-up')
			parent.classList.remove('slide-up')
		}
	});
});

signupBtn.addEventListener('click', (e) => {
	let parent = e.target.parentNode;
	Array.from(e.target.parentNode.classList).find((element) => {
		if(element !== "slide-up") {
			parent.classList.add('slide-up')
		}else{
			loginBtn.parentNode.parentNode.classList.add('slide-up')
			parent.classList.remove('slide-up')
		}
	});
});


/* ====== CARD USER ADMIN ANIMATION =======*/
/*========= =========== ============*/
$(document).ready(function () {
  // Flip card to the back side
  $("#details").click(function () {
    $(".card-admin").addClass("rotate");
    $(".back").show();
    gsap.from(".a", { opacity: 0, duration: 1, delay: 0.7, y: 30 });
    gsap.from(".b", { opacity: 0, duration: 1, delay: 0.8, y: 30 });
    gsap.from(".c", { opacity: 0, duration: 1, delay: 0.9, y: 30 });
    gsap.from(".d", { opacity: 0, duration: 1, delay: 1, y: 30 });
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

    gsap.from("#details", { opacity: 0, duration: 1, delay: 0.7, y: 30 });
    gsap.from(".title", { opacity: 0, duration: 1, delay: 1, y: 30 });
    gsap.from(".p", { opacity: 0, duration: 1, delay: 1.1, y: 30 });
  });
});





