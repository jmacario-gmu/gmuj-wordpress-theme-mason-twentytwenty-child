<!-- Content for the WordPress admin dashboard 'theme support' content box -->
<h3><strong>Need help?</strong></h3>

<p>
	For general inquiries, contact the Mason webmaster team at <a href="mailto:webmaster@gmu.edu">webmaster@gmu.edu</a>.<br />
	For more in-depth questions or requests, please <a href="https://gmu.teamdynamix.com/TDClient/33/Portal/Requests/TicketRequests/NewForm?ID=HyCYnjyvSqI_" target="_blank">submit a ticket to the webmaster team</a>.
</p>
<p>For more information about this theme, please visit the <a href="https://wordpress.gmu.edu" target="_blank">Mason 2020 platform website</a>.</p>

<h3><strong>Customize Your Site<strong></h3>
<ul>
<?php 
// Show link to Mason Meta Information plugin, if it is active
if (gmuj_is_plugin_active('gmuj-wordpress-plugin-mason-meta-information/gmuj-wordpress-plugin-mason-meta-information.php')) { 
	echo "<li><a href='/wp-admin/admin.php?page=gmuj_mmi'>Mason Meta Information</a> - Provide your organizational information</li>";
}
?>
<li><a href="/wp-admin/customize.php?return=%2Fwp-admin%2Findex.php">Customize Theme</a> - Set basic theme settings</li>
<li><a href="/wp-admin/widgets.php">Create Widgets</a> - Customize your reuseable widgets, including those on the homepage</li>
</ul>

<h3><strong>Image Information</strong></h3>
<p>
	<strong>Recommended Banner Image Size:</strong> 1900x1200 pixels<br />
	Default banner images: 
	<?php
	for ($i=1; $i<=4; $i++) {
	echo '<a href="' . get_stylesheet_directory_uri().'/images/header-image-default-0'.$i.'-1900x1200.jpg'.'" target="_blank">'.$i.'</a> ';
	}
	?>
	<br />
	<a href="<?php echo get_stylesheet_directory_uri() ?>/images/logo-Mason-M-white-170x200.png" target="_blank">Default site logo</a>
	<br />
	<a href="<?php echo get_stylesheet_directory_uri() ?>/images/icon-MasonM-512x512.png" target="_blank">Default site icon</a>
</p>
