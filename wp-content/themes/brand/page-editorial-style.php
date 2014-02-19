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
	padding-left: 30px;
	}
button.detail header h3 {
	display: inline-block;
	margin: 0px;
	}
button.detail::before {
	position: relative;
	float: right;
	right: 0px;
	padding-top: 15px;
	padding-right: 15px;
	color: #5e6a71;
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
main section ~ section .column article .details {
	padding: 30px;
	}
a {
	color: #C69214;
	}
.details li {
	list-style: none;
	padding: 0px;
	margin: 0px 0px 15px 0px;
	}

</style>

<main>

<?php get_template_part('parts/headers'); ?>

<section class="row halves">
	
	<div class="column one">
		
		<?php while ( have_posts() ) : the_post(); ?>
		
		<article>
			<?php the_content(); ?>
		</article>
		
		<?php endwhile; ?>
		
	</div>
	
</section>

<section id="quick-tips" class="row margin">
	<button class="detail">
	<header>
			<h3>Quick Tips: <small>answers to common questions</small></h3>
		</header>
	</button>
	<div class="column one">

		<article>
			
		<div class="details">
			<div class="column one">
				<?php 
				$column = get_post_meta( get_the_ID(), 'section-2-1', true );
				if( ! empty( $column ) ) { echo $column; }
				?>
		</div><!--/.details-->
		</article>

	</div>

</section>

<section id="capitalization" class="row margin">
	<button class="detail">
	<header>
			<h3>Capitalization: <small>not always a capital idea</small></h3>
		</header>
	</button>
	<div class="column one">
		
		<article>

		<div class="details">
			<div class="column one">
				<?php 
				$column = get_post_meta( get_the_ID(), 'section-3-1', true );
				if( ! empty( $column ) ) { echo $column; }
				?>
		</div><!--/.details-->
		</article>
		
	</div>
	
</section>


<section id="punctuation" class="row margin">
	<button class="detail">
	<header>
			<h3>Punctuation: <small>deliver the intended meaning</small></h3>
		</header>
	</button>
	<div class="column one">
		
		<article>

		<div class="details">
			<div class="column one">
				<?php 
				$column = get_post_meta( get_the_ID(), 'section-4-1', true );
				if( ! empty( $column ) ) { echo $column; }
				?>
		</div><!--/.details-->
		</article>
		
	</div>

</section>

<section id="we-pursue" class="row margin">
	<button class="detail">
		<header>
			<h3>Spelling: <small>it's good grooming</small></h3>
		</header>
	</button>
	<div class="column one">
		
		<article>
			
		<div class="details">
			<div class="column one">
				<?php 
				$column = get_post_meta( get_the_ID(), 'section-5-1', true );
				if( ! empty( $column ) ) { echo $column; }
				?>
		</div><!--/.details-->
		</article>
		
	</div>

</section>

<section id="we-offer" class="row sidebar">
	<button class="detail">
		<header>
			<h3>Numbers: <small>a simple equation for readability</small></h3>
		</header>
	</button>
	<div class="column one">

		<article>
			
		<div class="details">
			<?php 
			$column = get_post_meta( get_the_ID(), 'section-6-1', true );
			if( ! empty( $column ) ) { echo $column; }
			?>
		</div><!--/.details-->
		</article>

	</div>

</section>



</main>

<?php get_footer(); ?>