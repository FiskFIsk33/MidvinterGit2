/* Track outbound links in Google Analytics */
(function($) {
 
  "use strict";
 
  // current page host
  var baseURI = window.location.host;
 
  // click event on body
  $("body").on("click", function(e) {
 
    // abandon if link already aborted or analytics is not available
    if (e.isDefaultPrevented() || typeof ga !== "function") return;
	
	var link = $(e.target).closest("a");

	
	//F Track differently if lightbox
	if (link.attr('class') == "button modalbox" || link.attr('class') == "fancybox-nav fancybox-next" || link.attr('class') == "fancybox-nav fancybox-prev"){
	    // abandon if Contact box
		if (link.attr('itemprop') == "email") return;
		
	    var href = link[0].href;
		ga('send', {
		'hitType': 'event',
		'eventCategory': 'image',
		'eventAction': 'view',
		'eventLabel': href
		});
		return;
	}
 
    // abandon if no active link or link within domain
    //var link = $(e.target).closest("a");
    if (link.length != 1 || baseURI == link[0].host) return;
	
	//cancel event and record social interaction
	e.preventDefault();
    var href = link[0].href;
	if(link.attr('class')=="social"){
		ga('send', {
		  'hitType': 'social',
		  'socialNetwork': link.data('socnet'),
		  'socialAction': 'share',
		  'socialTarget': link.data('link')
		});
		ga('send', {
		  'hitType': 'event',
		  'eventCategory': 'social',
		  'eventAction': 'share',
		  'eventLabel': link.data('socnet'),
		  'hitCallback': loadPopup
		});
		loadPopup();
		return;
	}
 
    // cancel event and record outbound link
    e.preventDefault();
    var href = link[0].href;
    ga('send', {
      'hitType': 'event',
      'eventCategory': 'outbound',
      'eventAction': 'link',
      'eventLabel': href,
      'hitCallback': loadPage
    });
 
    // redirect after one second if recording takes too long
    //setTimeout(loadPage, 1000);
 
    // redirect to outbound page
    function loadPage() {
      document.location = href;
	  //window.open(href,'_blank');
	  //$(this).target = "_blank";
	  //window.open(href);
    }
	function loadPopup() {
      var myWindow = window.open(href, "", "width=500, height=500");
    }
 
  });
 
})(jQuery); // pass another library here if required