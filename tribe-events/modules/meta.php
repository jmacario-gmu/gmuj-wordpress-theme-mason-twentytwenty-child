<?php
/**
 * Single Event Meta Template Override
 */

do_action( 'tribe_events_single_meta_before' );

// Do we want to group venue meta separately?
$set_venue_apart = apply_filters( 'tribe_events_single_event_the_meta_group_venue', false, get_the_ID() );
?>

<div class="gmu-was-single-event-meta-wrapper">
  <?php
  do_action( 'tribe_events_single_event_meta_primary_section_start' );

  // Always include the main event details in this first section
  ?>
  <div class="gmu-was-event-meta-container gmu-was-event-meta-details">
    <?php tribe_get_template_part( 'modules/meta/details' ); ?>
  </div>
  <div class="gmu-was-event-meta-container gmu-was-event-meta-organizer">
    <?php
    // Include organizer meta if appropriate
    if ( tribe_has_organizer() ) {
      tribe_get_template_part( 'modules/meta/organizer' );
    }
    do_action( 'tribe_events_single_event_meta_primary_section_end' );
    ?>
  </div>
  <div class="gmu-was-event-meta-container gmu-was-event-meta-venue">
    <?php
    do_action( 'tribe_events_single_event_meta_secondary_section_start' );
    tribe_get_template_part( 'modules/meta/venue' );
    // tribe_get_template_part( 'modules/meta/map' );
    do_action( 'tribe_events_single_event_meta_secondary_section_end' );
    ?>
  </div>
  <?php
  do_action( 'tribe_events_single_meta_after' );
  ?>
</div><!-- /gmu-was-single-event-meta-wrapper -->