<?php get_header(); ?>

<script>
	

</script>

<style>

	img {
		box-shadow: 0px 0px 5px rgba(0,0,0,0.2);
		}
	ul.download {
		padding-top: 50px;
		}
	main section:first-of-type {
		padding-top: 75px;
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
	<div class="column two">
		<dl class="downloads" style="margin-top: 75px;">
			<dd><a href="">order</a></dd>
		</dl>
	</div>

</section>

<section class="row single">

	<div class="column one">
		<article>
			<h3>letterhead</h3>
			<img src="/wp-content/themes/brand/images/pages/stationery/letterhead.png" class="max-width" width="752px;">
			<p>Customized MS Word templates for use with a desktop printer are available.</p>
		</article>
	</div>

</section>

<section class="row single">

	<div class="column one">
		<article>
			<h3>no.10 envelope</h3>
			<img src="/wp-content/themes/brand/images/pages/stationery/envelope.png" class="max-width" width="752px;">
		</article>
	</div>

</section>

<section class="row sidebar">

	<div class="column one">
		<article>
			<h3>business card</h3>
			<img src="/wp-content/themes/brand/images/pages/stationery/businesscard.png" class="max-width" width="380px;">
		
		<br>
		<p>Standard formats for additional correspondence materials, including Monarch letterhead and envelopes, note cards, and notepads, are being developed and will be available soon.</p>
		
		</article>
	</div>

</section>

</main>

<?php get_footer(); ?>