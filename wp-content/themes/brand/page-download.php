<?php get_header(); ?>

<script>
	

</script>

<style>

main section:nth-of-type(odd) {
	xdisplay: table-row;
	xpadding: 20px 0px;
	background-color: #f4f4f5;
	}
main section .column {
	display: table-cell;
	}
main section h2 {
	font-size: 120px;
	line-height: 120px;
	}
#university h2 {
	color: #981e32;
	}
	
#campuses h2,
#colleges h3 {
	
	}


</style>

<main>

<?php get_template_part('parts/headers'); ?>


<section id="university" class="row halves equalize marginalize gutter wide">

<article class="padless">

	<div class="column one">
		
		<h2>university</h2>
		<p>University wide singatures<br>
		Shield mark<br>
		Social media badges (central, unit)</p>
		
	</div>
	
	<div class="column two">
		
		<dl class="downloads">
			<dd><a href="">university wide</a></dd>
		</dl>
		
	</div>
	
</article>

</section>

<section id="campuses" class="row halves equalize marginalize gutter wide">

<article class="padless">

	<div class="column one center-vertically">
		
		<h2>campuses</h2>
		
	</div>
	
	<div class="column two">
		
		<dl id="downloads-campuses" class="downloads">
			<dd><a href="/wp-content/themes/brand/downloads/campus/WSU-Spokane_Logos.zip">Spokane</a></dd>
		    <dd><a href="/wp-content/themes/brand/downloads/campus/WSU-Tri-Cities_Logos.zip">Tri-Cities</a></dd>
		    <dd><a href="/wp-content/themes/brand/downloads/campus/WSU-Vancouver_Logos.zip">Vancounver</a></dd>
		    <dd><a href="/wp-content/themes/brand/downloads/campus/WSU-Global-Campus_Logos.zip">Global Campus</a></dd>
		    <dd><a href="/wp-content/themes/brand/downloads/campus/WSU-Health-Sciences_Logos.zip">Health Sciences</a></dd>
		    <dd><a href="/wp-content/themes/brand/downloads/campus/WSU-Extension_Logos.zip">Extension</a></dd>
		</dl>
		
	</div>
	
</article>

</section>



<section id="colleges" class="row halves marginalize gutter wide ">

<article class="padless">

	<div class="column one center-vertically">
		
		<h2>colleges</h2>
		
	</div>
	
	<div class="column two">
		
		<dl id="downloads-colleges" class="downloads">
		    <dd><a href="/wp-content/themes/brand/downloads/college/WSU-CAHNRS_Logos.zip">CAHNRS</a></dd>
		    <dd><a href="/wp-content/themes/brand/downloads/college/WSU-Honors-College_Logos.zip">Honors</a></dd>
		    <dd><a href="/wp-content/themes/brand/downloads/college/WSU-Arts-Sciences_Logos.zip">Arts & Sciences</a></dd>
		    <dd><a href="/wp-content/themes/brand/downloads/college/WSU-Nursing_Logos.zip">Nursing</a></dd>
		    <dd><a href="/wp-content/themes/brand/downloads/college/WSU-Business_Logos.zip">Business</a></dd>
		    <dd><a href="/wp-content/themes/brand/downloads/college/WSU-Pharmacy_Logos.zip">Pharmacy</a></dd>
		    <dd><a href="/wp-content/themes/brand/downloads/college/WSU-Communication_Logos.zip">Murrow</a></dd>
		    <dd><a href="/wp-content/themes/brand/downloads/college/WSU-Education_Logos.zip">Education</a></dd>
		    <dd><a href="/wp-content/themes/brand/downloads/college/WSU-VetMed_Logos.zip">Veterinary Med.</a></dd>
		    <dd><a href="/wp-content/themes/brand/downloads/college/WSU-Engr-Arch_Logos.zip">Eng. & Arch.</a></dd>
		</dl>
		
	</div>
	
</article>

</section>

</main>

<?php get_footer(); ?>