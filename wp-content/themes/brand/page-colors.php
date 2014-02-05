<?php get_header(); ?>

<style>
.colors .column {
	min-height: 400px;
	}
.column figure {
	display: block;
	}
.colors .column figure {
	float: left;
	}
#secondary-palette {
	background: #981e32; /* Old browsers */
	background: -moz-linear-gradient(left,  #981e32 50%, #5e6a71 50%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, right top, color-stop(50%,#981e32), color-stop(50%,#5e6a71)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(left,  #981e32 50%,#5e6a71 50%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(left,  #981e32 50%,#5e6a71 50%); /* Opera 11.10+ */
	background: -ms-linear-gradient(left,  #981e32 50%,#5e6a71 50%); /* IE10+ */
	background: linear-gradient(to right,  #981e32 50%,#5e6a71 50%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#981e32', endColorstr='#5e6a71',GradientType=1 ); /* IE6-9 */
	}
#secondary-palette figure {
	width: 66px;
	}
.controls {
	padding: 10px 0px 20px 0px;
	}
.controls dl {
	padding: 4px 0px 0px 0px;
	}
.controls dl dt {
	width: 100px;
	text-align: right;
	padding-right: 10px;
	}
.center-group figure {
	float: left;
	}
.center-group {
	margin: 0px auto;
	width: 264px;
	}
.visible-1 .center-group { width: 66px; }
.visible-2 .center-group { width: 132px; }
.visible-3 .center-group { width: 198px; }
.visible-4 .center-group { width: 264px; }

.center-group figure {
	text-align: left;
	}

/* Swatches */
figure.color dl dd {
	height: 50px;
	display: block;
	margin: 0px;
	padding: 0px;
	}

figure.color.invisible {
	display: none;
	}
.untinted dd.tint {
	background-color: transparent;
	}
.unaccented dd.accent {
	display: none;
	}
.accented dd.accent {
	display: block;
	}

dl.secondaries dd.on:hover,
dl.secondaries dd.off,
dl.tertiaries dd.off { opacity: .5; }
dl.secondaries dd.off:hover,
dl.tertiaries dd.on:hover { opacity: 1; }

dl.secondaries dd::before,
dl.tertiaries dd::before {
	font-family: "Iconography";
	width: 8px;
	display: inline-block;
	padding-right: 3px;
	}
dl.secondaries dd::before { content: "x"; }
dl.secondaries dd.off::before { content: "+"; }
dl.tertiaries dd::before { content: "+" }
dl.tertiaries dd.on::before { content: "x" }


/* Valued */

.valued .colors .column {
	min-height: 1px;
	}
.valued .center-group,
.valued .visible-1 .center-group,
.valued .visible-2 .center-group,
.valued .visible-3 .center-group,
.valued .visible-4 .center-group {
	width: 100%;
	}
.valued #secondary-palette figure.color {
	float: none;
	width: 100%;
	}

button#switcher {
	float: right;
	margin: 0px 10px 0px 0px;
	}
button#switcher::before{
	content: "values";
	}
.valued button#switcher::before{
	content: "swatches";
	}
.valued .row.thirds .halves .column {
	width: 100%;
	float: none;
	}
.valued section#palettes .column.one,
.valued section#palettes .column.two,
.valued section#palettes .column.three {
	width: 100%;
	clear: both;
	}
.valued .column.two .column figure.color {
	width: 100%;
	clear: both;
	float: none;
	height: auto;
	}
.valued figure dl dd {
	height: auto;
	float: none;
	}
dl.values {
	display: none;
	}
.valued .spot dl.values,
.valued .tinted .tint dl.values,
.valued .accented .accent dl.values {
	display: block;
	}
figure.color dl.values dd {
	font-size: 12px;
	text-transform: uppercase;
	display: inline-block;
	padding: 5px 10px;
	}


#crimson-palette dl {
	position: relative;
	}
xmain:not(.valued) #crimson-palette dd.spot,
xmain:not(.valued) #gray-palette dd.spot {
	xposition: absolute;
	top: 5px;
	left: 5px;
	}

main:not(.valued) #crimson-palette dd.spot .values dd,
main:not(.valued) #gray-palette dd.spot .values dd {
	display: block;
	float: none;
	}
	
.valued .tinted dd.spot .values dd {
	padding: 5px 10px 95px 10px;
	}
.valued .accented dd.spot .values dd {
	padding: 95px 10px 5px 10px;
	}
.rgb::before,
.cmyk::before {
	font-weight: bold;
	}	
.rgb::before { content: "RGB "; width: 120px; }
.cmyk::before { content: "CMYK "; width: 140px; }
.hex::before { content: "HEX ";	}
.spot .spot::before { content: "SPOT "; }
	
.valued figure.color dd dl {
	color: rgba(255,255,255,.4);
	}
.valued figure.color dd:hover dl {
	color: rgba(255,255,255,1);
	}
.valued figure.color dd[class*="light"] dl,
.valued figure.color dd.accent dl {
	color: rgba(0,0,0,0.3);
	}
.valued figure.color dd[class*="light"]:hover dl {
	color: rgba(0,0,0,0.8);
	}
figure.color dl.values.selected dd {
	font-size: 4em;
	line-height: .8em;
	display: block;
	color: rgba(255,255,255,.4);
	}
figure.color dl.values.selected dd::before {
	color: rgba(0,0,0,0.3);
	}



</style>

<script>
$(document).ready(function() {

$('.switch').click( function() { $(this).toggleClass('on off'); } );

$('body').click(function() {
	var visible_secondaries = $( "figure.visible" ).length;
	$('#secondary-palette').removeClass('visible-0 visible-1 visible-2 visible-3 visible-4').addClass('visible-'+visible_secondaries);
	console.log(visible_secondaries);
});

$('dl.values').click(function() {
	$(this).toggleClass('selected');
});

});

</script>

<main>

<? main_header(); ?>

<section id="" class="row single controls unequaled">

	<div class="column one">
		
		<dl class="primaries">
			<dt>primary</dt><dd class="crimson-text">crimson</dd><dd class="gray-text">gray</dd>
		</dl>
		<dl class="secondaries">
			<button id="switcher" onclick="$('main').toggleClass('valued');"> </button>
			<dt>secondary</dt>
			<dd class="switch on orange-text" onclick="$('figure.orange-back').toggleClass('visible invisible');">orange</dd>
			<dd class="switch on green-text" onclick="$('figure.green-back').toggleClass('visible invisible');">green</dd>
			<dd class="switch on blue-text" onclick="$('figure.blue-back').toggleClass('visible invisible');">blue</dd>
			<dd class="switch on yellow-text" onclick="$('figure.yellow-back').toggleClass('visible invisible');">yellow</dd>
		</dl>
		<dl class="tertiaries">
			<dt></dt>
			<dd class="switch off gray-text accents" onclick="$('figure.color').toggleClass('unaccented accented');">accents</dd>
			<dd class="switch off gray-text tints" onclick="$('figure.color').toggleClass('untinted tinted');">tints/shades</dd>
			<dt>background</dt>
			<dd class="switch on gray-text tints" onclick="$('main').removeClass('gray-darkest-back gray-back').addClass('gray-er-back');">white</dd>
			<dd class="switch off gray-text tints" onclick="$('main').removeClass('gray-er-back gray-back').addClass('gray-darkest-back');">black</dd>
			<dd class="switch off gray-text tints" onclick="$('main').removeClass('gray-er-back gray-darkest-back').addClass('gray-back');">gray</dd>
			<!--<dd class="switch off gray-text tints" onclick="$('main').css('background-color','#981e32');">on crimson</dd>-->
		</dl>
		
	</div>
</section>

<section id="palettes" class="row thirds unequaled colors">

	<div id="crimson-palette" class="column one unequaled">
	
		<figure class="color crimson crimson-back untinted unaccented">
		<dl>
			<dd class="crimson-back"><dl class="values"><dd class="rgb">152 30 50</dd> <dd class="cmyk">0 100 65 34</dd> <dd class="hex">#981e32</dd> <dd class="spot">201</dd></dl></dd>
			<dd class="crimson-back"></dd>
			<dd class="crimson-back"></dd>
			<dd class="crimson-back"></dd>
			<dd class="crimson-back spot"><dl class="values"><dd class="rgb">152 30 50</dd> <dd class="cmyk">0 100 65 34</dd> <dd class="hex">#981e32</dd> <dd class="spot">201</dd></dl></dd>
			<dd class="crimson-back"></dd>
			<dd class="crimson-back"></dd>
			<dd class="crimson-back"></dd>
			<dd class="crimson-er-back accent"><dl class="values"><dd class="rgb">244 G233 B222</dd> <dd class="cmyk">3 M5 Y7 K0</dd> <dd class="hex">#981e32</dd> <dd class="spot">999</dd></dl></dd>
		</dl>
		</figure>
	
	</div>
	
	<div id="secondary-palette" class="column two unequaled">
	
	<div class="center-group clearfix">
			
		<figure class="color spectrum green green-back visible untinted unaccented">
			<dl>
				<dd class="green-lightest-back tint"><dl class="values"><dd class="rgb">244 G233 B222</dd> <dd class="cmyk">3 M5 Y7 K0</dd> <dd class="hex">#F4E9DE</dd> <dd class="spot">999</dd></dl></dd>
				<dd class="green-lightly-back tint"><dl class="values"><dd class="rgb">244 G233 B222</dd> <dd class="cmyk">3 M5 Y7 K0</dd> <dd class="hex">#F4E9DE</dd> <dd class="spot">999</dd></dl></dd>
				<dd class="green-lighter-back tint"><dl class="values"><dd class="rgb">244 G233 B222</dd> <dd class="cmyk">3 M5 Y7 K0</dd> <dd class="hex">#F4E9DE</dd> <dd class="spot">999</dd></dl></dd>
				<dd class="green-light-back tint"><dl class="values"><dd class="rgb">244 G233 B222</dd> <dd class="cmyk">3 M5 Y7 K0</dd> <dd class="hex">#F4E9DE</dd> <dd class="spot">999</dd></dl></dd>
				<dd class="green-green-back spot"><dl class="values"><dd class="rgb">244 G233 B222</dd> <dd class="cmyk">3 M5 Y7 K0</dd> <dd class="hex">#F4E9DE</dd> <dd class="spot">999</dd></dl></dd>
				<dd class="green-dark-back tint"><dl class="values"><dd class="rgb">244 G233 B222</dd> <dd class="cmyk">3 M5 Y7 K0</dd> <dd class="hex">#F4E9DE</dd> <dd class="spot">999</dd></dl></dd>
				<dd class="green-darker-back tint"><dl class="values"><dd class="rgb">244 G233 B222</dd> <dd class="cmyk">3 M5 Y7 K0</dd> <dd class="hex">#F4E9DE</dd> <dd class="spot">999</dd></dl></dd>
				<dd class="green-darkest-back tint"><dl class="values"><dd class="rgb">244 G233 B222</dd> <dd class="cmyk">3 M5 Y7 K0</dd> <dd class="hex">#F4E9DE</dd> <dd class="spot">999</dd></dl></dd>
				<dd class="green-er-back accent"><dl class="values"><dd class="rgb">244 G233 B222</dd> <dd class="cmyk">3 M5 Y7 K0</dd> <dd class="hex">#F4E9DE</dd> <dd class="spot">999</dd></dl></dd>
			</dl>
		</figure>
		<figure class="color spectrum orange orange-back visible untinted unaccented">
			<dl>
				<dd class="orange-lightest-back tint"><dl class="values"><dd class="rgb">R244 G233 B222</dd> <dd class="cmyk">C3 M5 Y7 K0</dd> <dd class="hex">#F4E9DE</dd> <dd class="spot">999</dd></dl></dd>
				<dd class="orange-lightly-back tint"><dl class="values"><dd class="rgb">244 G233 B222</dd> <dd class="cmyk">3 M5 Y7 K0</dd> <dd class="hex">#F4E9DE</dd> <dd class="spot">999</dd></dl></dd>
				<dd class="orange-lighter-back tint"><dl class="values"><dd class="rgb">244 G233 B222</dd> <dd class="cmyk">3 M5 Y7 K0</dd> <dd class="hex">#F4E9DE</dd> <dd class="spot">999</dd></dl></dd>
				<dd class="orange-light-back tint"><dl class="values"><dd class="rgb">244 G233 B222</dd> <dd class="cmyk">3 M5 Y7 K0</dd> <dd class="hex">#F4E9DE</dd> <dd class="spot">999</dd></dl></dd>
				<dd class="orange-orange-back spot"><dl class="values"><dd class="rgb">244 G233 B222</dd> <dd class="cmyk">3 M5 Y7 K0</dd> <dd class="hex">#F4E9DE</dd> <dd class="spot">999</dd></dl></dd>
				<dd class="orange-dark-back tint"><dl class="values"><dd class="rgb">244 G233 B222</dd> <dd class="cmyk">3 M5 Y7 K0</dd> <dd class="hex">#F4E9DE</dd> <dd class="spot">999</dd></dl></dd>
				<dd class="orange-darker-back tint"><dl class="values"><dd class="rgb">244 G233 B222</dd> <dd class="cmyk">3 M5 Y7 K0</dd> <dd class="hex">#F4E9DE</dd> <dd class="spot">999</dd></dl></dd>
				<dd class="orange-darkest-back tint"><dl class="values"><dd class="rgb">244 G233 B222</dd> <dd class="cmyk">3 M5 Y7 K0</dd> <dd class="hex">#F4E9DE</dd> <dd class="spot">999</dd></dl></dd>
				<dd class="orange-er-back accent"><dl class="values"><dd class="rgb">244 G233 B222</dd> <dd class="cmyk">3 M5 Y7 K0</dd> <dd class="hex">#F4E9DE</dd> <dd class="spot">999</dd></dl></dd>
			</dl>
		</figure>
		<figure class="color spectrum blue blue-back visible untinted unaccented">
			<dl>
				<dd class="blue-lightest-back tint"><dl class="values"><dd class="rgb">244 G233 B222</dd> <dd class="cmyk">3 M5 Y7 K0</dd> <dd class="hex">#F4E9DE</dd> <dd class="spot">999</dd></dl></dd>
				<dd class="blue-lightly-back tint"><dl class="values"><dd class="rgb">244 G233 B222</dd> <dd class="cmyk">3 M5 Y7 K0</dd> <dd class="hex">#F4E9DE</dd> <dd class="spot">999</dd></dl></dd>
				<dd class="blue-lighter-back tint"><dl class="values"><dd class="rgb">244 G233 B222</dd> <dd class="cmyk">3 M5 Y7 K0</dd> <dd class="hex">#F4E9DE</dd> <dd class="spot">999</dd></dl></dd>
				<dd class="blue-light-back tint"><dl class="values"><dd class="rgb">244 G233 B222</dd> <dd class="cmyk">3 M5 Y7 K0</dd> <dd class="hex">#F4E9DE</dd> <dd class="spot">999</dd></dl></dd>
				<dd class="blue-blue-back spot"><dl class="values"><dd class="rgb">244 G233 B222</dd> <dd class="cmyk">3 M5 Y7 K0</dd> <dd class="hex">#F4E9DE</dd> <dd class="spot">999</dd></dl></dd>
				<dd class="blue-dark-back tint"><dl class="values"><dd class="rgb">244 G233 B222</dd> <dd class="cmyk">3 M5 Y7 K0</dd> <dd class="hex">#F4E9DE</dd> <dd class="spot">999</dd></dl></dd>
				<dd class="blue-darker-back tint"><dl class="values"><dd class="rgb">244 G233 B222</dd> <dd class="cmyk">3 M5 Y7 K0</dd> <dd class="hex">#F4E9DE</dd> <dd class="spot">999</dd></dl></dd>
				<dd class="blue-darkest-back tint"><dl class="values"><dd class="rgb">244 G233 B222</dd> <dd class="cmyk">3 M5 Y7 K0</dd> <dd class="hex">#F4E9DE</dd> <dd class="spot">999</dd></dl></dd>
				<dd class="blue-er-back accent"><dl class="values"><dd class="rgb">244 G233 B222</dd> <dd class="cmyk">3 M5 Y7 K0</dd> <dd class="hex">#F4E9DE</dd> <dd class="spot">999</dd></dl></dd>
			</dl>
		</figure>
		<figure class="color spectrum yellow yellow-back visible untinted unaccented">
			<dl>
				<dd class="yellow-lightest-back tint"><dl class="values"><dd class="rgb">244 G233 B222</dd> <dd class="cmyk">3 M5 Y7 K0</dd> <dd class="hex">#F4E9DE</dd> <dd class="spot">999</dd></dl></dd>
				<dd class="yellow-lightly-back tint"><dl class="values"><dd class="rgb">244 G233 B222</dd> <dd class="cmyk">3 M5 Y7 K0</dd> <dd class="hex">#F4E9DE</dd> <dd class="spot">999</dd></dl></dd>
				<dd class="yellow-lighter-back tint"><dl class="values"><dd class="rgb">244 G233 B222</dd> <dd class="cmyk">3 M5 Y7 K0</dd> <dd class="hex">#F4E9DE</dd> <dd class="spot">999</dd></dl></dd>
				<dd class="yellow-light-back tint"><dl class="values"><dd class="rgb">244 G233 B222</dd> <dd class="cmyk">3 M5 Y7 K0</dd> <dd class="hex">#F4E9DE</dd> <dd class="spot">999</dd></dl></dd>
				<dd class="yellow-yellow-back spot"><dl class="values"><dd class="rgb">244 G233 B222</dd> <dd class="cmyk">3 M5 Y7 K0</dd> <dd class="hex">#F4E9DE</dd> <dd class="spot">999</dd></dl></dd>
				<dd class="yellow-dark-back tint"><dl class="values"><dd class="rgb">244 G233 B222</dd> <dd class="cmyk">3 M5 Y7 K0</dd> <dd class="hex">#F4E9DE</dd> <dd class="spot">999</dd></dl></dd>
				<dd class="yellow-darker-back tint"><dl class="values"><dd class="rgb">244 G233 B222</dd> <dd class="cmyk">3 M5 Y7 K0</dd> <dd class="hex">#F4E9DE</dd> <dd class="spot">999</dd></dl></dd>
				<dd class="yellow-darkest-back tint"><dl class="values"><dd class="rgb">244 G233 B222</dd> <dd class="cmyk">3 M5 Y7 K0</dd> <dd class="hex">#F4E9DE</dd> <dd class="spot">999</dd></dl></dd>
				<dd class="yellow-er-back accent"><dl class="values"><dd class="rgb">244 G233 B222</dd> <dd class="cmyk">3 M5 Y7 K0</dd> <dd class="hex">#F4E9DE</dd> <dd class="spot">999</dd></dl></dd>
			</dl>
		</figure>
		
	</div>
		
	</div>
	
	<div id="gray-palette" class="column three">
	
		<figure class="color spectrum gray gray-back untinted unaccented">
			<dl>
				<dd class="gray-lightest-back tint"><dl class="values"><dd class="rgb">94 106 113</dd> <dd class="cmyk">11 0 0 65</dd> <dd class="hex">#5e6a71</dd> <dd class="spot">431</dd></dl></dd>
				<dd class="gray-lightly-back tint"><dl class="values"><dd class="rgb">244 G233 B222</dd> <dd class="cmyk">3 M5 Y7 K0</dd> <dd class="hex">#F4E9DE</dd> <dd class="spot">999</dd></dl></dd>
				<dd class="gray-lighter-back tint"><dl class="values"><dd class="rgb">244 G233 B222</dd> <dd class="cmyk">3 M5 Y7 K0</dd> <dd class="hex">#F4E9DE</dd> <dd class="spot">999</dd></dl></dd>
				<dd class="gray-light-back tint"><dl class="values"><dd class="rgb">244 G233 B222</dd> <dd class="cmyk">3 M5 Y7 K0</dd> <dd class="hex">#F4E9DE</dd> <dd class="spot">999</dd></dl></dd>
				<dd class="gray-gray-back spot"><dl class="values"><dd class="rgb">94 106 113</dd> <dd class="cmyk">11 0 0 65</dd> <dd class="hex">#5e6a71</dd> <dd class="spot">431</dd></dl></dd>
				<dd class="gray-dark-back tint"><dl class="values"><dd class="rgb">244 G233 B222</dd> <dd class="cmyk">3 M5 Y7 K0</dd> <dd class="hex">#F4E9DE</dd> <dd class="spot">999</dd></dl></dd>
				<dd class="gray-darker-back tint"><dl class="values"><dd class="rgb">244 G233 B222</dd> <dd class="cmyk">3 M5 Y7 K0</dd> <dd class="hex">#F4E9DE</dd> <dd class="spot">999</dd></dl></dd>
				<dd class="gray-darkest-back tint"><dl class="values"><dd class="rgb">244 G233 B222</dd> <dd class="cmyk">3 M5 Y7 K0</dd> <dd class="hex">#F4E9DE</dd> <dd class="spot">999</dd></dl></dd>
				<dd class="gray-er-back accent"><dl class="values"><dd class="rgb">244 G233 B222</dd> <dd class="cmyk">3 M5 Y7 K0</dd> <dd class="hex">#F4E9DE</dd> <dd class="spot">999</dd></dl></dd>
			</dl>
		</figure>

	</div>

</section>



<section class="row halves">
	
	<div class="column one">
		
		<article>
		<?php 
		$section_one_one = get_post_meta( get_the_ID(), 'section-1-1', true );
		if( ! empty( $section_one_one ) ) { echo $section_one_one; }
		?>
		</article>
		
	</div>
	
	<div class="column two">
	
		<article>
		<?php 
		$section_one_two = get_post_meta( get_the_ID(), 'section-1-2', true );
		if( ! empty( $section_one_two ) ) { echo $section_one_two; }
		?>
		</article>
	
	</div>
	
</section>

</main>

<?php get_footer(); ?>