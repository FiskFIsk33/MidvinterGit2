<?php
error_reporting(E_ALL & ~E_NOTICE); 
iconv_set_encoding("internal_encoding", "UTF-8");
 
$page_title = "Midvinterblot - Press";
$page_description = "Press downloads";
$disable_hammer = 1;
$disable_links = 1;
$res_folder = "../resources/";

ob_start(); ?>
                <div>
                    <a href="../">
			<img src="<?php echo $res_folder; ?>images/icons/smallhammer.png" alt="Go back" height="59" width="59">
			<br />Home
                    </a>
                    <br /><br />
                </div>
                <div><span class="newstitle">PRESS</span></div>
                <br />
                <div>
                    Download our press kit here! <br />
                    <a href="presskit.zip">presskit.zip</a><br /><br />
                    
                </div>
                <div><span clsss="newstext"></span></div>
<?php
$page_content = ob_get_clean();



require $res_folder . 'html/indexTemplate.php';