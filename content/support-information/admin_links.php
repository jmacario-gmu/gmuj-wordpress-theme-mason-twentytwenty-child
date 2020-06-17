<!--
Content for the WordPress admin dashboard 'Admin links' content box
-->
<ul>
<li><a href="/wp-admin/widgets.php">Widgets</a> - Customize your reuseable widgets, including those on the homepage.</li>
<li><a href="/wp-admin/customize.php?return=%2Fwp-admin%2Findex.php">Customize Theme</a> - Basic theme settings</li>
<?php 
// Check for Mason Meta Information plugin
if(in_array('gmuj-wordpress-plugin-mason-meta-information/gmuj-wordpress-plugin-mason-meta-information.php', apply_filters('active_plugins', get_option('active_plugins')))) { 
	echo "<li><a href='/wp-admin/admin.php?page=gmuj_mmi'>Mason Meta Information</a> - Provide your organizational information</li>";
}
?>
</ul>