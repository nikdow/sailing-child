<?php
/**
 * Product loop title
 *
 * @author  ThimPress
 * @package Tp-hotel-booking/Templates
 * @version 1.1.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
$room = HB_Room::instance(get_the_ID());
?>
<div class="title">
	<h4>
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		<?php if(!empty($room->name_availability) ) { ?>
			<a class="check-availability" href="<?php echo esc_url($room->link_availability); ?>" target="_blank" title="<?php echo esc_html($room->name_availability); ?>"><?php echo esc_html($room->name_availability); ?></a> 
		<?php } else { ?>
			<a class="check-availability" href="<?php echo esc_url('http://www.skipegasus.com.au/bookings/'); ?>" target="_blank" title="<?php echo esc_html__('Check Availability', 'sailing'); ?>"><?php echo esc_html__('Check Availability', 'sailing'); ?></a> 
		<?php } ?>
	</h4>
</div>
