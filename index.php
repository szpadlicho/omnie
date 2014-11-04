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
        
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
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
            };
            $(document).ready(both);
            $(document).load(both);
            $(window).resize(both);
        </script>
    </head>
    <body onload="start()" onresize="resize()" onorientationchange="resize()" onmousedown="context.fillStyle='rgba(0,0,0,'+opacity+')'; star_speed=15.5;" onmouseup="frezz(1000)">
        <canvas id="starfield" style="background-color:#000000"></canvas>
        <section id="place-holder">
            <div id="relative-holder">
                <header>
                    <nav id='menu'>
                        <div id="home_div">
                            <input class="button" type="button" value="Home"/>
                        </div>
                        <div id="aboutme_div">
                            <input class="button" type="button" value="About Me"/>
                        </div>
                        <div id="links_div">
                            <input class="button" type="button" value="Links"/>
                        </div>
                        <div id="contact_div">
                            <input class="button" type="button" value="Contact"/>
                        </div>
                    </nav>
                </header>
                <article>
                    <!--<div class="planets"></div>-->
                    <div id="sun" class="planets_all"></div>
                    <div id="" class="planets_all"></div>
                    <div id="" class="planets_all"></div>
                    <div id="" class="planets_all"></div>
                    <div id="" class="planets_all"></div>
                    <div id="" class="planets_all"></div>
                </article>
                <footer>
                    <div id="count">asd</div>
                </footer>
            </div>
        </section>
    </body>
</html>
