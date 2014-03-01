<?php /* Template Name: Sections */ ?>

<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<main id="page-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php
	$section_1_1 = get_post_meta($post->ID, 'section-1-1', true);
	$section_1_2 = get_post_meta($post->ID, 'section-1-2', true);
	$section_1_3 = get_post_meta($post->ID, 'section-1-3', true);
	
	if ($section_1_3 != '') { $sec1_columns = 'thirds'; } elseif ($section_1_2 != '') { $sec1_columns = 'halves'; } elseif ($section_1_1) { $sec1_columns = 'single'; } ?>
	
<?php if (isset($sec1_columns)) : ?><section class="row <?php echo $sec1_columns; ?>"><?php endif; ?>

	<?php if ($section_1_1 != '') {
	echo '<div class="column one">';
	echo '<article>' . wp_kses_post( $section_1_1 ) . '</article>';
	echo '</div>'; }
	?>
	
	<?php if ($section_1_2 != '') {
	echo '<div class="column two">';
	echo '<article>' . wp_kses_post( $section_1_2 ) . '</article>';
	echo '</div>'; }
	?>
	
	<?php if ($section_1_3 != '') {
	echo '<div class="column three">';
	echo '<article>' . wp_kses_post( $section_1_3 ) . '</article>';
	echo '</div>'; }
	?>

<?php if (isset($sec1_columns)) :?></section><?php endif; ?>

<article>
	<?php the_content(); ?>
</article><!-- #post -->



</main>

<?php endwhile; ?>

<?php get_footer(); ?>