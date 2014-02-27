<?php

	global $post;
	
	$site_name      = get_bloginfo('name');
	$site_tagline   = get_bloginfo('description');
	$first_category = get_the_category();
	$section_title  = get_the_category();
?>
<header>
<hgroup>
	<div class="site"><a href="<?php home_url(); ?>" title="<?php echo esc_attr( $site_name ); ?>" rel="home"><?php echo esc_html( $site_name ); ?></a></div>
	<div class="tagline"><a href="<?php home_url(); ?>" title="<?php echo esc_attr( $site_tagline ); ?>" rel="home"><?php echo esc_html( $site_tagline ); ?></a></div>
	<?php

	if ( spine_is_subpage() ) {
		echo '	<div class="section">' . spine_section_title() . '</div>';
	}

	if ( ( is_archive() || is_category() || is_single() ) && ! empty( $first_category ) && isset( $first_category[0]->cat_name ) ) {
		echo '	<div class="category">'.$first_category[0]->cat_name.'</div>';
	}

	if ( is_page() ) {
		echo '	<div class="page">' . get_the_title() . '</div>';
	}

	if ( is_single() ) {
		echo '	<div class="post">' . get_the_title() . '</div>';
	}

	?>
</hgroup>
</header>