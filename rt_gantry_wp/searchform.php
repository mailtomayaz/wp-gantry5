<?php
/**
 * @version   4.1.14 August 28, 2017
 * @author    RocketTheme http://www.rockettheme.com
 * @copyright Copyright (C) 2007 - 2017 RocketTheme, LLC
 * @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 */

global $gantry;
?>

<form role="search" method="get" id="searchform" class="form-inline" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input type="text" class="field" name="s" id="s" placeholder="<?php esc_attr_e( 'Search', 'rt_gantry_wp_lang' ); ?>" value="<?php echo wp_kses( get_search_query(), null ); ?>" />
	<input type="submit" class="btn btn-primary" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'rt_gantry_wp_lang' ); ?>" />
</form>