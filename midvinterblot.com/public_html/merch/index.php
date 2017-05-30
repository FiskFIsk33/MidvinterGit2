<?php
error_reporting(E_ALL & ~E_NOTICE);

iconv_set_encoding("internal_encoding", "UTF-8");

$page_title = "Midvinterblot - Merch";
$page_description = "The official merch of the swedish folk-metal band Midvinterblot";
$disable_hammer = 1;
$disable_links = 1;
$mailbox_title = "Send an order or an inquiry to our e-mail using this form.";
$res_folder = "../resources/";

$extra_css = '<link rel="stylesheet" type="text/css" href="style.css" media="screen" />';

//page content
ob_start();
?>


<div class="storeitems">
    <h1>Midvinterblot Official Merch</h1>
    <div class="storeitem">
        <a class="button modalbox" data-fancybox-group="tshirt2" href="<?php echo $res_folder; ?>images/merch/tshirt2-4.jpg"></a>
        <a class="button modalbox" data-fancybox-group="tshirt2" href="<?php echo $res_folder; ?>images/merch/tshirt2-3.jpg">
            <img src="<?php echo $res_folder; ?>images/merch/tshirt2.png" alt="T-Shirt" height="200" width="240">
        </a>
        <p>T-shirt<br />
            Logo front, hammer back<br />
            <strong>150:-</strong></p>
    </div>
	    <div class="storeitem">
		<a class="button modalbox" data-fancybox-group="patch2" href="<?php echo $res_folder; ?>images/merch/patch2_2.png">
            <img src="<?php echo $res_folder; ?>images/merch/patch2.png" alt="T-Shirt" height="200" width="240">
        </a>
        <p>Patch<br />
		Midvinterblot Logo<br />
            <strong>30:-</strong></p>
    </div>
    <div class="storeitem">
		<a class="button modalbox" data-fancybox-group="gryning" href="<?php echo $res_folder; ?>images/merch/gryning_inside.png"></a>
		<a class="button modalbox" data-fancybox-group="gryning" href="<?php echo $res_folder; ?>images/merch/gryning_back.png"></a>
        <a class="button modalbox" data-fancybox-group="gryning" href="<?php echo $res_folder; ?>images/merch/gryning_front.png">
            <img src="<?php echo $res_folder; ?>images/merch/skiva.png" alt="Gryning" height="200" width="240">
        </a>
        <p>Gryning EP<br />
            <a href="http://midvinterblot.com/index.php/music/#gryning">more info here</a><br />
            <strong>100:-</strong></p>
    </div>
	    <div class="storeitem">
		<a class="button modalbox" data-fancybox-group="skymning" href="<?php echo $res_folder; ?>images/merch/skiva2-1.png">
            <img src="<?php echo $res_folder; ?>images/merch/skiva2.png" alt="Skymning" height="200" width="240">
        </a>
        <p>Skymning<br />
            <a href="http://midvinterblot.com/index.php/music/#skymning">more info here</a><br />
            <strong>150:-</strong></p>
    </div>
</div>
<div>
    <p>Prices are in SEK and excludes shipping.<br />
        <b>If you wish to order</b> or have any further questions, click below to contact us.<br />
    <a class="button modalbox" href="#inline" itemprop="email">
        <img src="<?php echo $res_folder; ?>images/icons/mail.png" alt="Contact Midvinterblot By Mail" height="59" width="59">
    </a>
</div>
<?php
$page_content = ob_get_clean();



require $res_folder . 'html/indexTemplate.php';
