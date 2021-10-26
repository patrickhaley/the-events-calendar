<?php
/**
 * Status for a Canceled Event.
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe/events/v2/events-status/single/canceled-status.php
 *
 * See more documentation about our views templating system.
 *
 * @link http://evnt.is/1aiy
 *
 * @version TBD
 *
 * @var \WP_Post $event The event post object with properties added by the `tribe_get_event` function.
 *
 * @see tribe_get_event() For the format of the event object.
 */
namespace Tribe\Events\Event_Status;

// Don't print anything when status for this event is not
if ( 'canceled' !== $event->event_status ) {
	return;
}

?>
<div class="tribe-events-status-single-notice tribe-events-status-single-notice--canceled">
	<div class="tribe-events-status-text">

		<div class="tribe-events-status-single-notice-header tribe-events-status-text--red tribe-events-status-text--bold tribe-events-status-text--alert-icon">
			<?php echo esc_html_x( 'Canceled', 'Text next to the date to display canceled', 'the-events-calendar' ); ?>
		</div>

		<?php if ( $event->event_status_reason ) : ?>
			<div class="tribe-events-status-single-notice-description">
				<?php echo wp_kses_post( $event->event_status_reason ); ?>
			</div>
		<?php endif; ?>
	</div>
</div>
