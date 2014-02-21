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
	
button.detail {
	height: auto;
	overflow: visible;
	}
button.detail header {
	text-align: left;
	}
button.detail header h3 {
	display: inline-block;
	margin: 0px;
	}
main section button.detail {
	background-position: 750px center;
	padding-left: 4.7em;
	}
.size-lt-large main section button.detail {
	background-position: 90% center;
	}

</style>

<main>

<?php get_template_part('parts/headers'); ?>

<section id="our-voice" class="row sidebar gutter wide">

	<div class="column one">
	<?php while ( have_posts() ) : the_post(); ?>
		
		<article class="padless">
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

<section id="brand-drivers" class="row sidebar gutter wide gray-er-back">
	<button class="detail unbound recto guttered">
		<header>
			<h2>key messages and benefits</h2>
		</header>
	</button>
	<div class="details">
	<article class="padless">
		<div class="column one">
			<?php 
			$column = get_post_meta( get_the_ID(), 'section-2-1', true );
			if( ! empty( $column ) ) { echo $column; }
			?>
			<?php 
			$column = get_post_meta( get_the_ID(), 'section-2-2', true );
			if( ! empty( $column ) ) { echo $column; }
			?>
		</div>
		<div class="column two">
			
		</div>
	</article>
	</div><!--/.details-->

</section>

<section id="best-practices" class="row sidebar gutter wide gray-lightest-back">
	<button class="detail unbound recto guttered">
		<header>
			<h2>best practices</h2>
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
	</article>
	</div><!--/.details-->

</section>

</main>

<?php get_footer(); ?>