import $ from 'jquery';
import whatInput from 'what-input';

window.$ = $;

import Foundation from 'foundation-sites';
// If you want to pick and choose which modules to include, comment out the above and uncomment
// the line below
//import './lib/foundation-explicit-pieces';


$(document).foundation();

//Social Media Icons 

(function() {
	"use strict";
		//console.log("Social Media Icons");
		
		var iconSet = document.querySelectorAll(".socialIcons");
		
	

		function logClicked (e) {
			//console.log("SVG clicked: "+e.currentTarget.id);
			//e.currentTarget.classList.toggle("clickTrigger");
			//window.location.href = "http://www.google.ca" //opens in same window
			//window.open('http://www.google.com',"_blank"); // this works 
			if (e.currentTarget.id === "facebook") {
				window.open('https://www.facebook.com/markedwardlanderyou',"_blank");
			}else if (e.currentTarget.id === "twitter") {
				window.open('https://twitter.com/samurai71',"_blank");
			}else if (e.currentTarget.id === "linkedin") {
				window.open('https://www.linkedin.com/in/marklanderyou',"_blank");
			}else if (e.currentTarget.id === "behance") {
				window.open('https://www.behance.net/marklanderyou',"_blank");
			}
		}

		function logLoaded(e) {
			//console.log("svg loaded");
			var targetSVG = e.currentTarget.contentDocument;
			//console.log(targetSVG);
			var socialIcon = targetSVG.querySelector(".mainIcon");
			//console.log(socialIcon.id);
			socialIcon.addEventListener("click", logClicked, false);
		}

		for(var i=0; i<iconSet.length; i++) {
			iconSet[i].addEventListener("load", logLoaded, false);
		}

		// Facebook.addEventListener("click",faceBook,false);
		// linkedin.addEventListener("click",linkedIn,false);
		// twitter.addEventListener("click",Twitter,false);
		// behance.addEventListener("click",Behance,false); Don't use 
	
})();

// end of Social Media Icon


//Facebook 

(function() {
  "use strict";
  //console.log("Facebook JS loaded");

  window.fbAsyncInit = function() {
    FB.init({
      appId      : '310277112705215',
      xfbml      : true,
      version    : 'v2.8'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));



(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8&appId=310277112705215";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

})();

//End of Facebook 

// Start of Weather network 

(function() {
  "use strict";
  //console.log("Weather Javascipt Loaded");

var _plm = _plm || [];
  _plm.push(['_btn', 46617]); 
  _plm.push(['_loc','caon0383']);
  _plm.push(['location', document.location.host ]);
   (function(d,e,i) {
  if (d.getElementById(i)) return;
  var px = d.createElement(e);
  px.type = 'text/javascript';
  px.async = true;
  px.id = i;
  px.src = ('https:' == d.location.protocol ? 'https:' : 'http:') + '//widget.twnmm.com/js/btn/pelm.js?orig=en_ca';
  var s = d.getElementsByTagName('script')[0];

  var py = d.createElement('link');
  py.rel = 'stylesheet';
  py.href = ('https:' == d.location.protocol ? 'https:' : 'http:') + '//widget.twnmm.com/styles/btn/styles.css';

  s.parentNode.insertBefore(px, s);
  s.parentNode.insertBefore(py, s);
})(document, 'script', 'plmxbtn');

})();

//End of Weather network

//Start of Filter Menu 

// shows and hides filtered items

(function() {
  "use strict";

$(".filter-simple-button").click(function() {
  var value = $(this).attr('data-filter');
  if(value === "all") {
    $('.filter-simple-item').show('1000');
  } else {
    $(".filter-simple-item").not('.'+value).hide('3000');
    $('.filter-simple-item').filter('.'+value).show('3000');
  }
});

// changes active class on filter buttons
$('.filter-simple-button').click(function () {
  $(this).siblings().removeClass('is-active');
  $(this).addClass('is-active');
});

})();


// End of Filter Menu
