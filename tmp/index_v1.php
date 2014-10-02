<html>
<head>
<title>Start</title>
<?php include ("meta.html"); ?>
<SCRIPT LANGUAGE="JavaScript" type="text/javascript">
<!-- Ukrycie przed przeglądarkami nie obsługującymi JavaScript
function loadPage()
{
  document.location.href = "http://funkcje.net"
}
// Koniec kodu JavaScript -->
</SCRIPT>
</head>
<body onLoad="setTimeout('loadPage()', 3000)">
	<div id='menu'>
		<div id='guziki'>
			<a id='start' class='' guz='guz' style='' href='index.php' 
				onMouseOver="document.getElementById('slonce_gif').style.width='550px'" 
				onMouseOut="document.getElementById('slonce_gif').style.width='500px'"
				onMouseDown="document.getElementById('slonce_gif').style.width='800px'">Start</a>
			<input type='button' id='omnie' class='' guz='guz' style='' href='' 
				onMouseOver="document.getElementById('ziemia_gif').style.width='60px'" 
				onMouseOut="document.getElementById('ziemia_gif').style.width='20px'"
				onMouseDown="document.getElementById('ziemia_gif').style.width='600px'"
				onClick="setTimeout('loadPage()', 3000)">O mnie</a> 
			<a id='linki' class='' guz='guz' style='' href='index.php' 
				onMouseOver="document.getElementById('jowisz_gif').style.width='200px'" 
				onMouseOut="document.getElementById('jowisz_gif').style.width='100px'"
				onMouseDown="document.getElementById('jowisz_gif').style.width='600px'">Linki</a>
			<a id='kontakt' class='' guz='guz' style='' href='index.php' 
				onMouseOver="document.getElementById('saturn_gif').style.width='300px'" 
				onMouseOut="document.getElementById('saturn_gif').style.width='180px'"
				onMouseDown="document.getElementById('saturn_gif').style.width='600px'">Kontakt</a> 
		</div>
	</div>
	<div id='page' class='page'>
		<table id='planety'>
			<tr>
				<td  id='slonce' class='slonce' style=''>
					<img id='slonce_gif' class='slonce_gif' src='image/slonce.png' />
				</td>
				<td id='merkury' class='merkury' style=''>
					<img id='merkury_gif' class='merkury_gif' src='image/merkury2.gif' />
				</td>
				<td id='wenus' class='wenus' style=''>
					<img id='wenus_gif' class='wenus_gif' src='image/wenus2.gif' />
				</td>
				<td id='ziemia' class='ziemia' style=''>
					<img id='ziemia_gif' class='ziemia_gif' src='image/ziemia2.gif' />
				</td>
				<td id='mars' class='mars' style=''>
					<img id='mars_gif' class='mars_gif' src='image/mars2.gif' />
				</td>
				<td id='jowisz' class='jowisz' style=''>
					<img id='jowisz_gif' class='jowisz_gif' src='image/jowisz2.gif' />
				</td>
				<td id='saturn' class='saturn' style=''>
					<img id='saturn_gif' class='saturn_gif' src='image/saturn2.gif' />
				</td>
				<td id='uran' class='uran' style=''>
					<img id='uran_gif' class='uran_gif' src='image/uran2.gif' />
				</td>
				<td id='neptun' class='neptun' style=''>
					<img id='neptun_gif' class='neptun_gif' src='image/neptun2.gif' />
				</td>
				<td id='' class='' style=''>
					
				</td>
			</tr>
		</table>
	</div>
	<div id='' class='' style=''>
		<!--<img id='_gif' class='_gif' src='' />-->
	</div>
<TABLE border="1">
        <tr bgcolor="#FFFFFF" id="wiersz" class="wiersz" height="50">
          <td>
	<input type="button" value="PRZYCISK" onMouseOver="document.getElementById('wiersz').style.background='#CCCCCC'" onMouseOut="document.getElementById('wiersz').style.background='#FFFFFF'">
	</td>
        </tr>
</TABLE>
</body>
</html>
