<?php
// No direct access
defined('_JEXEC') or die; ?>
<div class="livestream">
  <div class="livestream-title" style="background-color: <?PHP echo $color; ?>">
    <i class="icon-play"></i> <?PHP echo $title; ?>
  </div>
  <div class="livestream-content">
    <div class="embed-responsive embed-responsive-16by9"><iframe src="<?PHP echo $url; ?>" width="560" height="315" frameborder="0" allowfullscreen="allowfullscreen"></iframe></div>
  </div>
</div>
