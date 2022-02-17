<?php
// @todo either split and filter this to allow ECP to add some copy, or remove mention of recurring Events from here.
?>

<div class="tec-ct1-upgrade__row">
	<div class="content-container">
		<span><?php esc_html_e( 'Get ready for the new recurring events!', 'the-events-calendar' ); ?></span>

		<h3>
			<?php echo $logo; ?>
			<?php esc_html_e( 'Upgrade your recurring events.', 'the-events-calendar' ); ?>
		</h3>

		<p><?php esc_html_e( 'Faster event editing. Smarter save options. More flexibility. Events Calendar 6.0  is full of features to make managing recurring and connected events better than ever. Before you get started, we need to migrate your existing events into the new system.', 'the-events-calendar' ); ?></p>

		<p>
			<strong><?php esc_html_e('Ready to go? The first step is a migration preview.', 'the-events-calendar' ); ?></strong>
			<?php esc_html_e( 'We\'ll scan all existing events and let you know what to expect from the migration process. You\'ll also get an idea of how long your migration will take. The preview runs in the background, so you’ll be able to continue using your site.', 'the-events-calendar' ); ?>
		</p>

		<button type="button"><?php esc_html_e( 'Start migration preview', 'the-events-calendar' ); ?></button>
		<a href="http://evnt.is/recurrence-2-0" target="_blank" rel="noopener">
			<?php esc_html_e( 'Learn more about the migration', 'the-events-calendar' ); ?>
		</a>
	</div>
	<div class="image-container">
		<img class="screenshot" src="<?php echo esc_url( plugins_url( 'src/resources/images/upgrade-views-screenshot.png', TRIBE_EVENTS_FILE ) ); ?>" alt="<?php esc_attr_e( 'screenshot of updated calendar views', 'the-events-calendar' ); ?>" />
	</div>
</div>
