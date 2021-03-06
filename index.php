<?php
/**
 * Dashboard ( index.php )
 *
 * @package		Dashboard
 * @copyright	Copyright (C) 2019. Benjamin Lu
 * @license		GNU General Public License v2 or later ( https://www.gnu.org/licenses/gpl-2.0.html )
 * @author		Benjamin Lu ( https://benjlu.com )
 */
?>
<!doctype html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="profile" href="https://gmpg.org/xfn/11" />
		<link href="framework/css/style.css" rel="stylesheet" type="text/css" />
		<link href="framework/assets/fonts/custom-fonts.css" rel="stylesheet" type="text/css" />
	</head>
<body>
<div id="container" class="site-container">
	<header id="header" class="site-header">
		<div class="branding-navigation">
			<div class="site-branding">
				<h1 class="site-title"><a href="https://dashboard.test">Vagrant for WordPress</a></h1>
				<h3 class="site-description">WordPress Development</h3>
			</div>
			<div class="primary-navigation">
				<ul>
					<li><a href="https://dashboard.test/sites">Sites</a></li>
					<li><a href="https://dashboard.test/phpmyadmin" target="_blank">phpMyAdmin</a></li>
					<li><a href="http://dashboard.test:8025" target="_blank">MailHog</a></li>
					<li><a href="https://dashboard.test/phpinfo.php" target="_blank">PHPInfo</a></li>
					<li><a href="https://dashboard.test/docs">Docs</a></li>
					<li><a href="https://dashboard.test/support">Support</a></li>
				</ul>
			</div>
		</div>
	</header>
	<section id="content" class="site-content">
		<header class="background-image">
			<h1 class="background-title">Vagrant Up</h1>
			<h3 class="background-description">Linux, Nginx, MySQL, and PHP</h3>
		</header>
		<section class="content-area">
			<header class="entry-header">
				<h1 class="entry-title">Welcome to Sandbox</h1>
			</header>
			<section class="entry-content">
				<p>
					Welcome, you have successfully installed the Sandbox ( WordPress Development ) environment. You now have full 
					access to all available features that are included in this system. If you need help, head over to the docs to 
					learn more.
				</p>
				<p>
				Sandbox is free, a local virtual machine server that can be used under Linux, MacOS, and Windows with just a few command 
				lines and ready to deploy by vagrant up and will download everything you need to your own local workstation.
				</p>
				<h1>Requirements</h1>
				<p>
				Sandbox requires the latest version of VirtualBox and Vagrant to be installed on any host computer that supports virtualization. 
				<a href="https://www.vagrantup.com/" target="_blank">Vagrant</a> is a tool that helps build and manage a virtual machine environment 
				within one single workflow.
				</p>
				<p>
				In addition to VirtualBox as the main provider for Vagrant. Sandbox also supports two other providers and they are Microsoft Hyper-V 
				and Parallels. To learn more about Hyper-V and Parallels, head over the docs.
				</p>
			</section>
		</section>
	</section>
	<footer id="footer" class="site-footer">
		<div class="site-info">
			Copyright (C) 2019. All Rights Reserved
		</div>
	</footer>
</div>
</body>
</html>
