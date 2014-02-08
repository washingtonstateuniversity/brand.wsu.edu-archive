<?php get_header(); ?>

<script>

</script>

<style>


#wsu-signatures img {
	margin-bottom: 100px;
	margin-left: auto;
	margin-right: auto;
	}
#wsu-signatures img[src*="-default"] {
	margin-top: 50px;
	}
	
img.wsu-signature-default { width: 330px; }
img.wsu-signature-horizontal { width: 594px; }
.size-lt-large img.wsu-signature-horizontal { width: 75%; }
img.wsu-signature-vertical { width: 264px; }


</style>

<main class="fill-window-height">

<?php get_template_part('parts/headers'); ?>

<section id="wsu-signatures" class="row single">
	
	<div class="column one">
	
		
		<center>
		<img src="/wp-content/themes/brand/images/pages/logos/wsu-signature-default.png" class="wsu-signature-default">
		<img src="/wp-content/themes/brand/images/pages/logos/wsu-signature-horizontal.png" class="wsu-signature-horizontal">
		<img src="/wp-content/themes/brand/images/pages/logos/wsu-signature-vertical.png" class="wsu-signature-vertical">
		</center>
		
		<article>
		<div class="details">
			<div class="column one">
				<?php 
				$column = get_post_meta( get_the_ID(), 'section-2-1', true );
				if( ! empty( $column ) ) { echo $column; }
				?>
		</div><!--/.details-->
		</article>
		
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

</main>

<?php get_footer(); ?>