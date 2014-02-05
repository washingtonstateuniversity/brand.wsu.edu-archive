<?php get_header(); ?>

<script>

</script>

<style>

</style>

<main>

<?php main_header(); ?>


<section class="row margin">
	
	<div class="column one">
		
		<article>
			<header>
				<h2>In a hurry?</h2>
				<p>Here are answers to common questions.</p>
			</header>
			<section class="details">
			<?php 
			$section_one_one = get_post_meta( get_the_ID(), 'section-1-1', true );
			if( ! empty( $section_one_one ) ) { echo $section_one_one; }
			?>
			</section>
		</article>
		
	</div>
	
</section>

<section class="row margin">
	
	<div class="column one">
		
		<article>
			<header>
				<h2>In a hurry?</h2>
				<p>Here are answers to common questions.</p>
			</header>
			<section class="details">
				<?php 
				$section_one_one = get_post_meta( get_the_ID(), 'section-2-1', true );
				if( ! empty( $section_one_one ) ) { echo $section_one_one; }
				?>
			</section>
		</article>
		
	</div>
	
</section>


<section id="" class="row single">

<div class="column one">

	<div class="column one">
		
		<article>
			<header>
				<h2>In a hurry?</h2>
				<p>Here are answers to common questions.</p>
			</header>
			<section class="details">
				<?php 
				$section_one_one = get_post_meta( get_the_ID(), 'section-2-1', true );
				if( ! empty( $section_one_one ) ) { echo $section_one_one; }
				?>
			</section>
		</article>
		
	</div>

</section>

<section id="we-pursue" class="row single unbound recto">

<div class="column one">

	<div class="column one">
		
		<article>
			<header>
				<h2>In a hurry?</h2>
				<p>Here are answers to common questions.</p>
			</header>
			<section class="details">
			<?php 
			$section_one_one = get_post_meta( get_the_ID(), 'section-2-1', true );
			if( ! empty( $section_one_one ) ) { echo $section_one_one; }
			?>
			</section>
		</article>
		
	</div>

</section>

<section id="we-offer" class="row single unbound recto">

<div class="column one">

<figure class="lax" style="background-image: url('/wp-content/themes/brand/images/pages/who-we-are/finally.jpg');">

	<!--<img class="fill-width" src="/wp-content/themes/brand/images/pages/who-we-are/eyeshield.jpg">-->

</figure>

<article>

	<h2>we offer</h2>

	<ul>
		<li>undergraduate degrees</li>
		<li>graduate and professional degrees</li>
		<li>groundbreaking research</li>
		<li>preparation to lead wisely</li>
	</ul>

</article>

</div>

</section>

<section id="we-promise" class="row single unbound recto">

<div class="column one">

<figure class="crimson-back">

	<!--<img class="fill-width" src="/wp-content/themes/brand/images/pages/who-we-are/eyeshield.jpg">-->

</figure>

<article>

	<h2>we promise</h2>

	<ul>
		<li>if you</li>
		<li>then we have</li>
		<li>for you</li>
	</ul>

</article>

</div>

</section>

</main>

<?php get_footer(); ?>