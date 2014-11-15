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
        <link title="deafult" type="text/css" rel="stylesheet" href="css/content.css" />
        
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
                    $( '#earth, #jupiter, #saturn' ).removeClass( 'zoom' ).addClass( 'satellite' );
                    $( '.satellite' ).removeClass( 'paused' ).addClass( 'running' ).removeClass( 'up' ).addClass( 'back' );
                    $( '.center' ).removeClass( 'sun-small' ).addClass( 'sun-back' );
                    $( '#earth, #jupiter, #saturn' ).removeAttr( 'style' );;

                    $( '.content' ).removeClass( 'show right-p left-p' ).addClass( 'hidden' );
                });
                $( '#about' ).click(function(){
                    if ( $( '#sun' ).hasClass('sun-small') ) {
                        $( '#home' ).click();
                    }
                    $( '#earth' ).removeClass( 'satellite' ).addClass( 'zoom' );
                    $( '.satellite' ).removeClass( 'running back' ).addClass( 'paused up' );
                    $( '.center' ).removeClass( 'sun-back' ).addClass( 'sun-small' );
                    $( '#earth' ).css({'left':'-20em', 'top':'-20em', 'width':'40em','height':'40em','transition':'300ms linear','animation-name':'none'});
                    
                    $( '#about-left' ).removeClass( 'hidden' ).addClass( 'show left-p' );
                    $( '#about-right' ).removeClass( 'hidden' ).addClass( 'show right-p' );
                    
                });
                $( '#links' ).click(function(){
                    if ( $( '#sun' ).hasClass('sun-small') ) {
                        $( '#home' ).click();
                    }
                    $( '#jupiter' ).removeClass( 'satellite' ).addClass( 'zoom' );
                    $( '.satellite' ).removeClass( 'running back' ).addClass( 'paused up' );
                    $( '.center' ).removeClass( 'sun-back' ).addClass( 'sun-small' );
                    $( '#jupiter' ).css({'left':'-20em', 'top':'-20em', 'width':'40em','height':'40em','transition':'300ms linear','animation-name':'none'});
                    
                    $( '#links-left' ).removeClass( 'hidden' ).addClass( 'show left-p' );
                    $( '#links-right' ).removeClass( 'hidden' ).addClass( 'show right-p' );
                });
                $( '#contact' ).click(function(){
                    if ( $( '#sun' ).hasClass('sun-small') ) {
                        $( '#home' ).click();
                    }
                    $( '#saturn' ).removeClass( 'satellite' ).addClass( 'zoom' );
                    $( '.satellite' ).removeClass( 'running back' ).addClass( 'paused up' );
                    $( '.center' ).removeClass( 'sun-back' ).addClass( 'sun-small' );
                    $( '#saturn' ).css({'left':'-20em', 'top':'-10em', 'width':'40em','height':'20em','transition':'300ms linear','animation-name':'none'});
                    
                    $( '#contact-left' ).removeClass( 'hidden' ).addClass( 'show left-p' );
                    $( '#contact-right' ).removeClass( 'hidden' ).addClass( 'show right-p' );
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
                <div class="planet-place-holder">
                    <div id="sun" class="center">
                        <div id="mercury" class="satellite"></div>
                        <div id="venus" class="satellite"></div>
                        <div id="earth" class="satellite"></div>
                        <div id="mars" class="satellite"></div>
                        <div id="jupiter" class="satellite"></div>
                        <div id="saturn" class="satellite"></div>
                        <div id="uranus" class="satellite"></div>
                        <div id="neptune" class="satellite"></div>
                    </div>
                </div>
                <div class="content-place-holder">
                    <div id="about-left" class="content hidden" >
                        Witam !
                        <br />
                        Nazywam się Piotr Szpanelewski mam 30 lat i mieszkam w Częstochowie . Z wykształcenia jestem energoelektronikiem . Dotychczas zajmowałem się serwisem informatycznym. Od zawsze pasjonowały mnie komputery i wszystkie zagadnienia z nimi związane. W ostatnich latach ukierunkowałem się w stronę szeroko pojętej sieci www . Bardzo dobrze znam kod HTML, CSS i jego możliwości , świetnie czuje się pisząc w języku PHP, potrafię również obsługiwać bazy danych MySQL . Poznałem w większym bądź mniejszym stopniu programy do tworzenia i obsługi stron www miedzy innymi takie jak : Photoshop, Flash, Fireworks . Bardzo dobrze znam środowisko Windows i cały czas poznaje coraz popularniejsze środowisko Linux. Osobiście uważam że nie ma lepszego spełnienia zawodowego jeśli człowiek może utrzymać się ze swojej pasji . Moją jest właśnie pisanie stron www i programów opartych na języku PHP. Poza tym lubię także dobre kino i niestandardowa kuchnie . W dziale "linki" znajdują się odnośniki do ostatnich moich projektów.
                        <br />
                        <br />
                        Link do Curriculum vitae:
                        <br />
                        <a href="http://www.szpadlic.bdl.pl/PiotrSzpanelewskiCV.php" target="_blank" rel="next">Curriculum vitae</a>
                        <br />
                        Dziękuję za uwagę !
                        <br />
                    </div>
                    <div id="about-right" class="content hidden" >
                        <img id="cv_gif" src="images/cv.gif" alt="Curriculum vitae foto" title="Curriculum vitae" />
                    </div>
                    <div id="links-left" class="content left hidden" >left-links</div>
                    <div id="links-right" class="content right hidden" >right-links</div>
                    <div id="contact-left" class="content left hidden" >left-contact</div>
                    <div id="contact-right" class="content right hidden" >right-contact</div>
                </div>
            </article>
            <footer>
                <div id="count"></div>
            </footer>
        </section>
    </body>
</html>