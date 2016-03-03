<?php
/**
 * Template Name: Home
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Rock
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


<div class="home-hero" style="background-image: url(<?php the_field('home_hero_image'); ?>)">

<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 col-md-8 col-md-offset-2">
			<div class="search-container">
				<div class="search-input">
					<input type="search" placeholder="Search here">
					<div class="type-selector">
						<label>
							<input name="photos" checked="checked" type="checkbox">Photos
						</label>
						<label>
							<input name="videos" checked="checked" type="checkbox">Videos
						</label>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

	<!-- <div class="container-color-2-trans">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h3 class="rc text-white"><?php the_field(home_hero_header); ?></h3>
				</div>
			</div>
		</div>
	</div> -->
</div>

<div class="area-warm-1">
	<div class="container">
		<div class="row"> <!-- header for collections -->
			<div class="col-xs-12">
				<div class="container-header-color-4">
					<h5 class="uc rc ls1"><?php the_field('home_collection-1-header'); ?></h5>
				</div>
			</div>
		</div>

		<!-- Start of thumbnails -->
		<div class="row">
			<div class="col-xs-12 col-md-4">
				<a href="#">
					<div class="home-thumbnail" style="background-image: url(<?php the_field('home_hero_image'); ?>)">
						<div class="thumbnail-container">
							<h4 class="rc">Category Name</h4>
						</div>
					</div>
				</a>
			</div>
			<div class="col-xs-12 col-md-4">
				<a href="#">
					<div class="home-thumbnail" style="background-image: url(<?php the_field('home_hero_image'); ?>)">
						<div class="thumbnail-container">
							<h4 class="rc">Category Name</h4>
						</div>
					</div>
				</a>
			</div>
			<div class="col-xs-12 col-md-4">
				<a href="#">
					<div class="home-thumbnail" style="background-image: url(<?php the_field('home_hero_image'); ?>)">
						<div class="thumbnail-container">
							<h4 class="rc">Category Name</h4>
						</div>
					</div>
				</a>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4">
				<a href="#">
					<div class="home-thumbnail" style="background-image: url(<?php the_field('home_hero_image'); ?>)">
						<div class="thumbnail-container">
							<h4 class="rc">Category Name</h4>
						</div>
					</div>
				</a>
			</div>
			<div class="col-xs-12 col-md-4">
				<a href="#">
					<div class="home-thumbnail" style="background-image: url(<?php the_field('home_hero_image'); ?>)">
						<div class="thumbnail-container">
							<h4 class="rc">Category Name</h4>
						</div>
					</div>
				</a>
			</div>
			<div class="col-xs-12 col-md-4">
				<a href="#">
					<div class="home-thumbnail" style="background-image: url(<?php the_field('home_hero_image'); ?>)">
						<div class="thumbnail-container">
							<h4 class="rc text-center">Category Name</h4>
						</div>
					</div>
				</a>
			</div>
		</div>
		<!-- End of thumbnails -->

		<!-- Header for Browse Collections -->
		<div class="row middle-xs">
			<div class="col-xs-12 text-center">
				<h5 class="uc text-color-3" style="margin: 2rem 0"><?php the_field('home_browse_header'); ?></h5>
			</div>
		</div>

		<!-- Start of browse categories -->
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
				<div class="browse-header text-center uc text-color-4 ls1">header</div>
					<hr>
						<ul class="browse-list">
							<li class="browse-list-item rc">items</li>
						</ul>
					</hr>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
				<div class="browse-header text-center uc text-color-4 ls1">header</div>
					<hr>
						<ul class="browse-list">
							<li class="browse-list-item rc"></li>
						</ul>
					</hr>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
				<div class="browse-header text-center uc text-color-4 ls1">header</div>
					<hr>
						<ul class="browse-list">
							<li class="browse-list-item rc"></li>
						</ul>
					</hr>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
				<div class="browse-header text-center uc text-color-4 ls1">header</div>
					<hr>
						<ul class="browse-list">
							<li class="browse-list-item rc"></li>
						</ul>
					</hr>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
				<div class="browse-header text-center uc text-color-4 ls1">header</div>
					<hr>
						<ul class="browse-list">
							<li class="browse-list-item rc"></li>
						</ul>
					</hr>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
				<a href="#"><div class="browse-bg-image text-center" style="display: flex; align-items: center; background-image:linear-gradient(to bottom, rgba(28,81,127, .7) 0%, rgba(75,125,180,0.8) 100%), url(<?php the_field('home_hero_image'); ?>)">
					<h4 class="uc ls1">Browse all collections</h4>
				</div></a>
			</div>
		</div>

	</div>
</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
