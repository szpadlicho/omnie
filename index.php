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
	<meta name="viewport" content="width=device-width,user-scalable=0,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
    <script type="text/javascript" src="stars.js" ></script>
	<style type="text/css">
    <!--/*CSS dla Stars */-->
	body  {margin:0;padding:0;background-color:#000000;font-size:0;overflow:hidden}
	canvas{background-color:#000000;overflow:hidden}
	</style>
    <style type="text/css">
    body{
        background-color:black;
        font-size:16px;
    }
    @-webkit-keyframes animatedBackground {
        from { background-position: 0 0; }
        to { background-position: 100% 0; }
    }
    /*
    @-webkit-keyframes animatedBackground {
        from { -webkit-transform: translateX(0); }
        to { -webkit-transform: translateX(100%); }
    }
    */
    @keyframes animatedBackground {
        from { background-position: 0 0; }
        to { background-position: 100% 0; }
    }
    .planet {
        #border: 1px solid red;
        width:500px;
        height:500px;
        border-radius:50%;
        #background-image: url(images/Galaxy.jpg);
        background-image: url(images/earth_day5.jpg);
        #mask: url(#masking);
        background-size: auto 100%;
        background-position: 0px 0px;
        background-repeat: repeat;
        -webkit-animation: animatedBackground 15s linear infinite ;
        animation: animatedBackground 15s linear infinite ;
        
        -webkit-box-shadow: inset 0px 0px 54px 4px rgba(0,0,0,1);
-moz-box-shadow: inset 0px 0px 54px 4px rgba(0,0,0,1);
box-shadow: inset 0px 0px 54px 4px rgba(0,0,0,1);
    }
    .planet{
        margin: 0 auto;
        margin-top: 5em;
    }
	</style>
</head>
<body onload="start()" onresize="resize()" onorientationchange="resize()" onmousedown="context.fillStyle='rgba(0,0,0,'+opacity+')'; star_speed=15.5;" onmouseup="frezz(2000)">
    <canvas id="starfield" style="background-color:#000000"></canvas>
	<section id="place-holder">
		<div id="relative-holder">
			<header>
				<nav id='menu'>
					<div id="start_span">
                        <input class="button" type="button" value="Begin"/>
					</div>
					<div id="omnie_span">
						<input class="button" type="button" value="Home"/>
					</div>
					<div id="linki_span">
						<input class="button" type="button" value="About Me"/>
					</div>
					<div id="kontakt_span">
                        <input class="button" type="button" value="Links"/>
					</div>
				</nav>
			</header>
			<article>
                <div class="planet"></div>
			</article>
			<footer>
				<div id="count"></div>
				<div id="count2"></div>
			</footer>
		</div>
	</section>
</body>
</html>
