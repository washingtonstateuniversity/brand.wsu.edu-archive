<?php get_header(); ?>

<script>

</script>

<style>
main section:first-of-type {
	background: url('/wp-content/themes/brand/images/pages/editorial-style/clearconciseconsistent.png') 80% -15px no-repeat;
	background-size: 30% auto;
	}
button.detail {
	height: auto;
	padding: 0px;
	overflow: visible;
	}
button.detail header {
	text-align: left;
	padding: 15px 0px;
	}
button.detail header h3 {
	display: inline-block;
	margin: 0px;
	}
.details,
.detailed .details {
	xborder-top: none;
	border-top-color: white;
	border-top-style: dotted;
	}
section:first-of-type article {
	padding: 60px 30px;
	}
section:nth-of-type(even) {
	background-color: #EFF0F1;
	}
main section ~ section .column article {
	padding: 0px;
	
	}
xmain section ~ section .column article .details {
	padding: 30px;
	}
main section ~ section button.detail {
	background-position: 750px center;
	padding-left: 4.7em;
	}

.details li {
	list-style: none;
	margin: 0px;
	padding: 0px 0px 15px 0px;
	}
#spelling strong {
	color: #ADA400;
	}
.details ul li ul li  {
	padding-left: 1.5em;
	padding-bottom: 0px;
	padding-top: .2em;
	}

</style>

<main>

<?php get_template_part('parts/headers'); ?>

<section class="row sidebar">
	
	<div class="column one">
		
		<?php while ( have_posts() ) : the_post(); ?>
		
		<article>
			<?php the_content(); ?>
		</article>
		
		<?php endwhile; ?>
		
	</div>
	
</section>

<section id="quick-tips" class="row halves gutter wide">
	<button class="detail unbound recto">
	<header>
			<h3>Quick Tips: <small>answers to common questions</small></h3>
		</header>
	</button>
	<div class="details">
	<article class="padless">
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
	</article>
	</div><!--/.details-->

</section>

<section id="capitalization" class="row halves gutter wide">
	<button class="detail">
		<header>
			<h3>Capitalization: <small>not always a capital idea</small></h3>
		</header>
	</button>
	<div class="details">
	<article class="padless">
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
	</article>
	</div><!--/.details-->
	
</section>


<section id="punctuation" class="row halves gutter wide">

	<button class="detail">
		<header>
			<h3>Punctuation: <small>deliver the intended meaning</small></h3>
		</header>
	</button>
	<div class="details">
	<article class="padless">
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
	</article>
	</div><!--/.details-->

</section>

<section id="spelling" class="row halves gutter wide">

	<button class="detail">
		<header>
			<h3>Spelling: <small>it's good grooming</small></h3>
		</header>
	</button>
	<div class="details">
	<article class="padless">
		<p class="guttered wide">Consult <a href="http://www.merriam-webster.com/"><em>Merriam-Webster's Collegiate Dictionary</em></a> for spelling and word breaks. American spellings are preferred over British.</p>
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
	</article>
	</div><!--/.details-->

</section>

<section id="numbers" class="row halves gutter wide">
	<button class="detail">
		<header>
			<h3>Numbers: <small>a simple equation for readability</small></h3>
		</header>
	</button>
	<div class="details">
	<article class="padless">
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
	</article>
	</div><!--/.details-->

</section>

</main>

<?php get_footer(); ?>