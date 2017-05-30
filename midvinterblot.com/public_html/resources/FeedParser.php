<?php

/**
 * woop a class.
 * Parses the feed.
 * 
 * @property string $res_folder Path to resources folder
 *
 * @author Jonathan Johnson
 */
class FeedParser {

    var $rss;
    var $feed;
    var $timecode;
    var $date;
    var $title;
    var $description;
    var $link;

    function __construct($feedURI) {
        $rss = new DOMDocument();
        $rss->load($feedURI);
        $this->feed = array();
        foreach ($rss->getElementsByTagName('item') as $node) {
            $item = array(
                'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
                'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
                'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
                'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
            );
            array_push($this->feed, $item);
        }
    }

    public function renderNews() {
        $return = "";
        for ($x = 0;$x < sizeof($this->feed); $x++) {
            if (strrpos($this->feed[$x]['desc'], 'class="newspiece"') !== FALSE) {
                $return = $return.$this->renderPost($x);
            }
        }
        return $return;
    }

    public function idExists($postid) {
        for($x=0;$x<sizeof($this->feed)&&strlen($postid)==10;$x++){
            if (strrpos($this->feed[$x]['link'], $postid) !== FALSE) {
                return $x;
            }
        }
        return -1;
    }

    private function loadPost($index) {
        $this->title = str_replace(' & ', ' &amp; ', $this->feed[$index]['title']);
        $this->link = $this->feed[$index]['link'];
        $this->description = $this->lightboxImages($this->feed[$index]['desc']);
        $this->timecode = strtotime($this->feed[$index]['date']);
        $this->date = date('l F d, Y', strtotime($this->feed[$index]['date']));
    }
    
/**
 * 
 * @property string $res_folder Path to resources folder
 */
    public function renderPost($index) {
        $this->loadPost($index);
        ob_start();
        echo '<p><a id="' . $this->timecode . '"></a><span class="newstitle">' . $this->title . '</span><br />';
        echo '<small><span class="newsdate">' . $this->date . '</span></small></p>';
        echo '<p>' . $this->description . '</p>';
        include $res_folder.'socialshare.php';
        echo '<br /><br />';
        return ob_get_clean();
    }

    private function lightboxImages($haystack) {
        $posb = 0;
        //Find Images and make them Lightboxed
        while (strpos($haystack, 'postlink', $posb) !== FALSE) {
            $posa = strpos($haystack, '<a', $posb);
            $posb = strpos($haystack, '>', $posa);
            $sublen = $posb - $posa + 1;
            $substring = substr($haystack, $posa, $sublen);
            if (stripos($substring, '.jpg"') || stripos($substring, '.png"') || stripos($substring, '.bmp"') || stripos($substring, '.gif"') !== FALSE) {
                $newsubstring = str_replace('postlink', 'button modalbox" rel="' . $this->timecode, $substring);
                $haystack = str_replace($substring, $newsubstring, $haystack);
            }
        }
        $posb = 0;
        //find unlinked images and make them lightboxed
        while (strpos($haystack, '<img src=', $posb) !== FALSE) {
            $linkposa = strpos($haystack, '<a href', $posb);
            $linkposb = strpos($haystack, '</a>', $linkposa);
            $classpos = strpos($haystack, 'class="button modalbox"', $linkposa);
            $posa = strpos($haystack, '<img src=', $posb);
            $posb = strpos($haystack, '/>', $posa);
            if (!(($linkposa < $posa) && ($linkposb > $posb) && ($classpos > $linkposa) && ($classpos < $posa))) {
                $sublen = $posb - $posa + 2;
                $substring = substr($haystack, $posa, $sublen);
                $imglinklen = strpos($substring, '"', 10) - 10;
                $imglink = substr($substring, 10, $imglinklen);
                $newsubstring = str_replace('<img src', '<a href="' . $imglink . '" class="button modalbox" rel="' . $this->timecode . '"><img src', $substring);
                $newsubstring = str_replace('/>', '/></a>', $newsubstring);
                $addlen = strlen($newsubstring) - strlen($substring);
                $posb = $posb + $addlen;
                $haystack = str_replace($substring, $newsubstring, $haystack);
            }
        }
        return $haystack;
    }

}
