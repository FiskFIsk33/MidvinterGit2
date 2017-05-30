<?php
error_reporting(E_ALL & ~E_NOTICE);
iconv_set_encoding("internal_encoding", "UTF-8");

$res_folder = "resources/";
require_once $res_folder.'FeedParser.php';
$viewpost=0;

$postid = filter_input(INPUT_GET, 'id');

$feed = new FeedParser('http://midvinterblot.com/members/syndication.php');
$postindex = $feed->idExists($postid);
if($postindex != -1){
    $page_content = $feed->renderPost($postindex).'<a class="newstitle" href="http://midvinterblot.com">HOME</a>';
    $viewpost = 1;
}  else {
    ob_start();
    ?>
    <br /><br /><br /><br />
    <img src="resources/images/knop.png" alt="ornament"/>
    <br /><br /><br /><br />
    <?php
    $page_content = ob_get_clean();
    
    $page_content .= $feed->renderNews();
}





if ($viewpost == 1 && strpos($description, 'hasimage', 0) !== FALSE) {
    $imgpos = strpos($description, 'src="', 0) + 5;
    $imglen = strpos($description, '" ', $imgpos) - $imgpos;
    $link_image = substr($description, $imgpos, $imglen);
} else {
    $link_image = "http://www.midvinterblot.com/resources/images/link.png";
}

if ($viewpost == 1) {
    $page_title = $title;
    $page_description = strip_tags($description);
}

if ($viewpost == 1) {
    $disable_hammer = 1;
}


require $res_folder . 'html/indexTemplate.php';

