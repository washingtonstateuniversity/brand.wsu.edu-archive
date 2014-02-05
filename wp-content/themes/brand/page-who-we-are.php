<?php get_header(); ?>

<script>
$(document).ready(function(){
    $('section[data-type="background"]').each(function(){
        var $bgobj = $(this); // assigning the object
     
        $(window).scroll(function() {
            var yPos = -($window.scrollTop() / $bgobj.data('speed')); 
             
            // Put together our final background position
            var coords = '50% '+ yPos + 'px';
 
            // Move the background
            $bgobj.css({ backgroundPosition: coords });
        }); 
    });    
});

$(document).ready(function(){
$('figure').stellar();

/*    var $window = $(window);
    var velocity = 0.4;
    function update() {
    	var pos = $window.scrollTop();
		$('.lax').each(function() {
			var $element = $(this);
			var height = $element.height();
			$(this).css('backgroundPosition', '50% ' + Math.round((height - pos) * velocity) + 'px'); });
	};
    $window.bind('scroll', update); */

});

</script>

<style>
main {
	padding-bottom: 200px;
}
main section {
	padding-bottom: 20px;
	position: relative;
	xxbackground: white;
	}
.large main section,
.xlarge main section {
	xxmin-width: 732px;
	}
main section article {
	xxmargin-top: 300px;
	}
main section figure {
	background-repeat: no-repeat;
	height: 300px;
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
main .single .column article {
	max-width: 732px;
	padding-bottom: 50px;
	}
main article > h2 {
	font-size: 64px;
	margin-top: -48px;
	position: relative;
	top: -36px;
	color: white;
	margin-bottom: -36px;
	}
main section article ul li {
	list-style: none;
	font-size: 2em;
	line-height: 1.5em;
	color: #a6adb0;
	padding: 0px;
	margin: 0px;
	}
.size-gt-small #we-are article ul {
	margin-left: 220px;
	}
.size-gt-small #we-are article ul {
	margin-left: 220px;
	}
.size-gt-small #we-believe article ul {
	text-align: right;
	}
.size-gt-small #we-pursue article ul {
	margin-left: 80px;
	}


</style>

<main>

<section id="we-are" class="row single unbound recto">

<div class="column one">

<figure style="background-image: url('/wp-content/themes/brand/images/pages/who-we-are/cougcheek.jpg');">

</figure>

<article>

	<h2>we are</h2>

	<ul>
		<li>inquisitive</li>
		<li>knowledgeable</li>
		<li>enthusiastic</li>
		<li>genuine</li>
		<li>relational</li>
	</ul>
	
	<section class="details">
	
	</section>

</article>

</div>

</section>

<section id="we-believe" class="row single unbound recto">

<div class="column one">

<figure class="lax" style="background-image: url('/wp-content/themes/brand/images/pages/who-we-are/eyeshield.jpg');">

	<!--<img class="fill-width" src="/wp-content/themes/brand/images/pages/who-we-are/eyeshield.jpg">-->

</figure>

<article>

	<h2>we believe in</h2>

	<ul>
		<li>community</li>
		<li>challenging limits</li>
		<li>advancing knowledge</li>
		<li>making a better world</li>
	</ul>
	
	<button class="detail"></button>
	<section class="details">
	
	</section>

</article>

</div>

</section>

<section id="we-pursue" class="row single unbound recto">

<div class="column one">

<figure class="lax" style="background-image: url('/wp-content/themes/brand/images/pages/who-we-are/weexpress.jpg');">

	<!--<img class="fill-width" src="/wp-content/themes/brand/images/pages/who-we-are/eyeshield.jpg">-->

</figure>

<article>

	<h2>we pursue</h2>

	<ul>
		<li>world-class faculty</li>
		<li>leading research</li>
		<li>challenging involvement</li>
		<li>premier experience</li>
	</ul>

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