<?php get_header(); ?>

<script>

</script>

<style>


#wsu-signatures img {
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
	padding-top: 75px;
	}

</style>

<main class="fill-window-height">

<?php get_template_part('parts/headers'); ?>

<section id="wsu-signatures" class="row single">
	
	<div class="column one row halves">
	
		<center>
		<img src="/wp-content/themes/brand/images/pages/logos/wsu-signature-default.svg" class="wsu-signature-default">
		<img src="/wp-content/themes/brand/images/pages/logos/wsu-signature-horizontal.svg" class="wsu-signature-horizontal">
		<img src="/wp-content/themes/brand/images/pages/logos/wsu-signature-vertical.svg" class="wsu-signature-vertical">
		</center>
		
		<button class="detail">
			<header>
				<h3> </h3>
			</header>
		</button>
		<article class="columnar">
		<div class="details">
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
				<?php 
				$column = get_post_meta( get_the_ID(), 'section-1-6', true );
				if( ! empty( $column ) ) { echo $column; }
				?>
			</div>
			<hr>
			<div class="column seven">
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
	
	<div class="column one row halves">
	
		<center>
		<img src="/wp-content/themes/brand/images/pages/logos/campuses.png" class="wsu-campuses">
		</center>
		
		<button class="detail">
			<header>
				<h3> </h3>
			</header>
		</button>
		<article class="columnar">
		<div class="details">
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
	
	<div class="column one row halves">
	
		<center>
		<img src="/wp-content/themes/brand/images/pages/logos/units.png" class="wsu-units">
		</center>
		
		<button class="detail">
			<header>
				<h3> </h3>
			</header>
		</button>
		<article>
		<div class="details">
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
			
		</div><!--/.details-->

		
		</article>
		

		
	</div>
	
</section>

<section id="abbreviated-signatures" class="row single">
	
	<div class="column one row halves">
	
		<center>
		<img src="/wp-content/themes/brand/images/pages/logos/abbreviated.png" class="wsu-units">
		</center>
		
		<button class="detail">
			<header>
				<h3> </h3>
			</header>
		</button>
		<article>
		<div class="details">
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
			
		</div><!--/.details-->

		
		</article>
		

		
	</div>
	
</section>

<section id="shield-spirit-marks" class="row single">
	
	<div class="column one row halves">
	
		<center>
		<img src="/wp-content/themes/brand/images/pages/logos/shield-spirit.png" class="wsu-units">
		</center>
		
		<button class="detail">
			<header>
				<h3> </h3>
			</header>
		</button>
		<article>
		<div class="details">
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
			
		</div><!--/.details-->

		
		</article>
		

		
	</div>
	
</section>

<section id="social-badges" class="row single">
	
	<div class="column one row halves">
	
		<center>
		<img src="/wp-content/themes/brand/images/pages/logos/badges.png" class="wsu-units">
		</center>
		
		<button class="detail">
			<header>
				<h3> </h3>
			</header>
		</button>
		<article>
		<div class="details">
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
			
		</div><!--/.details-->

		
		</article>
		

		
	</div>
	
</section>


</main>

<?php get_footer(); ?>