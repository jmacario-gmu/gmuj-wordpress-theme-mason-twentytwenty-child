<!-- Content for the WordPress admin dashboard 'Recommended plugins' content box -->
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
			<td><a href="https://wordpress.org/plugins/amr-shortcode-any-widget/" target="_blank">amr shortcode any widget</a></td>
			<td>Use widgets on any page</td>
			<td>
				<?php 
				// Indicate whether this plugin is active
				if (gmuj_is_plugin_active('amr-shortcode-any-widget/amr-shortcode-any-widget.php')) { 
					echo '<span style="color:green;" class="dashicons dashicons-yes"></span>';
				} else {
					echo '<span style="color:red;" class="dashicons dashicons-no-alt"></span>';
				}
				?>
			</td>
		</tr>
		<tr>
			<td><a href="https://wordpress.org/plugins/jquery-collapse-o-matic/" target="_blank">Collapse-O-Matic</a></td>
			<td>Organize content with expandable content areas</td>
			<td>
				<?php 
				// Indicate whether this plugin is active
				if (gmuj_is_plugin_active('jquery-collapse-o-matic/collapse-o-matic.php')) { 
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