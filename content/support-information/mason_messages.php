<!-- Content for the WordPress admin dashboard 'Mason messages' content box -->
<?php 

// Set up message array to return messages
$mason_mesages = array();

// Check whether search engines can index this website
if (!get_option('blog_public')) {
	array_push($mason_mesages,"Search engines are discouraged from indexing this website!");
}

// Check what the admin email is set to
if (get_bloginfo('admin_email')!='gmuweb@gmu.edu' && get_bloginfo('admin_email')!='webmaster@gmu.edu') {
	array_push($mason_mesages,"The website administrator email is not set to the Mason webmaster email address (webmaster@gmu.edu)!");
}

// Display messages
//Check whether there are any messages
if (empty($mason_mesages)) {
	echo "<p>No messages.</p>";
} else {
	foreach ($mason_mesages as $mason_message) {
		echo $mason_message;
	}
}


?>	
