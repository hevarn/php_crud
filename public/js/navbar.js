
 var tl = new TimelineMax();
 tl.staggerTo('.nav li', 0.2, {
     'opacity': 1,
     'marginRight': 0
 }, 0.1);
 tl.pause();

 $('#burger').click(function() {
     if (!$('#burger').hasClass('cross')) {
         $('#burger').addClass('cross');
         tl.play();
     } else {
         $('#burger').removeClass('cross');
         tl.reverse();
     }
 });