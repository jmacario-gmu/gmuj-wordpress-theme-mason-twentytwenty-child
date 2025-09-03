<!-- Content for the WordPress admin dashboard 'Mason Recommended plugins' content box -->
<table>
	<thead>
		<tr>
			<th style="text-align:left;">Name</th>
			<th style="text-align:left;">Description</th>
			<th style="text-align:left;">Active</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Mason Custom Widgets</td>
			<td>Custom widgets designed for this theme</td>
			<td>
				<?php
				// Indicate whether this plugin is active
				if (gmuj_is_plugin_active('gmuj-wordpress-plugin-mason-custom-widgets/gmuj-wordpress-plugin-mason-custom-widgets.php')) {
					echo '<span style="color:green;" class="dashicons dashicons-yes"></span>';
				} else {
					echo '<span style="color:red;" class="dashicons dashicons-no-alt"></span>';
				}
				?>
			</td>
		</tr>
		<tr>
			<td>Mason Meta Information</td>
			<td>Set organizational and contact details</td>
			<td>
				<?php
				// Indicate whether this plugin is active
				if (gmuj_is_plugin_active('gmuj-wordpress-plugin-mason-meta-information/gmuj-wordpress-plugin-mason-meta-information.php')) {
					echo '<span style="color:green;" class="dashicons dashicons-yes"></span>';
				} else {
					echo '<span style="color:red;" class="dashicons dashicons-no-alt"></span>';
				}
				?>
			</td>
		</tr>
		<tr>
			<td>Mason Site Check-In</td>
			<td>Check-in with your site to keep content updated</td>
			<td>
				<?php
				// Indicate whether this plugin is active
				if (gmuj_is_plugin_active('gmuj-wordpress-plugin-mason-site-check-in/gmuj-wordpress-plugin-mason-site-check-in.php')) {
					echo '<span style="color:green;" class="dashicons dashicons-yes"></span>';
				} else {
					echo '<span style="color:red;" class="dashicons dashicons-no-alt"></span>';
				}
				?>
			</td>
		</tr>
		<tr>
			<td>Mason Sucuri Integration</td>
			<td>Integration with our web application firewall</td>
			<td>
				<?php
				// Indicate whether this plugin is active
				if (gmuj_is_plugin_active('gmuj-wordpress-plugin-mason-sucuri-integration/gmuj-wordpress-plugin-mason-sucuri-integration.php')) {
					echo '<span style="color:green;" class="dashicons dashicons-yes"></span>';
				} else {
					echo '<span style="color:red;" class="dashicons dashicons-no-alt"></span>';
				}
				?>
			</td>
		</tr>
		<tr>
			<td><a href="https://wordpress.org/plugins/classic-widgets/" target="_blank">Classic Widgets</a></td>
			<td>Restore the classic widgets settings screen</td>
			<td>
				<?php
				// Indicate whether this plugin is active
				if (gmuj_is_plugin_active('classic-widgets/classic-widgets.php')) {
					echo '<span style="color:green;" class="dashicons dashicons-yes"></span>';
				} else {
					echo '<span style="color:red;" class="dashicons dashicons-no-alt"></span>';
				}
				?>
			</td>
		</tr>
		<tr>
			<td><a href="https://wordpress.org/plugins/the-events-calendar/" target="_blank">The Events Calendar</a></td>
			<td>Easily create and manage an events calendar</td>
			<td>
				<?php
				// Indicate whether this plugin is active
				if (gmuj_is_plugin_active('the-events-calendar/the-events-calendar.php')) {
					echo '<span style="color:green;" class="dashicons dashicons-yes"></span>';
				} else {
					echo '<span style="color:red;" class="dashicons dashicons-no-alt"></span>';
				}
				?>
			</td>
		</tr>
		<tr>
			<td><a href="https://wordpress.org/plugins/duracelltomi-google-tag-manager/" target="_blank">Google Tag Manager for WordPress</a></td>
			<td>Add analytics to this website</td>
			<td>
				<?php
				// Indicate whether this plugin is active
				if (gmuj_is_plugin_active('duracelltomi-google-tag-manager/duracelltomi-google-tag-manager-for-wordpress.php')) {
					echo '<span style="color:green;" class="dashicons dashicons-yes"></span>';
				} else {
					echo '<span style="color:red;" class="dashicons dashicons-no-alt"></span>';
				}
				?>
			</td>
		</tr>
		<tr>
			<td><a href="https://wordpress.org/plugins/tablepress/" target="_blank">TablePress</a></td>
			<td>Insert dynamic tables into website content</td>
			<td>
				<?php
				// Indicate whether this plugin is active
				if (gmuj_is_plugin_active('tablepress/tablepress.php')) {
					echo '<span style="color:green;" class="dashicons dashicons-yes"></span>';
				} else {
					echo '<span style="color:red;" class="dashicons dashicons-no-alt"></span>';
				}
				?>
			</td>
		</tr>
		<tr>
			<td><a href="https://wordpress.org/plugins/wp-mail-logging/" target="_blank">WP Mail Logging</a></td>
			<td>Track emails sent by this website</td>
			<td>
				<?php
				// Indicate whether this plugin is active
				if (gmuj_is_plugin_active('wp-mail-logging/wp-mail-logging.php')) {
					echo '<span style="color:green;" class="dashicons dashicons-yes"></span>';
				} else {
					echo '<span style="color:red;" class="dashicons dashicons-no-alt"></span>';
				}
				?>
			</td>
		</tr>
	</tbody>
</table>