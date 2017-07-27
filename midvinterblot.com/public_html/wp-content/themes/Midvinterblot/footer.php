<?php
/**
 * Template for displaying the footer
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>



		<a class="hidden" href="https://plus.google.com/u/0/b/109455481729744341165/109455481729744341165" >Google Plus</a>
	</div>
</div>

<!-- Contact Box -->
<div id="inline">
	<form id="contact" name="contact" action="#" method="post">
		<fieldset>
		<legend><?php //echo $mailbox_title; ?>CONTACT US</legend>

		<label for="email"><span class="required">*</span> Your Email Address</label>
		<input name="email" type="email" id="email" class="txt" />
		
		<br />
		<label for="subject"><span class="required">*</span> Message Subject</label>
		<input name="subject" type="text" id="subject" class="txt"/>

		<br />
		<label for="msg"><span class="required">*</span> Your Message</label>
		<textarea name="msg" id="msg"></textarea>

		<input id="send" class="button" type="image" src="https://i.midvinterblot.com/social/sendmail.png" alt="send message" name="send email" width="124" height="39">
		</fieldset>
	</form>
</div>

<!-- fonts -->
<link href="https://fonts.googleapis.com/css?family=IM+Fell+DW+Pica" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=IM+Fell+Great+Primer+SC" rel="stylesheet"> 

<!-- JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.js"></script>

<!-- Contact Box -->
<script async type="text/javascript" src="/js/custom.js"></script>

<!-- Linktracking 
<script async type="text/javascript" src="<?php echo $res_folder; ?>/resources/js/tracklink.js"></script>-->

<!-- enable fancybox for image links -->
<script type="text/javascript">
	var imagelinks ='a[href$=".gif"],a[href$=".jpg"],a[href$=".jpeg"],a[href$=".png"],a[href$=".GIF"],a[href$=".JPG"],a[href$=".JPEG"],a[href$=".PNG"]';
	var alreadytagged ='[data-fancybox],.fancybox,.fancybox-inline';
	jQuery(imagelinks).not(alreadytagged).addClass("fancybox").attr("data-fancybox", '');
	
	$("a.fancybox-inline").fancybox({
		'hideOnContentClick': true,
		iframe : {
			preload : false
		}
	});
	$.fancybox.defaults.hash = false;
</script>

<!-- defer YT videos (copies data-src to src) -->
<script>
function init() {
var vidDefer = document.getElementsByTagName('iframe');
for (var i=0; i<vidDefer.length; i++) {
if(vidDefer[i].getAttribute('data-src')) {
vidDefer[i].setAttribute('src',vidDefer[i].getAttribute('data-src'));
} } }
window.onload = init;
</script>

<!-- Google Tracking -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-39947911-1', 'auto');
  ga('send', 'pageview');

</script>

<!-- WP STUFF -->
<?php wp_footer(); ?>

</body>
</html>
