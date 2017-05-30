
<a target="_blank" class='social' data-socnet="facebook" data-link="http://midvinterblot.com/?id=<?php echo $this->timecode; ?>" href="http://www.facebook.com/sharer/sharer.php?s=100&amp;p[url]=http://midvinterblot.com/?id=<?php echo $this->timecode; ?>&amp;&amp;p[title]=<?php echo $this->title; ?>&amp;p[summary]=<?php echo strip_tags($this->description); ?>">
<img src="resources/images/icons/social/fb.png" alt="share on facebook"/>
</a>

<a target="_blank" class='social' data-socnet="twitter" data-link="http://midvinterblot.com/?id=<?php echo $this->timecode; ?>" href="https://twitter.com/share?url=http://midvinterblot.com/?id=<?php echo $this->timecode."&text=".substr($this->title." ".strip_tags($this->description),0,119); ?> &#46;&#46;&#46;">
<img height="33" width="33" src="resources/images/icons/social/tw.png" alt="tweet"/>
</a>

<a target="_blank" class='social' data-socnet="google+" data-link="http://midvinterblot.com/?id=<?php echo $this->timecode; ?>" href="https://plus.google.com/share?url=http://midvinterblot.com/?id=<?php echo $this->timecode; ?>">
<img height="33" width="33" src="resources/images/icons/social/gp.png" alt="share on google+"/>
</a>

<a target="_blank" class='social' data-socnet="reddit" data-link="http://midvinterblot.com/?id=<?php echo $this->timecode; ?>" href="//www.reddit.com/submit?url=http://midvinterblot.com/?id=<?php echo $this->timecode; ?>">
<img height="33" width="33" src="resources/images/icons/social/rd.png" alt="submit to reddit"/>
</a>

