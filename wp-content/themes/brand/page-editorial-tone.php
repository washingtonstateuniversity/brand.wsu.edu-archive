<?php get_header(); ?>

<script>
	

</script>

<style>

main section:first-of-type .column.one {
	padding-top: 130px;
	}

section > article {
	padding: 0px;
	}
section > article > header {
	font-size: 1.5em;
	padding: 15px 30px 0px 30px;
	}
#our-voice {
	padding-bottom: 20px;
	}
#brand-drivers {
	padding-top: 20px;
	}
ul li {
	xlist-style: none;
	xpadding-left: 0px;
	xmargin-left: 0px;
	padding-bottom: 10px;
	}

</style>

<main>

<?php get_template_part('parts/headers'); ?>

<section id="our-voice" class="row sidebar">

	<div class="column one">
	<?php while ( have_posts() ) : the_post(); ?>
		
		<article class="intro">
			<?php the_content(); ?>
		</article>
		
	<?php endwhile; ?>
	</div>
	<div class="column two">
		<aside class="serif striped">
		<?php 
		$column = get_post_meta( get_the_ID(), 'section-1-2', true );
		if( ! empty( $column ) ) { echo $column; }
		?>
		</aside>
	</div>

</section>

<section id="brand-drivers" class="row halves gray-lightest-back">

	<article class="columnar">

	<header>Strive to incorporate these key WSU messages and benefits in your messaging.</header>
	
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

</section>

</main>

<?php get_footer(); ?>