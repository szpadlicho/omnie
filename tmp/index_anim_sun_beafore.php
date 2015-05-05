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
                    $( '.satellite' ).removeClass( 'paused' ).addClass( 'running' );
                    $( '#earth, #jupiter, #saturn, .center, .satellite' ).removeAttr( 'style' );

                    $( '.content' ).removeClass( 'show right-p left-p' ).addClass( 'hidden' );
                });
                $( '#about' ).click(function(){
                    if ( $( '#sun' ).hasClass('paused') ) {
                        $( '#home' ).click();
                    }
                    $( '#earth' ).removeClass( 'satellite' ).addClass( 'zoom' );
                    $( '.center, .satellite' ).removeClass( 'running' ).addClass( 'paused' ).css({'width':'0','heigh':'0'});
                    $( '#earth' ).css({'left':'-20em', 'top':'-10em', 'width':'40em','height':'40em','transition':'300ms linear','animation-name':'none'});
                    
                    $( '#about-left' ).removeClass( 'hidden' ).addClass( 'show left-p' );
                    $( '#about-right' ).removeClass( 'hidden' ).addClass( 'show right-p' );
                    
                });
                $( '#links' ).click(function(){
                    if ( $( '#sun' ).hasClass('paused') ) {
                        $( '#home' ).click();
                    }
                    $( '#jupiter' ).removeClass( 'satellite' ).addClass( 'zoom' );
                    $( '.center, .satellite' ).removeClass( 'running' ).addClass( 'paused' ).css({'width':'0','heigh':'0'});
                    $( '#jupiter' ).css({'left':'-20em', 'top':'-10em', 'width':'40em','height':'40em','transition':'300ms linear','animation-name':'none'});
                    
                    $( '#links-left' ).removeClass( 'hidden' ).addClass( 'show left-p' );
                    $( '#links-right' ).removeClass( 'hidden' ).addClass( 'show right-p' );
                });
                $( '#contact' ).click(function(){
                    if ( $( '#sun' ).hasClass('paused') ) {
                        $( '#home' ).click();
                    }
                    $( '#saturn' ).removeClass( 'satellite' ).addClass( 'zoom' );
                    $( '.center, .satellite' ).removeClass( 'running' ).addClass( 'paused' ).css({'width':'0','heigh':'0'});
                    $( '#saturn' ).css({'left':'-20em', 'top':'-0em', 'width':'40em','height':'20em','transition':'300ms linear','animation-name':'none'});
                    
                    $( '#contact-left' ).removeClass( 'hidden' ).addClass( 'show left-p' );
                    $( '#contact-right' ).removeClass( 'hidden' ).addClass( 'show right-p' );
                });
                /**/
                $( '.project-link' ).hover(function(){
                    var url = $(this).attr( 'href' );
                    $( '#links-right' ).html( '<object width="100%" height="100%" type="text/html" data="'+url+'"/>' );
                });
            });

        </script>
    </head>
    <body onload="start()" onresize="resize()" onorientationchange="resize()" >
        <canvas id="starfield" style="background-color:#000000"></canvas>
        <section id="relative-holder">
            <header>
                <nav id='menu' onmousedown="context.fillStyle='rgba(0,0,0,'+opacity+')'; star_speed=15.5;" onmouseup="frezz(200)">
                    <a id="home" class="button">Home</a>
                    <a id="about" class="button">About Me</a>
                    <a id="links" class="button">Projects</a>
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
                    <div id="about-left" class="content left hidden" >
                        <h1>Witam</h1>
                        <p class="ak">
                        Nazywam się Piotr Szpanelewski mam 32 lat i mieszkam w Częstochowie. Z wykształcenia jestem energoelektronikiem. Dotychczas zajmowałem się serwisem informatycznym, moderacją sklepów online, tworzeniem stron. Od zawsze pasjonowały mnie komputery i wszystkie zagadnienia z nimi związane. W ostatnich latach ukierunkowałem się w stronę szeroko pojętej sieci www. Bardzo dobrze znam kod HTML i CSS oraz jego możliwości, nie jest mi obca biblioteka jQuery dla języka javaScript, świetnie czuje się pisząc w języku PHP, potrafię również obsługiwać bazy danych MySQL. Poznałem w większym bądź mniejszym stopniu programy do tworzenia i obsługi stron www miedzy innymi takie jak: Photoshop, Flash, Fireworks. Bardzo dobrze znam środowisko Windows i cały czas poznaje coraz popularniejsze środowisko Linux. Osobiście uważam że nie ma lepszego spełnienia zawodowego jeśli człowiek może utrzymać się ze swojej pasji. Moją jest właśnie pisanie stron www i programów opartych na języku PHP. Poza tym lubię także dobre kino i niestandardowa kuchnie. W dziale "Projekty" znajdują się odnośniki do ostatnich moich projektów.</p>
                        <br />
                        <p class="cn">Link do Curriculum vitae:</p>
                        <p class="cn"><a href="http://www.szpadlic.bdl.pl/PiotrSzpanelewskiCV.php" target="_blank" rel="next">Curriculum vitae</a></p>
                        <p class="cn">Dziękuję za poświęcony czas.</p>
                        <p>
                    </div>
                    <div id="about-right" class="content right hidden" >
                        <img id="cv_gif" src="images/cv.gif" alt="Curriculum vitae foto" title="Curriculum vitae" />
                    </div>
                    <div id="links-left" class="content left hidden" >
                        <h1>Projekty</h1>
                        <br />
                        <p class="ak">System zarządzania sklepem CMS</p>
                        <p class="cn"><a class="project-link" title="" target="_blank" href="http://www.atwork.szpadlic.bdl.pl">Sklep online</a></p>
                        <p class="ak">System zarządzania plikami na serwerze.</p>
                        <p>Stworzony dla potrzeb CMS-a, możliwość operacji na wielu plikach.</p>
                        <p class="cn"><a class="project-link" title="" target="_blank" href="http://www.atwork.szpadlic.bdl.pl/cmd/cmd.php">Zarządzanie plikami</a></p>
                        <p class="ak">W pełni funkcjonalny poradnik jak Kupić i czym się kierować wybierając meble do salonu fryzjerskiego. Strona powstała przy współpracy z grafikiem.</p>
                        <p class="cn"><a class="project-link" title="" target="_blank" href="http://www.meblefryzjerskie.info">Poradnik Meble fryzjerskie</a></p>
                        <p class="ak">Strona firmy High Hair prezentująca posiadany asortyment. Strona powstała przy współpracy z grafikiem.</p>
                        <p class="cn"><a class="project-link" title="" target="_blank" href="http://www.highhair.pl">High Hair</a></p>
                        <p class="ak">Współpracowałem przy tworzeniu bloga dla firmy HiHair. Strona powstała przy współpracy z grafikiem.</p>
                        <p class="cn"><a class="project-link" title="" target="_blank" href="http://www.hihair.pl">HiHair.pl</a></p>
                        <p class="ak">Program do stworzenia forum.</p>
                        <p>Opcje użytkownika po wpisaniu w pole login: czegokolwiek. </p>
                        <p>Opcje administracyjne po wpisaniu w pole login: admin. </p>
                        <p class="cn"><a class="project-link" title="" target="_blank" href="http://www.forum.szpadlic.bdl.pl">www.forum.szpadlic.bdl.pl</a></p>
                        <p class="ak">Program do wstawiania znaku wodnego w grafikę.</p>
                        <p class="cn"><a class="project-link" title="" target="_blank" href="http://www.znak.szpadlic.bdl.pl">www.znak.szpadlic.bdl.pl</a></p>
                    </div>
                    <div id="links-right" class="content right hidden">Preview</div>
                    <div id="contact-left" class="content left hidden" >szpadlicho@gmail.com</div>
                    <div id="contact-right" class="content right hidden" >kom. 88895877</div>
                </div>
            </article>
            <footer>
                <div id="count"></div>
            </footer>
        </section>
    </body>
</html>