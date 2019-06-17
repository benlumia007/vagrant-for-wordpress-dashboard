<?php
/**
 * Dashboard ( index.php )
 *
 * @package		Dashboard
 * @copyright	Copyright (C) 2019. Benjamin Lu
 * @license		GNU General Public License v2 or later ( https://www.gnu.org/licenses/gpl-2.0.html )
 * @author		Benjamin Lu ( https://benjlu.com )
 */
require_once 'functions.php';
?>
<?php require_once 'header.php'; ?>
	<header class="background-image">
		<h1 class="background-title">LEMP</h1>
		<h3 class="background-description">Linux, Nginx, MySQL, and PHP</h3>
	</header>
	<section class="content-area">
		<header class="entry-header">
			<h1 class="entry-title">Welcome to Sandbox 1.0.0</h1>
		</header>
		<section class="entry-content">
			<p>
				Welcome, you have successfully install Sandbox environment. You now full access to all 
				available features that are included on this system. If you need help, head over to the docs
				to learn more.
			</p>
			<p>
				Sandbox is a development environment and it should only meant be used for development purposes.
				It includes Nginx, MySQL, and PHP as its environment and of course, there are other features that
				are included such as Composer, WP-Cli, and PHPCS for WordPress Coding Standard.
			</p>
		</section>
	</section>
<?php require_once 'footer.php'; ?>