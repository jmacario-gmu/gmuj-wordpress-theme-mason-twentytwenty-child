<!-- Content for the WordPress admin dashboard 'theme support' content box -->
<h3><strong>Need help?</strong></h3>

<p>
	For general inquiries, contact the Mason webmaster team at <a href="mailto:webmaster@gmu.edu">webmaster@gmu.edu</a>.<br />
	For more in-depth questions or requests, please <a href="https://gmu.teamdynamix.com/TDClient/33/Portal/Requests/TicketRequests/NewForm?ID=HyCYnjyvSqI_" target="_blank">submit a ticket to the webmaster team</a>.
</p>

<h3><strong>Recommended Image Sizes</strong></h3>
<p>
	<strong>Banner Image:</strong> 1900x1200 pixels<br />
	<strong>Site Logo:</strong> 
</p>

<h3><strong>Quick Links<strong></h3>
<ul>
<?php 
// Check for Mason Meta Information plugin
if(in_array('gmuj-wordpress-plugin-mason-meta-information/gmuj-wordpress-plugin-mason-meta-information.php', apply_filters('active_plugins', get_option('active_plugins')))) { 
	echo "<li><a href='/wp-admin/admin.php?page=gmuj_mmi'>Mason Meta Information</a> - Provide your organizational information</li>";
}
?>
<li><a href="/wp-admin/customize.php?return=%2Fwp-admin%2Findex.php">Customize Theme</a> - Set basic theme settings</li>
<li><a href="/wp-admin/widgets.php">Create Widgets</a> - Customize your reuseable widgets, including those on the homepage.</li>
</ul>