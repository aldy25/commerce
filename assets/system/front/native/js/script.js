$(document).ready(function(){

   let toBottom = {
	  origin: 'top',
	  opacity: 0,
	  mobile:true,
	  duration:2000,
	  delay:2000,
	  scale:1,
   };

   let toBottomDelay = {
	  origin: 'top',
	  opacity: 0,
	  mobile:true,
	  duration:4000,
	  delay:500,
	  scale:0.8,
   };

   let tags = {
	  origin: 'top',
	  opacity: 0,
	  mobile:true,
	  duration:4000,
	  delay:3000,
	  scale:0.8,
   }

   ScrollReveal().reveal(".front-part",toBottom);
   ScrollReveal().reveal(".back-part",toBottomDelay);
   ScrollReveal().reveal(".brand-container",tags);
   ScrollReveal().reveal(".m-head",toBottomDelay);

   var scene = document.getElementById('scene');
   var parallaxInstance = new Parallax(scene);
});
