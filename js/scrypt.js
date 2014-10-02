//-----funkcja do opuzniania linkow-----
function link(where, ile){
	setTimeout(function(){
		window.location.href = where;
	},ile)
}
//----animacja powiekszjaca obrazek-----
function anime(what, size, pos){
	document.getElementById(what).style.width=size;
	$('#'+pos).css({"top":"90px", "left":"220px", "z-index":"2"});
	//$('#'+pos+'_div').css({"display":"none"});	$('body').css({"background-image":"url('images/stars.jpg')","background-repeat":"no-repeat","background-attachment":"fixed","background-position":"center","-webkit-background-size":"cover","-moz-background-size":"cover","-o-background-size":"cover","background-size":"cover","animation":"gwiazdy 9000s linear infinite alternate"});
	//$("body").css({"animation":"gwiazdy 20s linear infinite alternate","font-size":"1em"});
}
//----animacja zmniejszajaca obrazki----
function offset(what1,what2,what3,what4,what5,what6,what7,what8, size){
	document.getElementById(what1).style.width=size;
	document.getElementById(what2).style.width=size;
	document.getElementById(what3).style.width=size;
	document.getElementById(what4).style.width=size;
	document.getElementById(what5).style.width=size;
	document.getElementById(what6).style.width=size;
	document.getElementById(what7).style.width=size;
	document.getElementById(what8).style.width=size;	
}
//---animacja przeladowania strony----
$(document).ready(function() {
        var overload_time = 700;/*czas animacji*/
        $('body').hide();
        $('body').fadeIn(overload_time);
        $('#button').click(/*orginalnie było $('a').click( */
        function()
        {
                var href = $(this).attr("href");
                
                var xx = document.referrer;
                if (href.indexOf("http") > -1) {
                        var url = href.match(/:\/\/(www\.)?(.[^/:]+)/)[2];
                        if (url == window.location.hostname) {
                                $('body').fadeOut(overload_time);
                        }
                } else {
                        $('body').fadeOut(overload_time);
                }
                
                if (href.indexOf("./") > -1) {
                        $('body').fadeIn(overload_time);
                }
                return true;
        })
});