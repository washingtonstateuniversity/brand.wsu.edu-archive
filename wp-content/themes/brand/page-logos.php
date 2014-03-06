<?php get_header(); ?>

<script>

</script>

<style>


#wsu-signatures center img {
	margin-bottom: 60px;
	margin-left: auto;
	margin-right: auto;
	}
	
img.wsu-signature-default { width: 330px; }
img.wsu-signature-horizontal { width: 594px; }
.size-lt-large img.wsu-signature-horizontal { width: 75%; }
img.wsu-signature-vertical { width: 264px; }

section:nth-of-type(even) {
	background-color: #EFF0F1;
	}
div.details .column {
	padding-bottom: 40px;
	}
.detailed button.detail {
	margin-bottom: 0px;
	}
button.detail header:after {
	content: "details";
	display: inline-block;
	}
button.detail:hover header:after {
	color: #8f7e35;
	}
.detailed button.detail header:after {
	content: "";
	}

</style>

<main class="spine-custom-page">

<?php get_template_part('parts/headers'); ?>

<section id="wsu-signatures" class="row single">
	
	<div class="column one row halves gutter wide">
	
		<center style="margin-top: 100px;"><img src="/wp-content/themes/brand/images/pages/logos/wsu-signature-default.svg" class="wsu-signature-default"></center>
		<center><img src="/wp-content/themes/brand/images/pages/logos/wsu-signature-horizontal.svg" class="wsu-signature-horizontal"></center>
		<center><img src="/wp-content/themes/brand/images/pages/logos/wsu-signature-vertical.svg" class="wsu-signature-vertical"></center>
		
		<button class="detail">
			<header></header>
		</button>
		
		<div class="details">
		
		<article class="padless">
			<hr>
			<div class="column one">
				<?php 
				$column = get_post_meta( get_the_ID(), 'section-1-1', true );
				if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
				?>
			</div>
			<div class="column two">
				<?php 
				$column = get_post_meta( get_the_ID(), 'section-1-2', true );
				if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
				?>
			</div>
			<hr>
			<div class="column three">
				<?php 
				$column = get_post_meta( get_the_ID(), 'section-1-3', true );
				if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
				?>
			</div>
			<div class="column four">
				<?php 
				$column = get_post_meta( get_the_ID(), 'section-1-4', true );
				if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
				?>
			</div>
			<hr>
			<div class="column five">
				<?php 
				$column = get_post_meta( get_the_ID(), 'section-1-5', true );
				if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
				?>
			</div>
			<div class="column six">
				<img src="/wp-content/themes/brand/images/pages/logos/figures/clearspace.png" class="max-width">
			</div>
			<hr>
			<div id="clear-space" class="column seven">
				<?php 
				$column = get_post_meta( get_the_ID(), 'section-1-7', true );
				if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
				?>
			</div>
			<div class="column eight">
				<?php 
				$column = get_post_meta( get_the_ID(), 'section-1-8', true );
				if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
				?>
			</div>
			
		</article>
			
		</div><!--/.details-->

	</div>
	
</section>

<section id="campus-signatures" class="row single">

	<style>
	
		#campus-signatures .halves img { width: 80%; }
		#campus-signatures .single img { width: 90%; }
		.primary-sigs img { margin-bottom: 40px; }
	
	</style>

	<h2 class="marginalized">campus</h2>

	<div class="row halves primary-sigs">
	
		<center class="column one"><img src="/wp-content/themes/brand/images/pages/logos/campus/wsu-spokane-signature-primary.svg"></center>
		<center class="column two"><img src="/wp-content/themes/brand/images/pages/logos/campus/wsu-globalcampus-signature-primary.svg"></center>
	
	</div>
	
	<div class="row single horizontal-sigs">
	
		<center class="column one"><img src="/wp-content/themes/brand/images/pages/logos/campus/wsu-vancouver-signature-horizontal.svg"></center>
		<center class="column two"><img src="/wp-content/themes/brand/images/pages/logos/campus/wsu-extension-signature-horizontal.svg"></center>
	
	</div>
	
	<div class="row halves vertical-sigs">
	
		<center class="column one"><img src="/wp-content/themes/brand/images/pages/logos/campus/wsu-healthsciences-signature-vertical.svg"></center>
		<center class="column two"><img src="/wp-content/themes/brand/images/pages/logos/campus/wsu-tricities-signature-vertical.svg"></center>
	
	</div>
	
	<div class="column one row halves wide gutter">
	
		
		<button class="detail">
			<header></header>
		</button>
		
		<div class="details">
		
		<article class="padless">
		
			<hr>
			
			<div class="column one">
				<?php 
				$column = get_post_meta( get_the_ID(), 'section-2-1', true );
				if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
				?>
			</div>
			<div class="column two">
				<?php 
				$column = get_post_meta( get_the_ID(), 'section-2-2', true );
				if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
				?>
			</div>
			
		</article>
			
		</div><!--/.details-->

	</div>
	
</section>

<section id="unit-signatures" class="row single">

	<style>
		.unit-sigs img { width: 320px; margin-bottom: 0px; }
		#unit-signatures .unit-sigs div.column { height: 130px; }
	</style>

	<h2 class="marginalized">unit</h2>
	
	<div class="column one row halves gutter wide unit-sigs">
	
		<div class="column one">
			<img src="/wp-content/themes/brand/images/pages/logos/unit/wsu-college-cahnrs-unit.svg" class="max-width centered absolutely">
		</div>
		
		<div class="column two">
			<img src="/wp-content/themes/brand/images/pages/logos/unit/wsu-college-education.svg" class="max-width centered absolutely">
		</div>
				
		<div class="column three">
			<img src="/wp-content/themes/brand/images/pages/logos/unit/wsu-office-chancellor.svg" class="max-width centered absolutely">
		</div>
		
		<div class="column four">
			<img src="/wp-content/themes/brand/images/pages/logos/unit/wsu-department-ccgrs.svg" class="max-width centered absolutely">
		</div>
		
		<div class="column five">
			<img src="/wp-content/themes/brand/images/pages/logos/unit/wsu-office-studentdevelopment.svg" class="max-width centered absolutely">
		</div>
		
		<div class="column six">
			<img src="/wp-content/themes/brand/images/pages/logos/unit/wsu-unit-honorscollege.svg" class="max-width centered absolutely">
		</div>
		
		<div class="column seven">
			<img src="/wp-content/themes/brand/images/pages/logos/unit/wsu-college-murrow.svg" class="max-width centered absolutely">
		</div>
		
		<div class="column eight">
			<img src="/wp-content/themes/brand/images/pages/logos/unit/wsu-unit-viticultureenology.svg" class="max-width centered absolutely">
		</div>
	
	</div>
	
	<div class="column one row halves gutter wide">
		
		<button class="detail">
			<header></header>
		</button>
		
		<div class="details">
		
		<article class="padless">
		
			<hr>
			
			<div class="column one">
				<?php 
				$column = get_post_meta( get_the_ID(), 'section-3-1', true );
				if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
				?>
			</div>
			<div class="column two">
				<?php 
				$column = get_post_meta( get_the_ID(), 'section-3-2', true );
				if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
				?>
			</div>
			
		</article>
			
		</div><!--/.details-->

	</div><!--/.column.row.halves-->
	
</section>

<section id="abbreviated-signatures" class="row single">

	<style>
		#abbreviated-signatures img { margin-bottom: 60px; }
		#abbreviated-signatures .abbreviated-vertical img { margin-bottom: 0px; }
	</style>

	<h2 class="marginalized">abbreviated campus and unit</h2>
	
	<div class="column one row halves gutter wide">
	
		<div class="column one">
			<img src="/wp-content/themes/brand/images/pages/logos/abbreviated/wsu-tricities-abbreviated-horizontal.svg" style="height: 50px;" class="max-width">
		</div>
		
		<div class="column two">
			<img src="/wp-content/themes/brand/images/pages/logos/abbreviated/wsu-education-abbreviated-horizontal.svg" style="height: 50px;" class="max-width">
		</div>
	
	</div>
	
	<div class="column one row single gutter wide">
	
		<div class="column one">
			<img src="/wp-content/themes/brand/images/pages/logos/abbreviated/wsu-psychology-abbreviated-horizontal.svg" style="height: 50px;" class="max-width">
		</div>
	
	</div>
	
	<div class="column one row halves gutter wide">
	
		<div class="column one">
			<img src="/wp-content/themes/brand/images/pages/logos/abbreviated/wsu-engineeringarchitecture-abbreviated-horizontal.svg" style="height: 100px;">
		</div>
		
		<div class="column two">
			<img src="/wp-content/themes/brand/images/pages/logos/abbreviated/wsu-viticulture-abbreviated-horizontal.svg" style="height: 100px;">
		</div>
	
	</div>
	
	<div class="column one row halves gutter wide abbreviated-vertical">
	
		<div class="column one">
			<img src="/wp-content/themes/brand/images/pages/logos/abbreviated/wsu-vancouver-abbreviated-vertical.svg">
		</div>
		
		<div class="column two">
			<img src="/wp-content/themes/brand/images/pages/logos/abbreviated/wsu-honorscollege-abbreviated-vertical.svg">
		</div>
	
	</div>
	
	<div class="column one row halves gutter wide">
		
		<button class="detail">
			<header></header>
		</button>
		<article class="padless">
		
		<div class="details">
		
			<hr>
		
			<div class="column one">
				<?php 
				$column = get_post_meta( get_the_ID(), 'section-4-1', true );
				if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
				?>
			</div>
			<div class="column two">
				<?php 
				$column = get_post_meta( get_the_ID(), 'section-4-2', true );
				if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
				?>
			</div>
			
		</div><!--/.details-->

		</article>
		
	</div>
	
</section>

<section id="shield-spirit-marks" class="row single">

	<style>
	
		#shield-spirit-marks .halves figure .column { background-size: 50%; background-repeat: no-repeat; background-position: center center; height: 396px; }
	
	</style>

	<h2 class="marginalized">shield and spirit marks</h2>
	
	<div class="column one row halves gutter wide">

		<article class="padless">
		
		<figure>
			<center class="column one" style="background-image: url(/wp-content/themes/brand/images/pages/logos/wsu-shield-mark.svg); background-size: 45%;"></center>
			<center class="column two" style="background-image: url(/wp-content/themes/brand/images/pages/logos/wsu-cougarhead.png)"></center>
		</figure>
		
		<button class="detail">
			<header></header>
		</button>
		<div class="details">
		
			<hr>
		
			<div class="column one">
				<?php 
				$column = get_post_meta( get_the_ID(), 'section-5-1', true );
				if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
				?>
			</div>
			<div class="column two">
				<?php 
				$column = get_post_meta( get_the_ID(), 'section-5-2', true );
				if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
				?>
			</div>
			
		</div><!--/.details-->

		</article>
		
	</div>
	
</section>

<section id="social-badges" class="row single">
	
	<h2 class="marginalized">social media badges</h2>
	
	<div class="row halves">
		<center class="column one">
			<img src="/wp-content/themes/brand/images/pages/logos/social/wsu-central-social-badge.png" style="width: 150px;">
			<h3 class="marginalized-top">central channels</h3>
			<p>WSU Pullman<br> WSU Spokane<br> WSU Tri-Cities<br> WSU Vancouver<br> WSU Global Campus<br> Health Sciences<br> WSU Extension</p>
		</center>
		<center class="column two">
			<img src="/wp-content/themes/brand/images/pages/logos/social/wsu-unit-social-badge.png" style="width: 150px;">
			<h3 class="marginalized-top">other channels</h3>
			<p>University units,<br> campaigns,<br> or individuals<br> representing WSU<br> in an official capacity</p>
		</center>
	</div>
	
	<div class="column one row sidebar gutter wide">
		
		<button class="detail">
			<header></header>
		</button>
		
		<article class="padless">
		<div class="details">
		
			<hr>
		
			<div class="column one">
				<?php 
				$column = get_post_meta( get_the_ID(), 'section-6-1', true );
				if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
				?>
			</div>
			<div class="column two">
				<?php 
				$column = get_post_meta( get_the_ID(), 'section-6-2', true );
				if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
				?>
			</div>
			
		</div><!--/.details-->

		</article>
		
	</div>
	
</section>

<section id="seal" class="row single">
	
	<h2 class="marginalized">seal</h2>
	
	<center class="column one">
		<img src="/wp-content/themes/brand/images/pages/logos/wsu-seal.png">
	</center>
	
	<div class="column one row sidebar gutter wide">
		
		<button class="detail">
			<header>
				<h3> </h3>
			</header>
		</button>
		
		<article class="padless">
		<div class="details">
		
			<hr>
		
			<div class="column one">
				<?php 
				$column = get_post_meta( get_the_ID(), 'section-7-1', true );
				if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
				?>
			</div>
			<div class="column two"></div>
			
		</div><!--/.details-->

		</article>
		
	</div>
	
</section>


</main>

<?php get_footer(); ?>