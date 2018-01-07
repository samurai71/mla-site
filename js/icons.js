(function() {
	"use strict";
		//console.log("Social Media Icons");
		
		var iconSet = document.querySelectorAll(".socialIcons");
		
	

		function logClicked (e) {
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
	
})();