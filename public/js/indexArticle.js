 /*===== CARD SECTION =====*/
    //OVERLAY
    document.querySelectorAll('.goCave').forEach(goCave =>
        goCave.addEventListener('click', () => {
  
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