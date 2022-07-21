<?php 

// Get person meta content	
$gmuj_person_title = trim(get_post_meta(get_the_ID(), 'gmuj_person_title', true));
$gmuj_contact_email = trim(get_post_meta(get_the_ID(), 'gmuj_contact_email', true));
$gmuj_contact_phone = trim(get_post_meta(get_the_ID(), 'gmuj_contact_phone', true));
$gmuj_website = trim(get_post_meta(get_the_ID(), 'gmuj_website', true));
	
?>

<!-- Child theme customization: content for custom post type: person -->
<div class="person-wrapper">
	
	<div class="person-top">
		<?php if (has_post_thumbnail()): ?>
		<div class="person-image">
			<?php the_post_thumbnail(); ?>
		</div>
		<?php endif; ?>
		<div class="person-info">

			<?php

			// Output person info

				// job_title
					if (!empty($gmuj_person_title)) {
						echo '<p class="person-info--title"><span>Title:</span> '.$gmuj_person_title.'</p>';
					}

				// email
					if (!empty($gmuj_contact_email)) {
						echo '<p class="person-info--email"><span>Email:</span> <a href="mailto:'.$gmuj_contact_email.'">'.$gmuj_contact_email.'</a></p>';
					}

				// phone
					if (!empty($gmuj_contact_phone)) {
						echo '<p class="person-info--phone"><span>Phone:</span> '.$gmuj_contact_phone.'</p>';
					}

				// website
					if (!empty($gmuj_website)) {
						echo '<p class="person-info--website"><span>Website:</span> <a href="'.$gmuj_website.'" target="_blank">'.$gmuj_website.'</a></p>';
					}

				// groups
					$groups = strip_tags(get_the_term_list($post->ID, 'groups','',', '));
					if (!empty($groups)) {
						echo '<p class="person-info--groups">Groups: '.$groups.'</p>';
					}
			
			?>

		</div>

	</div>

	<div class="person-bottom">

		<div class="person-content">

			<?php 

			// Output post content
				the_content(); 

			?>

		</div>

	</div>

</div>
<!-- /Child theme customization: content for custom post type: person -->
