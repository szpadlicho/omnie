<!DOCTYPE HTML>
<html lang="pl">
<head>
	<title>Start</title>
	<?php include ("meta5.html"); ?>
</head>
<body>
	<header>
		<?php include ("menu.php"); ?>
	<header>
	<div id='page' class='page'>
		<table id='planety'>
			<tr>
				<td  id='slonce' class='slonce' style=''>
					<img id='slonce_gif' class='slonce_gif' src='images/slonce.png' />
				</td>
				<td id='merkury' class='merkury' style=''>
					<img id='merkury_gif' class='merkury_gif' src='images/merkury2.gif' />
				</td>
				<td id='wenus' class='wenus' style=''>
					<img id='wenus_gif' class='wenus_gif' src='images/wenus2.gif' />
				</td>
				<td id='ziemia' class='ziemia' style=''>
					<img id='ziemia_gif' class='ziemia_gif' src='images/ziemia2.gif' 
					onMouseDown='anime("ziemia_gif", "600px")'
					onClick='link("omnie.php", "700"), offset("slonce_gif", "merkury_gif", "wenus_gif", "mars_gif", "jowisz_gif", "saturn_gif", "uran_gif", "neptun_gif", "0px")' />
				</td>
				<td id='mars' class='mars' style=''>
					<img id='mars_gif' class='mars_gif' src='images/mars2.gif' />
				</td>
				<td id='jowisz' class='jowisz' style=''>
					<img id='jowisz_gif' class='jowisz_gif' src='images/jowisz2.gif' 
					onMouseDown='anime("jowisz_gif", "600px")'
					onClick='link("linki.php", "700"), offset("slonce_gif", "merkury_gif", "wenus_gif", "ziemia_gif", "mars_gif", "saturn_gif", "uran_gif", "neptun_gif", "0px")' />
				</td>
				<td id='saturn' class='saturn' style=''>
					<img id='saturn_gif' class='saturn_gif' src='images/saturn2.gif' 
					onMouseDown='anime("saturn_gif", "600px")'
					onClick='link("kontakt.php", "700"), offset("slonce_gif", "merkury_gif", "wenus_gif", "ziemia_gif", "mars_gif", "jowisz_gif", "uran_gif", "neptun_gif", "0px")' />
				</td>
				<td id='uran' class='uran' style=''>
					<img id='uran_gif' class='uran_gif' src='images/uran2.gif' />
				</td>
				<td id='neptun' class='neptun' style=''>
					<img id='neptun_gif' class='neptun_gif' src='images/neptun2.gif' />
				</td>
				<td id='' class='' style=''>
					
				</td>
			</tr>
		</table>
	</div>
	<div id='foot' class='foot' style=''>
		<!--<img id='_gif' class='_gif' src='' />-->
	</div>
	<div id='bg' class='bg'>
		<!--<img id='bg_gif' class='bg_gif' src='images/stars.jpg' />-->
	</div>
</body>
</html>
