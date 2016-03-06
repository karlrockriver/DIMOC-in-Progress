<?php
/**
 * Template Name: Search Results
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

<div class="area-white">
	<div class="container">
		<div class="row middle-xs">
			<div class="col-xs-12 col-md-5" style="margin-bottom: 1rem">
				<h2 class="inline rc"><b>Search String:</b></h2> <h2 class="inline rc" style="margin-left: .5rem">Results</h2><h2 class="inline rc">  (number here)</h2>
			</div>
			<div class="col-xs-12 col-md-7">
				<button class="button-flat-gray inline uc">Most Recent</button>
				<button class="button-ghost-gray inline uc" style="margin-left: 1rem">Newest</button>
				<button class="button-flat-gray inline uc" style="margin-left: 1rem">Most Recent</button>
				<button class="button-ghost-gray inline uc" style="margin-left: 1rem">Newest</button>
			</div>
		</div>
	</div>  <!-- end of container -->

	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-3">
				<div class="search-box">
					<h4 class="uc ls1 text-color-2 text-center" style="margin-bottom: 1rem">Refine Search</h4>
				
				<!-- Start of dropdown results -->
				<select name="branch" class="search-drop">
				    <option value="Branch of Military">Branch of Military</option>
				    <option value="Army">Armu</option>
				    <option value="Navy">Navy</option>
				    <option value="Air Force">Air Force</option>
				</select>
				<select name="equipment" class="search-drop">
				    <option value="Equipment">Equipment</option>
				   <option value="Army">Armu</option>
				    <option value="Navy">Navy</option>
				    <option value="Air Force">Air Force</option>
				</select>
				<select name="portrait" class="search-drop">
				    <option value="Portrait">Portrait</option>
				   <option value="Army">Armu</option>
				    <option value="Navy">Navy</option>
				    <option value="Air Force">Air Force</option>
				</select>
				<select name="locations" class="search-drop">
				    <option value="Locations">Locations</option>
				   <option value="Army">Armu</option>
				    <option value="Navy">Navy</option>
				    <option value="Air Force">Air Force</option>
				</select>
				<!-- end of dropdown results -->

					<input type='date'>
					<input type='date'>
					<h5 class="uc text-color-2 ls1" style="margin: 1rem 0">Current Filters:</h5>
					<button class="button-flat-search">Filter<icon> icon</icon></button>
					<button class="button-flat-search">Filter<icon> icon</icon></button>
					<button class="button-flat-search">Filter<icon> icon</icon></button>
					<button class="button-flat-search">Filter<icon> icon</icon></button>
					<button class="button-flat-search">Filter<icon> icon</icon></button>
				</div>
			</div>

			<div class="col-xs-12 col-md-9">  <!-- start of search result cards -->
				<div class="row">
				
					<div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
						<div class="search-card">
							<div class="sc-image-bg" style="background-image: url(<?php the_field('search_image'); ?>)">
					   			<div class="container-dark-trans">
						   			<div class="row middle-xs around-xs">
						   				<div class="col-xs-12">
						   				icons
						   				</div>
						   			</div>
					   			</div>
					   		</div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

						</div> 
					</div>

					<div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
						<div class="search-card">
							<div class="sc-image-bg" style="background-image: url(<?php the_field('search_image'); ?>)">
					   			<div class="container-dark-trans">
						   			<div class="row middle-xs around-xs">
						   				<div class="col-xs-12">
						   				icons
						   				</div>
						   			</div>
					   			</div>
					   		</div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

						</div> 
					</div>

					<div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
						<div class="search-card">
							<div class="sc-image-bg" style="background-image: url(<?php the_field('search_image'); ?>)">
					   			<div class="container-dark-trans">
						   			<div class="row middle-xs around-xs">
						   				<div class="col-xs-12">
						   				icons
						   				</div>
						   			</div>
					   			</div>
					   		</div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

						</div> 
					</div>

					<div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
						<div class="search-card">
							<div class="sc-image-bg" style="background-image: url(<?php the_field('search_image'); ?>)">
					   			<div class="container-dark-trans">
						   			<div class="row middle-xs around-xs">
						   				<div class="col-xs-12">
						   				icons
						   				</div>
						   			</div>
					   			</div>
					   		</div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						</div> 
					</div>

				</div>  <!-- end of row -->

				<div class="row">
				
					<div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
						<div class="search-card">
							<div class="sc-image-bg" style="background-image: url(<?php the_field('search_image'); ?>)">
					   			<div class="container-dark-trans">
						   			<div class="row middle-xs around-xs">
						   				<div class="col-xs-12">
						   				icons
						   				</div>
						   			</div>
					   			</div>
					   		</div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

						</div> 
					</div>

					<div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
						<div class="search-card">
							<div class="sc-image-bg" style="background-image: url(<?php the_field('search_image'); ?>)">
					   			<div class="container-dark-trans">
						   			<div class="row middle-xs around-xs">
						   				<div class="col-xs-12">
						   				icons
						   				</div>
						   			</div>
					   			</div>
					   		</div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

						</div> 
					</div>

					<div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
						<div class="search-card">
							<div class="sc-image-bg" style="background-image: url(<?php the_field('search_image'); ?>)">
					   			<div class="container-dark-trans">
						   			<div class="row middle-xs around-xs">
						   				<div class="col-xs-12">
						   				icons
						   				</div>
						   			</div>
					   			</div>
					   		</div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

						</div> 
					</div>

					<div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
						<div class="search-card">
							<div class="sc-image-bg" style="background-image: url(<?php the_field('search_image'); ?>)">
					   			<div class="container-dark-trans">
						   			<div class="row middle-xs around-xs">
						   				<div class="col-xs-12">
						   				icons
						   				</div>
						   			</div>
					   			</div>
					   		</div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						</div> 
					</div>

				</div>  <!-- end of row -->

				<div class="row">
				
					<div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
						<div class="search-card">
							<div class="sc-image-bg" style="background-image: url(<?php the_field('search_image'); ?>)">
					   			<div class="container-dark-trans">
						   			<div class="row middle-xs around-xs">
						   				<div class="col-xs-12">
						   				icons
						   				</div>
						   			</div>
					   			</div>
					   		</div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

						</div> 
					</div>

					<div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
						<div class="search-card">
							<div class="sc-image-bg" style="background-image: url(<?php the_field('search_image'); ?>)">
					   			<div class="container-dark-trans">
						   			<div class="row middle-xs around-xs">
						   				<div class="col-xs-12">
						   				icons
						   				</div>
						   			</div>
					   			</div>
					   		</div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

						</div> 
					</div>

					<div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
						<div class="search-card">
							<div class="sc-image-bg" style="background-image: url(<?php the_field('search_image'); ?>)">
					   			<div class="container-dark-trans">
						   			<div class="row middle-xs around-xs">
						   				<div class="col-xs-12">
						   				icons
						   				</div>
						   			</div>
					   			</div>
					   		</div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

						</div> 
					</div>

					<div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
						<div class="search-card">
							<div class="sc-image-bg" style="background-image: url(<?php the_field('search_image'); ?>)">
					   			<div class="container-dark-trans">
						   			<div class="row middle-xs around-xs">
						   				<div class="col-xs-12">
						   				icons
						   				</div>
						   			</div>
					   			</div>
					   		</div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						</div> 
					</div>

				</div>  <!-- end of row -->

			</div>
		</div>
	</div>
</div>  <!-- end of area-white -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
