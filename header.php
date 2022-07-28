<!DOCTYPE html>

<html <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">

		<?php wp_head(); ?>

	</head>

	<body class="container-fluid">

		<?php
		wp_body_open();
		?>
	<header class="mb-5">
		<nav class="navbar bg-transparent navbar-light navbar-expand-md p-2 rounded-2">
			<div class="container">
				<div class="navbar-brand" id="navMultiVersus">
					<a href="/" id="brandMultiVersus">M<span>ULTI</span>V<span>ERSUS</span></a>
				</div>
				<ul class="navbar-nav">
					<li class="nav-item"><a  data-mdb-animation-start="onHover" class="nav-link link-primary animated pulse" href="">News</a></li>
					<li class="nav-item"><a  data-mdb-animation-start="onHover" class="nav-link link-primary animated pulse" href="">Beginner Guide</a></li>
					<li class="nav-item"><a  data-mdb-animation-start="onHover" class="nav-link link-primary animated pulse" href="">Advanced Guide</a></li>
					<li class="nav-item"><a  data-mdb-animation-start="onHover" class="nav-link link-primary animated pulse" href="">Top tiers</a></li>
					<li class="nav-item"><a  data-mdb-animation-start="onHover" class="nav-link link-primary animated pulse" href="">Chat</a></li>
				</ul>
			</div>
		</nav>
		</header>