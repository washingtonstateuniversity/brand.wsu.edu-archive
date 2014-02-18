<?php get_header(); ?>

<script>
	

</script>

<style>

#letterforms figure {
	padding: 15px 0px;
	}
#letterforms {
	padding-top: 50px;
	}

#stones figure {
	padding-left: 30px;
	padding-top: 80px;
	}
.stonesans {
	
	}

</style>

<main>

<?php get_template_part('parts/headers'); ?>

<section id="letterforms" class="row equalize">

	<div class="column one four-twelfths" style="text-align: right;">
		<figure>
			<img src="/wp-content/themes/brand/images/pages/type/Aa.png" width="200px">
		</figure>
	</div>
	<div class="column two eight-twelfths vertically-align">
		<figure>
			<img src="/wp-content/themes/brand/images/pages/type/letters.png" style="margin: 40px 0px 0px 20px;">
		</figure>
	</div>

</section>

<section id="stones" class="row halves">

	<div class="column one">
		<figure>
			<h4>ITC Stone Serif</h4>
			<img src="/wp-content/themes/brand/images/pages/type/stoneserif.png">
		</figure>
		<figure class="stonesans">
			<h4>ITC Stone Stone</h4>
			<img src="/wp-content/themes/brand/images/pages/type/stonesans.png">
		</figure>
	</div>
	<div class="column two">
		
		<figure>
			<h4>ITC Stone Sans II</h4>
			<img src="/wp-content/themes/brand/images/pages/type/stonesansii.png">
		</figure>
	</div>

</section>

<section class="row halves">

<article class="columnar">

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

<section class="row single">

	<div class="column one">
		<?php 
		$column = get_post_meta( get_the_ID(), 'section-4-1', true );
		if( ! empty( $column ) ) { echo $column; }
		?>
	</div>

</section>

</main>

<?php get_footer(); ?>