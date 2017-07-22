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


		</div>
		<a class="hidden" href="https://plus.google.com/u/0/b/109455481729744341165/109455481729744341165" >Google Plus</a>
	</div>
</div>
<!-- Contact Box -->
<script async type="text/javascript" src="/js/custom.js"></script>

<!-- Linktracking 
<script async type="text/javascript" src="<?php echo $res_folder; ?>/resources/js/tracklink.js"></script>-->

<!-- enable fancybox for sturr -->
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

<!-- defer videos (copies data-src to src) -->
<script>
function init() {
var vidDefer = document.getElementsByTagName('iframe');
for (var i=0; i<vidDefer.length; i++) {
if(vidDefer[i].getAttribute('data-src')) {
vidDefer[i].setAttribute('src',vidDefer[i].getAttribute('data-src'));
} } }
window.onload = init;
</script>


<?php wp_footer(); ?>

</body>
</html>
