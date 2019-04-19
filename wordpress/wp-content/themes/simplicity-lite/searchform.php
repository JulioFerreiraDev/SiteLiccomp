<?php
/* 	Simplicity Theme's Search Form
	Copyright: 2012-2016, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since Simplicity 1.0
*/
?>


<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<label for="s" class="assistive-text"></label>
		<input type="text" class="field" name="s" id="s" placeholder="<?php _e('Your Search Text Here','simplicity-lite'); ?>" />
		<input type="submit" class="submit" name="submit" id="searchsubmit" value="<?php _e('Search','simplicity-lite'); ?>" />
	</form>