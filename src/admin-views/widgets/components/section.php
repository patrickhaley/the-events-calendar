<?php
/**
 * Admin View: Widget Section Component.
 *
 * This component is different in that it calls other components!
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe/admin-views/widgets/components/section.php
 *
 * See more documentation about our views templating system.
 *
 * @link    http://m.tri.be/1aiy
 *
 * @version TBD
 *
 * @var string              $label       Title for the section. (optional)
 * @var string              $description Description for the section. (optional)
 * @var string              $classes     Classes to add to the section. (optional)
 * @var string              $dependency  The dependency attributes for the control wrapper.
 * @var array<string,mixed> $children    Child elements for the section.
 */

use Tribe__Utils__Array as Arr;

$section_classes = array_merge( [ 'tribe-widget-form-control', 'tribe-widget-form-control--section' ], Arr::list_to_array( $classes, ' ' ) );

?>
<div
	<?php tribe_classes( $section_classes ); ?>
	<?php
		// Not escaped - contains html ( data-attr="value")
		echo $dependency;
		?>
>
	<?php if ( ! empty( $label ) ) : ?>
		<?php // Note: the actual widget title/handle is an <h3>. ?>
		<h4 class="tribe-widget-form-control--section-title"><?php echo esc_html( $label ); ?></h4>
	<?php endif; ?>

	<?php
	foreach ( $children as $child_id => $child ) {
		$this->section_handler( $child_id, $child );
	}
	?>
</div>
