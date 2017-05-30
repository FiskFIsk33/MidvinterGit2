<?php
error_reporting(E_ALL & ~E_NOTICE);

iconv_set_encoding("internal_encoding", "UTF-8");

$page_title = "Midvinterblot - Down For Maintenance";
$page_description = "Down for maintenance";
$disable_hammer = 1;
$disable_links = 1;
//$mailbox_title = "";
$res_folder = "../resources/";

$extra_css = '<link rel="stylesheet" type="text/css" href="style.css" media="screen" />';

//page content
ob_start();
?>

<div class="mdiv">
<h1 class="mtext">The site is down for maintenance</h1>
</div>
<?php
$page_content = ob_get_clean();



require $res_folder . 'html/indexTemplate.php';
