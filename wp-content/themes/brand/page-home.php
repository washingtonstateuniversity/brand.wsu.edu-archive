<?php get_header(); ?>

<script>

</script>

<style>

section .column.one {
	background: rgba(0,0,0,0.55);
	min-height: 650px;
	}
.column > article p {
	color: white;
	font-size: 2.5em;
	line-height: 2.5em;
	padding-left: 130px;
	}
body,main {
	background: black;
	}
section#our-brand {
	background-image: url('/wp-content/themes/brand/images/pages/home/confetti.jpg');
	background-position: left top;
	background-repeat: no-repeat;
	background-size: 100% auto;
	}
.size-gt-large section#our-brand {
	background-position: left bottom;
	}
.size-lt-medium section#our-brand {
	background-size: auto 100%;
	}
section#our-brand article {
	background-image: url('/wp-content/themes/brand/images/pages/home/ourbrand.png');
	background-repeat: no-repeat;
	background-position: 15px 60px;
	background-size: auto 500px;
	font-size: 12px;
	min-height: 530px;
	}

	
</style>

<main class="fill-window-height">

<section id="our-brand" class="row sidebar unbound recto">
		
	<div class="column one">
		
		<?php while ( have_posts() ) : the_post(); ?>
		
		<article>
			<?php the_content(); ?>
		</article>
		
		<?php endwhile; ?>
		
	</div>
	
</section>

<section id="quick-tips" class="row margin">

	<div class="column one">

		<article>
				<?php 
				$column = get_post_meta( get_the_ID(), 'section-2-1', true );
				if( ! empty( $column ) ) { echo $column; }
				?>
		</article>

	</div>

</section>

</main>

<?php get_footer(); ?>