<?php get_header(); ?>

<main>

<?php get_template_part('parts/headers'); ?>

<section class="row halves alternate marginalize wide">
	
	<div class="column one">
		
		<?php while ( have_posts() ) : the_post(); ?>
		
		<article class="intro padless">
			<?php the_content(); ?>
		</article>
		
		<?php endwhile; ?>
		
	</div>
	
</section>

<section id="campaign" class="row halves marginalize gutter wide">

	<article class="padless">
		<figure style="text-align: center; padding-top: 40px;" class="twelve-twelfths-max"><img src="/wp-content/themes/brand/images/pages/campaigns/campaign.png"></figure>
		<div class="column one">
			<?php 
			$column = get_post_meta( get_the_ID(), 'section-2-1', true );
			if( ! empty( $column ) ) { echo $column; }
			?>
		</div>
		<div class="column two">
			<p>The campaign brand standards are in effect until its projected conclusion in the fall 2015.</p>
			<dl class="downloads">
				<dt>campaign standards</dt>
				<dd><a href="">PDF</a></dd>
			</dl>
		</div>
	</article>

</section>

<section id="anniversary" class="row halves marginalize gutter wide alternate">

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
	
</section>

</main>

<?php get_footer(); ?>