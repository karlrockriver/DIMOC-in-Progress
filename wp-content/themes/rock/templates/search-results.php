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
					<div class="dropdown">
				 		<button onclick="searchDrop()" class="dropbtn">Dropdown</button>
				 		<div id="myDropdown" class="dropdown-content">
				    		<a href="#">Link 1</a>
				    		<a href="#">Link 2</a>
				    		<a href="#">Link 3</a>
						</div>
					</div>
					<h5 class="uc text-color-2 ls1" style="margin: 1rem 0">Current Filters:</h5>
					<button class="button-flat-color-1">Filter</button>
				</div>
			</div>

			<div class="col-xs-12 col-md-9">
				<div class="row">
				
					<div class="col-xs-12 col-sm-6 col-md-4 col-xl-3">
					   
					      <img class="card-img-top" data-src="..." alt="Card image cap">
					      <div class="card-block">
					        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additionis is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
					        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
					      </div>
					    
				    </div>
				  
				    
				</div>




			</div>
		</div>
	</div>
</div>  <!-- end of area-white -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
