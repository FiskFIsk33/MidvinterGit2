<!-- Google -->
<script>
window.ga_debug = {trace: true};

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-39947911-1', 'midvinterblot.com');
  ga('require', 'displayfeatures');
  ga('send', 'pageview');

</script>

<script>
/**
* Funktion som spårar ett klick på en utgående länk i Google Analytics.
* Funktionen tar en giltig webbadressträng som argument och använder strängen
* som händelsenamn.
*/
var gaTrackLink = function(ga_url) {
   ga('send', 'event', 'outbound', 'link', ga_url, {'hitCallback':
     function () {
     //document.location = ga_url;
	 window.open(ga_url,'_blank');
     }
   });
}
</script> 
