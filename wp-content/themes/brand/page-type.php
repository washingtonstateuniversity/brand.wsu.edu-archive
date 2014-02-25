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

.size-gt-small #stones figure {
	xxpadding-left: 30px;
	padding-bottom: 30px;
	}
.stonesans {
	
	}
#stones h2 {
	padding-bottom: 1em;
	}
#webfonts strong {
	color: #4F868E;
	}
#webfonts p {
	padding-bottom: 0;
	}
#webfonts h5 {
	margin-top: 1em;
	}
hr {
	margin: 0 4em;
	}
h2 + h5 {
	margin-top: 0px; 
	padding-top: 0px;
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
	<div class="column two eight-twelfths">
		<figure>
			<img src="/wp-content/themes/brand/images/pages/type/letters.png" style="margin: 40px 0px 0px 20px;">
		</figure>
	</div>

</section>

<section id="stones" class="row single gutter wide">

	<div class="column one">
		<figure>
			<h2 class="not-lowercase">ITC Stone Serif</h2>
			<img src="/wp-content/themes/brand/images/pages/type/stone-serif.png">
		</figure>
	</div>

</section>

<section id="stones" class="row halves gutter wide">

	<div class="column one">
		<figure>
			<h2 class="not-lowercase">ITC Stone Serif</h2>
			<img src="/wp-content/themes/brand/images/pages/type/stone-sans-col1.png">
		</figure>
	</div>
	<div class="column two">
		<figure>
			<h2>&nbsp;</h2>
			<img src="/wp-content/themes/brand/images/pages/type/stone-sans-col2.png">
		</figure>
	</div>

</section>

<section class="row halves gutter wide">

<hr class="tall">

<article class="padless">

	<div class="column one marginalized-bottom">
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

<section id="webfonts" class="row single gutter wide">

	<hr class="tall">

	<div class="column one">
		<h2>web</h2>
		<?php 
		$column = get_post_meta( get_the_ID(), 'section-3-1', true );
		if( ! empty( $column ) ) { echo $column; }
		?>
	</div>

</section>

</main>

<?php get_footer(); ?>