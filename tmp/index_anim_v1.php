<!DOCTYPE HTML>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <title>O mnie</title>
        <meta name="description" content="Strona o mnie Piotr Szpanelewski. Strona autorska" />
        <meta name="keywords" content="o mnie, strona autorska, Piotr Szpanelewski," />
        <meta name="author" content="Piotr Szpanelewski szpadlicho@gmail.com" />
        <meta name="dcterms.created" content="mon 9 dec 2013 09:00:00" />
        <meta name="dcterms.modified" content="mon 10 dec 2013 09:52:17" />
        <meta name="viewport" content="width=device-width,user-scalable=0,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0"><!--stars-->

        <link title="deafult" type="text/css" rel="stylesheet" href="css/reset.css" />
        <link title="deafult" type="text/css" rel="stylesheet" href="css/style.css" />
        <link title="deafult" type="text/css" rel="stylesheet" href="css/stars.css" />
        <link title="deafult" type="text/css" rel="stylesheet" href="css/menu.css" />
        <link title="deafult" type="text/css" rel="stylesheet" href="css/planets.css" />
        
        <!--<script src="http://code.jquery.com/jquery-1.9.1.js"></script>-->
        <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="js/scrypt.js"></script>
        <script type="text/javascript" src="js/stars.js" ></script>
        <script type="text/javascript">
            /*długość okna przegladarki*/
            var both = function () {
                // debugger
                var htt = $(window).height();
                var wtt = $(window).width();
                $('#count').css({'color':'white'});
                $('#count').text(wtt+'/'+htt);
                // setup
                $( '#relative-holder' ).css({'width':wtt+'px','height':htt+'px'});
            };
            $(document).ready(both);
            $(document).load(both);
            $(window).resize(both);
            $(document).ready(function(){
                var center_ratio = 40;
                var satellite_ratio = 10;
                var size = parseInt($( 'body' ).css('font-size'));
                $( '#home' ).click(function(){
                    $( '#earth' ).removeClass( 'zoom' );
                    $( '#earth' ).addClass( 'satellite' );
                    $( '.satellite' ).removeClass( 'paused' );
                    $( '.satellite' ).addClass( 'running' );
                    $( '.satellite' ).removeClass( 'up' );
                    $( '.satellite' ).addClass( 'back' );
                    $( '.center' ).removeClass( 'sun-small' );
                    $( '.center' ).addClass( 'sun-back' );
                    //var worg = $( '#sun' ).width();
                    //var wem = worg / size;
                    //$( '#sun' ).css({'width':wem-center_ratio+'em', 'height':wem-center_ratio+'em'});
                    //$( '#sun' ).css({'width':20+'em', 'height':20+'em'});
                    $( '#earth' ).css({'left':'8em', 'top':'10em', 'width':'1.4em','height':'1.4em','transition':'300ms linear'});
                    
                });
                $( '#about' ).click(function(){
                    $( '#earth' ).removeClass( 'satellite' );
                    $( '#earth' ).addClass( 'zoom' );
                    $( '.satellite' ).addClass( 'paused' );
                    $( '.satellite' ).removeClass( 'running' );
                    $( '.satellite' ).addClass( 'up' );
                    $( '.satellite' ).removeClass( 'back' );
                    
                    //$( '#mercury,#venus,#mars,#jupiter,#saturn,#uranus,#neptune' ).removeClass( 'running back' );
                    //$( '#mercury,#venus,#mars,#jupiter,#saturn,#uranus,#neptune' ).addClass( 'paused up' );
                    //$( '#earth' ).addClass( 'paused' );
                    
                    $( '.center' ).addClass( 'sun-small' );
                    $( '.center' ).removeClass( 'sun-back' );
                    //var worg = $( '#sun' ).width();
                    //var wem = worg / size;
                    //$( '#sun' ).css({'width':wem+center_ratio+'em', 'height':wem+center_ratio+'em'});
                    //$( '#sun' ).css({'width':0+'em', 'height':0+'em'});
                    $( '#earth' ).css({'left':'-10em', 'top':'-10em', 'width':'20em','height':'20em','transition':'300ms linear'});
                    
                    
                    //$('#count').append('/'+worg);
                    //$('#count').append('/'+size);
                    //$('#count').append('/'+em);
                });
                $( '#links' ).click(function(){
                    $( '.satellite' ).addClass( 'paused' );
                    $( '.satellite' ).removeClass( 'running' );
                });
                $( '#contact' ).click(function(){
                    $( '.satellite' ).removeClass( 'paused' );
                    $( '.satellite' ).addClass( 'running' );
                });
            });

        </script>
    </head>
    <body onload="start()" onresize="resize()" onorientationchange="resize()" onmousedown="context.fillStyle='rgba(0,0,0,'+opacity+')'; star_speed=15.5;" onmouseup="frezz(200)">
        <canvas id="starfield" style="background-color:#000000"></canvas>
        <section id="relative-holder">
            <header>
                <nav id='menu'>
                    <a id="home" class="button">Home</a>
                    <a id="about" class="button">About Me</a>
                    <a id="links" class="button">Links</a>
                    <a id="contact" class="button">Contact</a>
                </nav>
            </header>
            <article>
                <div id="sun" class="center">
                    <div id="mercury" class="satellite"></div>
                    <div id="venus" class="satellite"></div>
                    <div id="earth" class="satellite zoom"></div>
                    <div id="mars" class="satellite"></div>
                    <div id="jupiter" class="satellite"></div>
                    <div id="saturn" class="satellite"></div>
                    <div id="uranus" class="satellite"></div>
                    <div id="neptune" class="satellite"></div>
                </div>
            </article>
            <footer>
                <div id="count"></div>
            </footer>
        </section>
    </body>
</html>