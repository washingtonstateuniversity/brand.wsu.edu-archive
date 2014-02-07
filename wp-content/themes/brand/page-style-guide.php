<?php get_header(); ?>

<script>

</script>

<style>

</style>

<main>

<?php get_template_part('parts/headers'); ?>

<section class="row margin indent">
	
	<div class="column one">
		
		<article>
			<header>
				<h2>Clear. Concise. Consistent.</h2>
				<p>Editorial Style Guide</p>
			</header>
			<section>
			<?php 
			$section_one_one = get_post_meta( get_the_ID(), 'section-1-1', true );
			if( ! empty( $section_one_one ) ) { echo $section_one_one; }
			?>
			</section>
		</article>
		
	</div>
	
</section>

<section id="we-offer" class="row margin indent">

	<div class="column one">

		<article>
			<header>
				<h2>In a Hurry?</h2>
				<p>Here are answers to common questions.</p>
			</header>
			<button class="glassine detail"></button>
			<section class="details">
			<?php 
			$section_one_one = get_post_meta( get_the_ID(), 'section-2-1', true );
			if( ! empty( $section_one_one ) ) { echo $section_one_one; }
			?>
			</section>
		</article>

	</div>

</section>

<section class="row margin indent">
	
	<div class="column one">
		
		<article>
			<header>
				<h2>Capitalization</h2>
				<p>not always a capital idea</p>
			</header>
			<button class="glassine detail"></button>
			<section class="details">
				<?php 
				$section_one_one = get_post_meta( get_the_ID(), 'section-3-1', true );
				if( ! empty( $section_one_one ) ) { echo $section_one_one; }
				?>
			</section>
		</article>
		
	</div>
	
</section>


<section id="" class="row margin indent">

	<div class="column one">
		
		<article>
			<button class="glassine detail"></button>
			<header>
				<h2>Punctuation</h2>
				<p>deliver the intended meaning</p>
			</header>
			<section class="details">
				<?php 
				$section_one_one = get_post_meta( get_the_ID(), 'section-4-1', true );
				if( ! empty( $section_one_one ) ) { echo $section_one_one; }
				?>
			</section>
		</article>
		
	</div>

</section>

<section id="we-pursue" class="row margin indent">

	<div class="column one">
		
		<article>
			<button class="glassine detail"></button>
			<header>
				<h2>Spelling</h2>
				<p>doing it correctly is like wearing a pressed shirt and clean shoes</p>
			</header>
			<section class="details">
			<?php 
			$section_one_one = get_post_meta( get_the_ID(), 'section-5-1', true );
			if( ! empty( $section_one_one ) ) { echo $section_one_one; }
			?>
			</section>
		</article>
		
	</div>

</section>

<section id="we-offer" class="row margin indent">

	<div class="column one">

		<article>
			<header>
				<h2>Numbers</h2>
				<p>a simple equation for readability</p>
			</header>
			<button class="glassine detail"></button>
			<section class="details">
			<?php 
			$section_one_one = get_post_meta( get_the_ID(), 'section-6-1', true );
			if( ! empty( $section_one_one ) ) { echo $section_one_one; }
			?>
			</section>
		</article>

	</div>

</section>



</main>

<?php get_footer(); ?>