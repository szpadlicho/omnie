<!DOCTYPE HTML>
<html lang="pl">
<head>
	<title>Start</title>
	<?php include ("meta5.html"); ?>
	<style type="text/css">

	</style>
	<script type="text/javascript">
	/*długość okna przegladarki*/
		window.onload = setWidth; 
		window.onresize = setWidth;
		function setWidth(){
			var fmt = document.documentElement.clientWidth;			
			document.getElementById('count').innerHTML=fmt+'s';
			// moje
			//var wyn = fmt / 3.2;
			var wyn = fmt / 7;
			document.getElementById('count2').innerHTML=wyn+'s';
			$("body").css({"animation":"gwiazdy "+wyn+"s linear infinite alternate","font-size":"1em"});
		};
	</script>

</head>
<body>
	<section id="place-holder">
	<h1 class="hedha">Start</h1>
		<div id="relative-holder">
			<header>
				<nav id='menu'>
					<div id="start_span">
						<input class="button" type="button" value="Start" onClick='link("index.php", "700"), offset("merkury_gif", "wenus_gif", "ziemia_gif", "mars_gif", "jowisz_gif", "saturn_gif", "uran_gif", "neptun_gif", "0px"), anime("slonce_gif", "600px")' />
						<div id="slonce_div" >
							<div id="circle1" ></div>
							<div id="diagonally1" ></div>
							<div id="horizontally1" ></div>
							<div id="title1" ><h2>Słonce</h2></div>
						</div>
						<div  id="slonce" class="planets">
							<img id="slonce_gif" src="images/slonce.png" alt="Słońce-gwiazda" title="Słońce" />
						</div>
					</div>
					<div id="omnie_span">
						<input class="button" type="button" value="O mnie" onClick='link("omnie.php", "700"), offset("slonce_gif", "merkury_gif", "wenus_gif", "mars_gif", "jowisz_gif", "saturn_gif", "uran_gif", "neptun_gif", "0px"), anime("ziemia_gif", "500px", "ziemia")' />
						<div id="ziemia_div" >
							<div id="circle2" ></div>
							<div id="diagonally2" ></div>
							<div id="horizontally2" ></div>
							<div id="title2" ><h2>Ziemia</h2></div>
						</div>
						<div id="ziemia" class="planets">
							<img id="ziemia_gif" src="images/ziemia2.gif" alt="Ziemia-planeta" title="Ziemia"
							onMouseDown='anime("ziemia_gif", "600px", "ziemia")'
							onClick='link("omnie.php", "700"), offset("slonce_gif", "merkury_gif", "wenus_gif", "mars_gif", "jowisz_gif", "saturn_gif", "uran_gif", "neptun_gif", "0px")' />
						</div>
					</div>
					<div id="linki_span">
						<input id="linki_menu" class="button" type="button" value="Linki" onClick='link("linki.php", "700"), offset("slonce_gif", "merkury_gif", "wenus_gif", "ziemia_gif", "mars_gif", "saturn_gif", "uran_gif", "neptun_gif", "0px"), anime("jowisz_gif", "600px", "jowisz")' />
						<div id="jowisz_div" >
							<div id="circle3" ></div>
							<div id="diagonally3" ></div>
							<div id="horizontally3" ></div>
							<div id="title3" ><h2>Jowisz</h2></div>
						</div>
						<div id="jowisz" class="planets">
							<img id="jowisz_gif" src="images/jowisz2.gif" alt="Jowisz-planeta" title="Jowisz"
							onMouseDown='anime("jowisz_gif", "600px")'
							onClick='link("linki.php", "700"), offset("slonce_gif", "merkury_gif", "wenus_gif", "ziemia_gif", "mars_gif", "saturn_gif", "uran_gif", "neptun_gif", "0px")' />
						</div>
					</div>
					<div id="kontakt_span">
						<input id="kontakt_menu" class="button" type="button" value="Kontakt" onClick='link("kontakt.php", "700"), offset("slonce_gif", "merkury_gif", "wenus_gif", "ziemia_gif", "mars_gif", "jowisz_gif", "uran_gif", "neptun_gif", "0px"), anime("saturn_gif", "600px", "saturn")' />
						<div id="saturn_div" >
							<div id="circle4" ></div>
							<div id="diagonally4" ></div>
							<div id="horizontally4" ></div>
							<div id="title4" ><h2>Saturn</h2></div>
						</div>
					<div id="saturn" class="planets">
						<img id="saturn_gif" src="images/saturn2.gif" alt="Saturn-planeta" title="Saturn"
						onMouseDown='anime("saturn_gif", "600px")'
						onClick='link("kontakt.php", "700"), offset("slonce_gif", "merkury_gif", "wenus_gif", "ziemia_gif", "mars_gif", "jowisz_gif", "uran_gif", "neptun_gif", "0px")' />
					</div>
					</div>
				</nav>
			</header>
			<article>
			<h2 class="hedha">Index</h2>
					<!--slonce-->
					<div id="merkury" class="planets">
						<img id="merkury_gif" src="images/merkury2.gif" alt="Merkury-planeta" title="Merkury" />
					</div>
					<div id="wenus" class="planets">
						<img id="wenus_gif" src="images/wenus2.gif" alt="Wenus-planeta" title="Wenus" />
					</div>
					<!--ziemia-->
					<div id="mars" class="planets">
						<img id="mars_gif" src="images/mars2.gif" alt="Mars-planeta" title="Mars" />
					</div>
					<!--jowisz-->
					<!--saturn-->
					<div id="uran" class="planets">
						<img id="uran_gif" src="images/uran2.gif" alt="Uran-planeta" title="Uran" />
					</div>
					<div id="neptun" class="planets">
						<img id="neptun_gif" src="images/neptun2.gif" alt="Neptun-planeta" title="Neptun" />
					</div>
			</article>
			<footer>
				<div id="count"></div>
				<div id="count2"></div>
			</footer>
		</div>
	</section>

</body>
</html>
