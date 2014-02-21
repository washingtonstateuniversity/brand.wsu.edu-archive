<?php get_header(); ?>

<script>

</script>

<style>


#wsu-signatures center img {
	margin-bottom: 100px;
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
section {
	padding-top: 50px;
	padding-bottom: 25px;
	}
.detailed button.detail {
	margin-bottom: 0px;
	}

</style>

<main class="fill-window-height">

<?php get_template_part('parts/headers'); ?>

<section id="wsu-signatures" class="row single">
	
	<div class="column one row halves gutter wide">
	
		
		<center><img src="/wp-content/themes/brand/images/pages/logos/wsu-signature-default.svg" class="wsu-signature-default"></center>
		<center><img src="/wp-content/themes/brand/images/pages/logos/wsu-signature-horizontal.svg" class="wsu-signature-horizontal"></center>
		<center><img src="/wp-content/themes/brand/images/pages/logos/wsu-signature-vertical.svg" class="wsu-signature-vertical"></center>
		
		
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
				$column = get_post_meta( get_the_ID(), 'section-1-1', true );
				if( ! empty( $column ) ) { echo $column; }
				?>
			</div>
			<div class="column two">
				<?php 
				$column = get_post_meta( get_the_ID(), 'section-1-2', true );
				if( ! empty( $column ) ) { echo $column; }
				?>
			</div>
			<hr>
			<div class="column three">
				<?php 
				$column = get_post_meta( get_the_ID(), 'section-1-3', true );
				if( ! empty( $column ) ) { echo $column; }
				?>
			</div>
			<div class="column four">
				<?php 
				$column = get_post_meta( get_the_ID(), 'section-1-4', true );
				if( ! empty( $column ) ) { echo $column; }
				?>
			</div>
			<hr>
			<div class="column five">
				<?php 
				$column = get_post_meta( get_the_ID(), 'section-1-5', true );
				if( ! empty( $column ) ) { echo $column; }
				?>
			</div>
			<div class="column six">
				<img src="/wp-content/themes/brand/images/pages/logos/clearspace.png">
			</div>
			<hr>
			<div id="clear-space" class="column seven">
				<?php 
				$column = get_post_meta( get_the_ID(), 'section-1-7', true );
				if( ! empty( $column ) ) { echo $column; }
				?>
			</div>
			<div class="column eight">
				<?php 
				$column = get_post_meta( get_the_ID(), 'section-1-8', true );
				if( ! empty( $column ) ) { echo $column; }
				?>
			</div>
			
		</div><!--/.details-->

		
		</article>
		

		
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
	
		<center class="column one"><img src="/wp-content/themes/brand/images/pages/logos/wsu-spokane-signature-primary.svg"></center>
		<center class="column two"><img src="/wp-content/themes/brand/images/pages/logos/wsu-globalcampus-signature-primary.svg"></center>
	
	</div>
	
	<div class="row single horizontal-sigs">
	
		<center class="column one"><img src="/wp-content/themes/brand/images/pages/logos/wsu-vancouver-signature-horizontal.svg"></center>
		<center class="column two"><img src="/wp-content/themes/brand/images/pages/logos/wsu-extension-signature-horizontal.svg"></center>
	
	</div>
	
	<div class="row halves vertical-sigs">
	
		<center class="column one"><img src="/wp-content/themes/brand/images/pages/logos/wsu-healthsciences-signature-vertical.svg"></center>
		<center class="column two"><img src="/wp-content/themes/brand/images/pages/logos/wsu-tricities-signature-vertical.svg"></center>
	
	</div>
	
	<div class="column one row halves wide gutter">
	
		
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
				$column = get_post_meta( get_the_ID(), 'section-2-1', true );
				if( ! empty( $column ) ) { echo $column; }
				?>
			</div>
			<div class="column two">
				<?php 
				$column = get_post_meta( get_the_ID(), 'section-2-2', true );
				if( ! empty( $column ) ) { echo $column; }
				?>
			</div>
			
		</div><!--/.details-->

		
		</article>
				
	</div>
	
</section>

<section id="unit-signatures" class="row single">

	<h2 class="marginalized">unit</h2>
	
	<div class="column one row halves gutter wide">
	
		<center>
		<img src="/wp-content/themes/brand/images/pages/logos/units.png" class="wsu-units">
		</center>
		
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
				$column = get_post_meta( get_the_ID(), 'section-3-1', true );
				if( ! empty( $column ) ) { echo $column; }
				?>
			</div>
			<div class="column two">
				<?php 
				$column = get_post_meta( get_the_ID(), 'section-3-2', true );
				if( ! empty( $column ) ) { echo $column; }
				?>
			</div>
			
		</div><!--/.details-->

		</article>

	</div>
	
</section>

<section id="abbreviated-signatures" class="row single">

	<h2 class="marginalized">abbreviated campus and unit</h2>
	
	<div class="column one row halves gutter wide">
	
		<center>
		<img src="/wp-content/themes/brand/images/pages/logos/abbreviated.png" class="wsu-units">
		</center>
		
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
				$column = get_post_meta( get_the_ID(), 'section-4-1', true );
				if( ! empty( $column ) ) { echo $column; }
				?>
			</div>
			<div class="column two">
				<?php 
				$column = get_post_meta( get_the_ID(), 'section-4-2', true );
				if( ! empty( $column ) ) { echo $column; }
				?>
			</div>
			
		</div><!--/.details-->

		</article>
		
	</div>
	
</section>

<section id="shield-spirit-marks" class="row single">

	<style>
	
		#shield-spirit-marks .halves .column { background-size: 50%; background-repeat: no-repeat; background-position: center center; height: 396px; }
	
	</style>

	<h2 class="marginalized">shield and spirit marks</h2>
	
	<div class="column one row halves gutter wide">

		<div class="row halves">
			<center class="column one" style="background-image: url(/wp-content/themes/brand/images/pages/logos/wsu-shield-mark.svg)"></center>
			<center class="column two" style="background-image: url(/wp-content/themes/brand/images/pages/logos/wsu-cougarhead.png)"></center>
		</div>
		
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
				$column = get_post_meta( get_the_ID(), 'section-5-1', true );
				if( ! empty( $column ) ) { echo $column; }
				?>
			</div>
			<div class="column two">
				<?php 
				$column = get_post_meta( get_the_ID(), 'section-5-2', true );
				if( ! empty( $column ) ) { echo $column; }
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
			<img src="/wp-content/themes/brand/images/pages/logos/wsu-central-social-badge.png" style="width: 150px;">
			<h3>central channels</h3>
			<p>WSU Pullman<br> WSU Spokane<br> WSU Tri-Cities<br> WSU Vancouver<br> WSU Global Campus<br> Health Sciences<br> WSU Extension</p>
		</center>
		<center class="column two">
			<img src="/wp-content/themes/brand/images/pages/logos/wsu-unit-social-badge.png" style="width: 150px;">
			<h3>other channels</h3>
			<p>University units,<br> campaigns,<br> or individuals<br> representing WSU<br> in an official capacity</p>
		</center>
	</div>
	
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
				$column = get_post_meta( get_the_ID(), 'section-6-1', true );
				if( ! empty( $column ) ) { echo $column; }
				?>
			</div>
			<div class="column two">
				<?php 
				$column = get_post_meta( get_the_ID(), 'section-6-2', true );
				if( ! empty( $column ) ) { echo $column; }
				?>
			</div>
			
		</div><!--/.details-->

		</article>
		
	</div>
	
</section>

<section id="seal" class="row single">
	
	<h2 class="marginalized">seal</h2>
	
	<center class="column one">
		<img src="/wp-content/themes/brand/images/pages/logos/wsu-seal.png" style="width: 150px;">
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
				if( ! empty( $column ) ) { echo $column; }
				?>
			</div>
			<div class="column two"></div>
			
		</div><!--/.details-->

		</article>
		
	</div>
	
</section>


</main>

<?php get_footer(); ?>