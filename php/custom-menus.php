<?php
/**
 * PHP file which handles custom menus specific to this child theme.
 */

// Register menus
add_action('after_setup_theme', 'gmuj_register_menus');
function gmuj_register_menus(){

    // Register menus
    register_nav_menus(array(
        'university' => 'University Menu',
        'prominent' => 'Prominent Links Menu',
        'calls-to-action' => 'Calls-to-Action Menu',
        'footer' => 'Footer Menu'
    ));

}

// Provide fallback menus
function menu_footer_fallback() {
	?>

	<ul id="footer-menu" class="menu">
		<li><a href="https://info.gmu.edu/campus-information/university-switchboard/#SkypeChat">Contact via Skype</a></li>
		<li><a href="https://diversity.gmu.edu/node/246">Title IX</a></li>
		<li><a href="https://accessibility.gmu.edu/">Accessibility</a></li>
		<li><a href="https://jobs.gmu.edu/">Jobs</a></li>
		<li><a href="https://irr2.gmu.edu/New/N_IRRHome/HEOA/">Student Consumer Information</a></li>
		<li><a href="https://www2.gmu.edu/node/2541">Privacy Statement</a></li>
		<li><a href="https://www2.gmu.edu/about-mason/freedom-information-act-requests">FOIA</a></li>
	</ul>

	<?php
}