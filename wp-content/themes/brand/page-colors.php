<?php get_header(); ?>

<style>
body {
	background-color: #f9f9f9;
	}
main {
	background-image: none;
	}
.colors .column {
	min-height: 400px;
	}
.column figure {
	display: block;
	}
.colors .column figure {
	float: left;
	}
#secondary-palettes {
	background: #981e32; /* Old browsers */
	background: -moz-linear-gradient(left,  #981e32 50%, #5e6a71 50%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, right top, color-stop(50%,#981e32), color-stop(50%,#5e6a71)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(left,  #981e32 50%,#5e6a71 50%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(left,  #981e32 50%,#5e6a71 50%); /* Opera 11.10+ */
	background: -ms-linear-gradient(left,  #981e32 50%,#5e6a71 50%); /* IE10+ */
	background: linear-gradient(to right,  #981e32 50%,#5e6a71 50%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#981e32', endColorstr='#5e6a71',GradientType=1 ); /* IE6-9 */
	}
#secondary-palettes figure {
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
center {
	display: block;
	margin: 0px auto;
	width: 264px;
	}
center figure {
	float: left;
	text-align: left;
	}
.visible-1 center { width: 66px; }
.visible-2 center { width: 132px; }
.visible-3 center { width: 198px; }
.visible-4 center { width: 264px; }

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

.valued .colors .column,
.size-small .colors .column {
	min-height: 1px;
	}
.valued center,
.valued .visible-1 center,
.valued .visible-2 center,
.valued .visible-3 center,
.valued .visible-4 center,
.size-small center,
.size-small .visible-1 center,
.size-small .visible-2 center,
.size-small .visible-3 center,
.size-small .visible-4 center {
	width: 100%;
	}
.valued #secondary-palettes figure.color,
.size-small #secondary-palettes figure.color {
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
.size-small button#switcher {
	display: none;
	}
.valued .row.thirds .halves .column,
.size-small .row.thirds .halves .column {
	width: 100%;
	float: none;
	}
.valued section#palettes .column.one,
.valued section#palettes .column.two,
.valued section#palettes .column.three,
.size-small section#palettes .column.one,
.size-small section#palettes .column.two,
.size-small section#palettes .column.three {
	width: 100%;
	clear: both;
	}
.valued .column.two .column figure.color,
.size-small .column.two .column figure.color {
	width: 100%;
	clear: both;
	float: none;
	height: auto;
	}
.valued figure dl dd,
.size-small figure dl dd {
	height: auto;
	float: none;
	}
dl.values {
	display: none;
	}
.valued .spot dl.values,
.valued .tinted .tint dl.values,
.valued .accented .accent dl.values,
.size-small .spot dl.values,
.size-small .tinted .tint dl.values,
.size-small .accented .accent dl.values,
.size-lt-small .spot dl.values dd,
.size-lt-small .tinted .tint dl.values dd,
.size-lt-small .accented .accent dl.values dd {
	display: block;
	}
figure.color dl.values dd {
	font-size: 12px;
	text-transform: uppercase;
	display: inline-block;
	padding: 5px 10px;
	width: 125px;
	}

figure.color dl.values.selected dd {
	width: 100%;
	}
.size-gt-small main:not(.valued) #crimson-palette figure:not(.tinted) dl dd:first-of-type dl.values,
.size-gt-small main:not(.valued) #gray-palette figure:not(.tinted) dl dd:first-of-type dl.values {
	display: block;
	position: absolute;
	padding: 30px;
	}

.size-gt-small main:not(.valued) #crimson-palette dl dd:first-of-type dl.values dd,
.size-gt-small main:not(.valued) #gray-palette dl dd:first-of-type dl.values dd {
	height: auto;
	padding: 0px;
	display: block;
	}
main:not(.valued) #gray-palette dl dd:first-of-type dl.values {
	text-align: right;
	right: 0px;
	}
main:not(.valued) #gray-palette dl dd:first-of-type dl.values dd {
	text-align: right;
	}
	
.tinted dd.spot .values { padding-bottom: 95px; }
.tinted dd.spot .values.selected { padding-bottom: 95px; }
.accented dd.spot dl.values { padding-top: 95px; }

dl.values.selected,
.accented dd.spot dl.values.selected {
	padding: 10px 0px;
	}
.rgb::before,
.cmyk::before,
.hex::before,
.tone::before {
	font-weight: bold;
	}	
.rgb::before { content: "RGB "; width: 120px; }
.cmyk::before { content: "CMYK "; width: 140px; }
.hex::before { content: "HEX ";	}
.tone::before { content: "SPOT "; }
	
figure.color dd dl {
	color: rgba(255,255,255,.4);
	}
figure.color dd:hover dl {
	color: rgba(255,255,255,.7);
	}
figure.color dd[class*="light"] dl,
figure.color dd.accent dl {
	color: rgba(0,0,0,0.3);
	}
figure.color dd[class*="light"]:hover dl {
	color: rgba(0,0,0,0.7);
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
.size-gt-small main:not(.valued) #crimson-palette figure.color dl dd:first-of-type dl.values.selected dd,
.size-gt-small main:not(.valued) #gray-palette figure.color dl dd:first-of-type dl.values.selected dd {
	font-size: 2.5em;
	display: block;
	width: auto;
	}
.size-gt-small main:not(.valued) #crimson-palette figure.color dl dd:first-of-type dl.values.selected dd::before,
.size-gt-small main:not(.valued) #gray-palette figure.color dl dd:first-of-type dl.values.selected dd::before {
	font-size: .5em;
	display: block;
	padding-top: 15px;
	width: auto;
	}
dd.bg {
	text-align: -9000px;
	overflow: hidden;
	border-radius: 15px;
	border: 1px transparent solid;
	height: 10px;
	width: 10px;
	padding: 0px;
	}
dl.tertiaries dd.bg::before {
	content: "";
	}
dd.bg-white {
	border: 1px black solid;
	}
	
#primary-secondary .column.two {
	padding-top: 100px;
	text-align: center;
	}
#primary-secondary .column.two aside ul.downloads li:only-child {
	float: none;
	width: 100%;
	}
#primary-secondary .column.two aside ul.downloads li a {
	margin: 0px auto;
	width: 50%;
	}

</style>

<script>
$(document).ready(function() {

$('.switch').click( function() { $(this).toggleClass('on off'); } );

$('body').click(function() {
	var visible_secondaries = $( "figure.visible" ).length;
	$('#secondary-palettes').removeClass('visible-0 visible-1 visible-2 visible-3 visible-4').addClass('visible-'+visible_secondaries);
	console.log(visible_secondaries);
});

$('dl.values').click(function() {
	$(this).toggleClass('selected');
});

});

</script>

<main>

<?php get_template_part('parts/headers'); ?> 

<section id="" class="row single controls unequaled">

	<div class="column one">
		
		<dl class="primaries">
			<dt>primary</dt><dd class="crimson-text">crimson</dd>
			<dd class="gray-text" onclick="$('figure.orange-back.visible, figure.green-back.visible, figure.blue-back.visible, figure.yellow-back.visible').toggleClass('visible invisible'); $('figure.color.untinted').toggleClass('untinted tinted');">gray</dd>
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
			<dd class="switch off accents" onclick="$('figure.color').toggleClass('unaccented accented');">accents</dd>
			<dd class="switch off tints" onclick="$('figure.color').toggleClass('untinted tinted');">tints/shades</dd>
			<dt>background</dt>
			<dd class="bg bg-white gray-er-back" onclick="$('main').removeClass('gray-darkest-back gray-back').addClass('gray-er-back');"></dd>
			<dd class="bg bg-black gray-darkest-back" onclick="$('main').removeClass('gray-er-back gray-back').addClass('gray-darkest-back');"></dd>
			<dd class="bg bg-gray gray-back" onclick="$('main').removeClass('gray-er-back gray-darkest-back').addClass('gray-back');"></dd>
			<!--<dd class="switch off gray-text tints" onclick="$('main').css('background-color','#981e32');">on crimson</dd>-->
		</dl>
		
	</div>
</section>

<section id="palettes" class="row thirds unequaled colors">

	<div id="crimson-palette" class="column one unequaled">
	
		<figure class="color crimson crimson-back untinted unaccented">
		<dl>
			<dd class="crimson-back"><dl class="values"><dd class="cmyk">1 100 68 32</dd> <dd class="rgb">152 30 50</dd> <dd class="hex">#981e32</dd> <dd class="tone">100% 201</dd></dl></dd>
			<dd class="crimson-back"></dd>
			<dd class="crimson-back"></dd>
			<dd class="crimson-back"></dd>
			<dd class="crimson-back spot"><dl class="values"><dd class="cmyk">1 100 68 32</dd> <dd class="rgb">152 30 50</dd> <dd class="hex">#981e32</dd> <dd class="tone">100% 201</dd></dl></dd>
			<dd class="crimson-back"></dd>
			<dd class="crimson-back"></dd>
			<dd class="crimson-back"></dd>
			<dd class="crimson-er-back accent"><dl class="values"><dd class="cmyk">7 100 82 26</dd> <dd class="rgb">166 25 46</dd> <dd class="hex">#a6192e</dd> <dd class="tone">100% 187</dd></dl></dd>
		</dl>
		</figure>
	
	</div>
	
	<div id="secondary-palettes" class="column two unequaled">
	
	<center>
	
		<figure class="color spectrum orange orange-back visible untinted unaccented">
			<dl> 
				<dd class="orange-lightest-back tint"><dl class="values"><dd class="cmyk">0 2 5 2</dd> <dd class="rgb">248 241 235</dd> <dd class="hex">#f8f1eb</dd> <dd class="tone">95% 7572</dd></dl></dd>
				<dd class="orange-lightly-back tint"><dl class="values"><dd class="cmyk">0 7 14 5</dd> <dd class="rgb">237 220 204</dd> <dd class="hex">#eddccc</dd> <dd class="tone">85% 7572</dd></dl></dd>
				<dd class="orange-lighter-back tint"><dl class="values"><dd class="cmyk">0 20 37 13</dd> <dd class="rgb">221 190 161</dd> <dd class="hex">#ddbea1</dd> <dd class="tone">60% 7572</dd></dl></dd>
				<dd class="orange-light-back tint"><dl class="values"><dd class="cmyk">0 35 65 22</dd> <dd class="rgb">203 155 110</dd> <dd class="hex">#cb986e</dd> <dd class="tone">30% 7572</dd></dl></dd>
				<dd class="orange-orange-back spot"><dl class="values"><dd class="cmyk">0 50 93 32</dd> <dd class="rgb">182 114 51</dd> <dd class="hex">#b67233</dd> <dd class="tone">100% 7572</dd></dl></dd>
				<dd class="orange-dark-back tint"><dl class="values"><dd class="cmyk">7 52 90 38</dd> <dd class="rgb">146 91 41</dd> <dd class="hex">#925829</dd> <dd class="tone">7572+10%K</dd></dl></dd>
				<dd class="orange-darker-back tint"><dl class="values"><dd class="cmyk">23 55 85 50</dd> <dd class="rgb">109 68 31</dd> <dd class="hex">#6d441f</dd> <dd class="tone">7572+30%K</dd></dl></dd>
				<dd class="orange-darkest-back tint"><dl class="values"><dd class="cmyk">38 59 80 61</dd> <dd class="rgb">73 46 20</dd> <dd class="hex">#492e14</dd> <dd class="tone">7572+50%K</dd></dl></dd>
				<dd class="orange-er-back accent"><dl class="values"><dd class="cmyk">2 58 96 10</dd> <dd class="rgb">211 130 53</dd> <dd class="hex">#d38235</dd> <dd class="tone">100% 7412</dd></dl></dd>
			</dl>
		</figure>
		<figure class="color spectrum green green-back visible untinted unaccented">
			<dl>
				<dd class="green-lightest-back tint"><dl class="values"><dd class="cmyk">1 1 4 2</dd> <dd class="rgb">244 242 235</dd> <dd class="hex">#f4f2eb</dd> <dd class="tone">95% 7768</dd></dl></dd>
				<dd class="green-lightly-back tint"><dl class="values"><dd class="cmyk">2 3 12 7</dd> <dd class="rgb">227 223 205</dd> <dd class="hex">#e3dfcd</dd> <dd class="tone">85% 7768</dd></dl></dd>
				<dd class="green-lighter-back tint"><dl class="values"><dd class="cmyk">6 7 33 8</dd> <dd class="rgb">203 196 162</dd> <dd class="hex">#cbc4a2</dd> <dd class="tone">60% 7768</dd></dl></dd>
				<dd class="green-light-back tint"><dl class="values"><dd class="cmyk">11 13 57 31</dd> <dd class="rgb">175 163 112</dd> <dd class="hex">#afa370</dd> <dd class="tone">30% 7768</dd></dl></dd>
				<dd class="green-green-back spot"><dl class="values"><dd class="cmyk">15 19 82 45</dd> <dd class="rgb">143 126 53</dd> <dd class="hex">#8f7e35</dd> <dd class="tone">7768</dd></dl></dd>
				<dd class="green-dark-back tint"><dl class="values"><dd class="cmyk">21 24 80 50</dd> <dd class="rgb">114 101 42</dd> <dd class="hex">#72652a</dd> <dd class="tone">7768+10%K</dd></dl></dd>
				<dd class="green-darker-back tint"><dl class="values"><dd class="cmyk">33 34 77 59</dd> <dd class="rgb">86 76 32</dd> <dd class="hex">#564c20</dd> <dd class="tone">7768+30%K</dd></dl></dd>
				<dd class="green-darkest-back tint"><dl class="values"><dd class="cmyk">45 44 74 68</dd> <dd class="rgb">57 50 21</dd> <dd class="hex">#393215</dd> <dd class="tone">7768+50%K</dd></dl></dd>
				<dd class="green-er-back accent"><dl class="values"><dd class="cmyk">14 6 100 24</dd> <dd class="rgb">173 164 0</dd> <dd class="hex">#ada400</dd> <dd class="tone">398</dd></dl></dd>
			</dl>
		</figure>
		<figure class="color spectrum blue blue-back visible untinted unaccented">
			<dl>     
				<dd class="blue-lightest-back tint"><dl class="values"><dd class="cmyk">3 1 1 2</dd> <dd class="rgb">236 243 244</dd> <dd class="hex">#ecf3f4</dd> <dd class="tone">95% 5483</dd></dl></dd>
				<dd class="blue-lightly-back tint"><dl class="values"><dd class="cmyk">10 2 4 4</dd> <dd class="rgb">207 226 228</dd> <dd class="hex">#cfe2e4</dd> <dd class="tone">85% 5483</dd></dl></dd>
				<dd class="blue-lighter-back tint"><dl class="values"><dd class="cmyk">26 4 10 11</dd> <dd class="rgb">166 202 206</dd> <dd class="hex">#a6cace</dd> <dd class="tone">60% 5483</dd></dl></dd>
				<dd class="blue-light-back tint"><dl class="values"><dd class="cmyk">45 8 18 19</dd> <dd class="rgb">118 173 179</dd> <dd class="hex">#76adb3</dd> <dd class="tone">30% 5483</dd></dl></dd>
				<dd class="blue-blue-back spot"><dl class="values"><dd class="cmyk">65 11 25 27</dd> <dd class="rgb">79 134 142</dd> <dd class="hex">#4f868e</dd> <dd class="tone">100% 5483</dd></dl></dd>
				<dd class="blue-dark-back tint"><dl class="values"><dd class="cmyk">66 17 29 33</dd> <dd class="rgb">50 111 118</dd> <dd class="hex">#326f76</dd> <dd class="tone">5483+10%K</dd></dl></dd>
				<dd class="blue-darker-back tint"><dl class="values"><dd class="cmyk">68 28 38 46</dd> <dd class="rgb">37 83 89</dd> <dd class="hex">#255359</dd> <dd class="tone">5483+30%K</dd></dl></dd>
				<dd class="blue-darkest-back tint"><dl class="values"><dd class="cmyk">70 40 46 59</dd> <dd class="rgb">25 56 59</dd> <dd class="hex">#193838</dd> <dd class="tone">5483+50%K</dd></dl></dd>
				<dd class="blue-er-back accent"><dl class="values"><dd class="cmyk">92 0 34 0</dd> <dd class="rgb">0 165 189</dd> <dd class="hex">#00a5bd</dd> <dd class="tone">100% 2228</dd></dl></dd>
			</dl>
		</figure>		
		<figure class="color spectrum yellow yellow-back visible untinted unaccented">
			<dl>    
				<dd class="yellow-lightest-back tint"><dl class="values"><dd class="cmyk">1 2 5 1</dd> <dd class="rgb">249 244 231</dd> <dd class="hex">#f9f4e7</dd> <dd class="tone">95% 1245</dd></dl></dd>
				<dd class="yellow-lightly-back tint"><dl class="values"><dd class="cmyk">1 5 15 3</dd> <dd class="rgb">241 228 196</dd> <dd class="hex">#f1e4c4</dd> <dd class="tone">85% 1245</dd></dl></dd>
				<dd class="yellow-lighter-back tint"><dl class="values"><dd class="cmyk">2 14 39 7</dd> <dd class="rgb">229 205 147</dd> <dd class="hex">#e5cd93</dd> <dd class="tone">60% 1245</dd></dl></dd>
				<dd class="yellow-light-back tint"><dl class="values"><dd class="cmyk">4 24 69 13</dd> <dd class="rgb">215 178 88</dd> <dd class="hex">#d7b258</dd> <dd class="tone">30% 1245</dd></dl></dd>
				<dd class="yellow-yellow-back spot"><dl class="values"><dd class="cmyk">6 35 99 18</dd> <dd class="rgb">198 146 20</dd> <dd class="hex">#c69214</dd> <dd class="tone">1245</dd></dl></dd>
				<dd class="yellow-dark-back tint"><dl class="values"><dd class="cmyk">11 38 96 25</dd> <dd class="rgb">158 117 16</dd> <dd class="hex">#9e7510</dd> <dd class="tone">1245+10%K</dd></dl></dd>
				<dd class="yellow-darker-back tint"><dl class="values"><dd class="cmyk">25 45 90 40</dd> <dd class="rgb">119 88 12</dd> <dd class="hex">#77580c</dd> <dd class="tone">1245+30%K</dd></dl></dd>
				<dd class="yellow-darkest-back tint"><dl class="values"><dd class="cmyk">40 51 84 54</dd> <dd class="rgb">79 58 8</dd> <dd class="hex">#4f3a08</dd> <dd class="tone">1245+50%K</dd></dl></dd>
				<dd class="yellow-er-back accent"><dl class="values"><dd class="cmyk">0 31 98 0</dd> <dd class="rgb">255 184 28</dd> <dd class="hex">#ffb81c</dd> <dd class="tone">1235</dd></dl></dd>
			</dl>
		</figure>
		
	</center>
		
	</div>
	
	<div id="gray-palette" class="column three">
	
		<figure class="color spectrum gray gray-back untinted unaccented">
			<dl> 
				<dd class="gray-lightest-back tint"><dl class="values"><dd class="cmyk">4 2 2 1</dd> <dd class="rgb">239 240 241</dd> <dd class="hex">#eff0f1</dd> <dd class="tone">95% 431</dd></dl></dd>
				<dd class="gray-lightly-back tint"><dl class="values"><dd class="cmyk">10 7 7 2</dd> <dd class="rgb">215 218 219</dd> <dd class="hex">#d7dad8</dd> <dd class="tone">85% 431</dd></dl></dd>
				<dd class="gray-lighter-back tint"><dl class="values"><dd class="cmyk">26 20 18 6</dd> <dd class="rgb">181 186 190</dd> <dd class="hex">#b5babe</dd> <dd class="tone">60% 431</dd></dl></dd>
				<dd class="gray-light-back tint"><dl class="values"><dd class="cmyk">46 35 31 11</dd> <dd class="rgb">141 149 154</dd> <dd class="hex">#8d959a</dd> <dd class="tone">30% 431</dd></dl></dd>
				<dd class="gray-gray-back spot"><dl class="values"><dd class="cmyk">45 25 16 59</dd> <dd class="rgb">94 106 113</dd> <dd class="hex">#5e6a71</dd> <dd class="tone">100% 431</dd></dl></dd>
				<dd class="gray-dark-back tint"><dl class="values"><dd class="cmyk">68 55 51 35</dd> <dd class="rgb">70 78 84</dd> <dd class="hex">#464e54</dd> <dd class="tone">431+26%k</dd></dl></dd>
				<dd class="gray-darker-back tint"><dl class="values"><dd class="cmyk">71 60 57 57</dd> <dd class="rgb">42 48 51</dd> <dd class="hex">#2a3033</dd> <dd class="tone">431+55%k</dd></dl></dd>
				<dd class="gray-darkest-back tint"><dl class="values"><dd class="cmyk">0 0 0 100</dd> <dd class="rgb">44 42 41</dd> <dd class="hex">#000</dd> <dd class="tone">100% blk</dd></dl></dd>
				<dd class="gray-er-back accent"><dl class="values"><dd class="cmyk">0 0 0 0</dd> <dd class="rgb">255 255 255</dd> <dd class="hex">#fff</dd> <dd class="tone">100% white</dd></dl></dd>
			</dl>
		</figure>

	</div>

</section>



<section id="primary-secondary" class="row sidebar">
	
	<div class="column one">
		
		<article>
		<?php 
		$column = get_post_meta( get_the_ID(), 'section-1-1', true );
		if( ! empty( $column ) ) { echo $column; }
		?>
		</article>
		
	</div>
	
	<div class="column two">
	
		<aside>
		<?php 
		$column = get_post_meta( get_the_ID(), 'section-1-2', true );
		if( ! empty( $column ) ) { echo $column; }
		?>
		</aside>
	
	</div>
	
</section>

</main>

<?php get_footer(); ?>