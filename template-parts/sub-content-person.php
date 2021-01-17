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

		<div class="person-image">

			<?php 
			if (has_post_thumbnail()) {
				// Show the post thumbnail image
				the_post_thumbnail();
			} else {
				// Show nothing
				echo '';
			}
			?>

		</div>

		<div class="person-info">

			<?php

			// Output person info

				// job_title
					if (!empty($gmuj_person_title)) {
						echo '<p>Title: '.$gmuj_person_title.'</p>';
					}

				// email
					if (!empty($gmuj_contact_email)) {
						echo '<p>Email: <a href="mailto:'.$gmuj_contact_email.'">'.$gmuj_contact_email.'</a></p>';
					}

				// phone
					if (!empty($gmuj_contact_phone)) {
						echo '<p>Phone: '.$gmuj_contact_phone.'</p>';
					}

				// website
					if (!empty($gmuj_website)) {
						echo '<p>Website: <a href="'.$gmuj_website.'" target="_blank">'.$gmuj_website.'</a></p>';
					}

				// groups
					$groups = get_the_term_list($post->ID, 'groups','',', '); 
					if (!empty($groups)) {
						echo '<p>Groups: '.$groups.'</p>';
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
