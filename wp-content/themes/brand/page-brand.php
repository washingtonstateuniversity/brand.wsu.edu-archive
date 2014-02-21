<?php get_header(); ?>

<script>

</script>

<style>
main {
	padding-bottom: 200px;
	}

main section figure {
	background-repeat: no-repeat;
	height: 400px;
	}
main section ~ section figure {
	margin-top: 20px;
	}
.size-gt-small main section figure {
	background-position: left top;
	background-size: 100% auto;
	}
.size-small main section figure {
	background-repeat: none;
	background-position: left top;
	background-size: auto 400px;
	}
xxmain .single .column article {
	max-width: 732px;
	xwidth: 732px;
	}
figcaption {
	font-size: 64px;
	font-weight: 700;
	margin: 0px !important;
	padding: 0px !important;
	line-height: 1em;
	position: absolute;
	left: 30px;
	bottom: -8px;
	color: white;
	}
main section article ul:first-of-type {
	padding-top: 30px;
	}

main section article ul li {
	list-style: none;
	font-size: 2em;
	line-height: 1.5em;
	color: #a6adb0;
	padding: 0px;
	margin: 0px;
	}
.size-gt-small #we-are article ul { margin-left: 220px; }
.size-gt-small #we-believe article ul { text-align: right; }
.size-gt-small #we-emphasize article ul { margin-left: 80px; }
.size-gt-small #we-offer article ul { margin-left: 260px; }
.size-gt-small #we-promise article ul { margin-left: 280px; }

.details .column.one {
	padding-bottom: 40px;
	}

button.detail::after {
	content: "more";
	display: inline-block;
	}
.detailed button.detail::after {
	content: "";
	}

</style>

<main>

<section id="we-are" class="row single">

<figure style="background-image: url('/wp-content/themes/brand/images/pages/brand/cougcheek.jpg');">
	<figcaption>we are</figcaption>
</figure>

<div class="column one row sidebar gutter wide">

<article class="padless">

	<header class="hidden">we are</header>

	<ul>
		<li>knowledgeable</li>
		<li>trailblazers</li>
		<li>hands on</li>
		<li>inclusive</li>
		<li>genuine</li>
	</ul>
	
	<button class="detail"></button>
	<div class="details">
	
		<hr>
		
		<div class="column one">
			<?php 
			$column = get_post_meta( get_the_ID(), 'section-1-1', true );
			if( ! empty( $column ) ) { echo $column; }
			?>
		</div>
	</div><!--/.details-->

</article>

</div>

</section>

<section id="we-believe" class="row single">

<figure style="background-image: url('/wp-content/themes/brand/images/pages/brand/eyeshield.jpg');">
	<figcaption>we believe in</figcaption>
</figure>

<div class="column one row sidebar">

<article class="padless">

	<header class="hidden">we believe in</header>
	<ul>
		<li>creating a better future</li>
		<li>challenging limits</li>
		<li>driving innovation</li>
		<li>broadening beliefs</li>
		<li>nurturing community</li>
	</ul>
	
	<!--<button class="detail"></button>
	<div class="details">
		<div class="column one">
			<?php 
			$column = get_post_meta( get_the_ID(), 'section-2-1', true );
			if( ! empty( $column ) ) { echo $column; }
			?>
		</div>
	</div><!--/.details-->

</article>

</div>

</section>

<section id="we-emphasize" class="row single wide">

<figure style="background-image: url('/wp-content/themes/brand/images/pages/brand/hoodie.jpg');">
	<figcaption>we emphasize</figcaption>
</figure>

<div class="column one row halves gutter wide">

<article class="padless">
	
	<header class="hidden">we emphasize</header>
	<ul>
		<li>eminent faculty</li>
		<li>life-changing research</li>
		<li>engaged learning</li>
		<li>enriching experiences</li>
		<li>informed graduates</li>
	</ul>
	
	<button class="detail"></button>
	<div class="details">
		
		<hr>
	
		<div class="column one">
			<?php 
			$column = get_post_meta( get_the_ID(), 'section-3-1', true );
			if( ! empty( $column ) ) { echo $column; }
			?>
		</div>
		<div class="column two">
			<?php 
			$column = get_post_meta( get_the_ID(), 'section-3-2', true );
			if( ! empty( $column ) ) { echo $column; }
			?>
		</div>

	</div><!--/.details-->
	
</article>

</div>

</section>

<section id="we-offer" class="row single">

<figure style="background-image: url('/wp-content/themes/brand/images/pages/brand/finally.jpg');">
	<figcaption>we offer</figcaption>
</figure>

<div class="column one row sidebar">

<article class="padless">

	<header class="hidden">we offer</header>

	<ul>
		<li>undergraduate degrees</li>
		<li>graduate and professional degrees</li>
		<li>leadership opportunities</li>
		<li>committed citizens</li>
	</ul>
	
	<!--<button class="detail"></button>
	<div class="details">
		<div class="column one">
			<?php 
			$column = get_post_meta( get_the_ID(), 'section-4-1', true );
			if( ! empty( $column ) ) { echo $column; }
			?>
		</div>
	</div><!--/.details-->

</article>

</div>

</section>

<section id="we-promise" class="row single unbound recto">

<figure style="background-image: url('/wp-content/themes/brand/images/pages/brand/orange.jpg');">
	<figcaption>we promise</figcaption>
</figure>

<div class="column one">

<article class="padless">

	<header class="hidden">we promise</header>

	<ul>
		<li>if you seek to do good in the world, </li>
		<li>our learning community will</li>
		<li>engage, challenge, and equip you</li>
		<li>for life-long success</li>
	</ul>
	
	<!--<button class="detail"></button>
	<div class="details">
		<?php 
		$section_one_one = get_post_meta( get_the_ID(), 'section-5-1', true );
		if( ! empty( $section_one_one ) ) { echo $section_one_one; }
		?>
	</div>-->

</article>

</div>

</section>

</main>

<?php get_footer(); ?>