<!-- HEADER'S CLOUDFLARE DETAILS -->
<?php
if ($ray !==''||$cachecontrol !=='') {
	echo '<ul class="browser-default">';
		if ($ray !=='') {echo '<li><strong>CF-Ray:</strong>&nbsp;'. $ray. '</li>';}; 
		if ($cachecontrol !=='') {echo '<li><strong>Cache-Control:</strong>&nbsp;'. $cachecontrol. '</li>';};
	echo '</ul>';
}
?>