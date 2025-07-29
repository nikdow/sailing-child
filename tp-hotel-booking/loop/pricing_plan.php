<?php
/**
 * Pricing Plan
 *
 * @author 		ThimPress
 * @package 	Tp-hotel-booking/Templates
 * @version     1.1.4
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit();
}
global $thim_options_data;

$week_names = hb_date_names();
$plans = hb_room_get_pricing_plans( get_the_ID() );
$room = HB_Room::instance(get_the_ID());

$addition_information = '';
if ( !isset($thim_options_data['thim_hb_single_hide_info']) || !$thim_options_data['thim_hb_single_hide_info']) {
    $addition_information = $room->addition_information;
}
?>
<div class="addition-information">
	<?php echo do_shortcode($addition_information); ?>
</div>