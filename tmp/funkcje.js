//<!-- Ukrycie przed przeglądarkami nie obsługującymi JavaScript
//var where = 'index.php';
//$(document).ready(
//function loadPage(){};
//function omnie()
//{
  //setTimeout(document.location.href = "index.php", 800);
  //document.location.href = where ;
  //setTimeout('document.location.href = "index.php?cmd=omnie"', 800); 
  //console.log(where);
//};
//);
// Koniec kodu JavaScript -->
//-------------wielkosc obrazka
<script>
var imgWidth = $("#ziemia_gif").width();
var imgHeight = $("#ziemia_gif").height();
console.log(imgWidth);
$('p.listprice').html(imgWidth);
   
$('p.listprice').append(imgHeight);

$('.listprice').text(imgWidth);
</script>
///-------wyswietlenie----------------------
<p id='listprice' class='listprice' style='color:white;'>gg <script>document.write(imgWidth);</script></p>




//----------------------------------------------
<script>
$(document).ready(function() {
var imgWidth = $("#ziemia_gif").width();
    //tutaj nasze skrypty jquery
	$('#omnie').click(function() {
	
		alert(imgWidth);
		console.log(imgWidth);
	})
 
})
</script>



//---------------------------------------------------------
<TABLE border="1">
        <tr bgcolor="#FFFFFF" id="wiersz" class="wiersz" height="50">
          <td>
	<input type="button" value="PRZYCISK" onMouseOver="document.getElementById('wiersz').style.background='#CCCCCC'" onMouseOut="document.getElementById('wiersz').style.background='#FFFFFF'">
	</td>
        </tr>
</TABLE>
//---------------------------------------------------------