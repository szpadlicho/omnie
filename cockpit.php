<!DOCTYPE HTML>
<html lang="pl">
<head>
	<title>Cockpit</title>
    <?php include ("meta5.html"); ?>
    <meta name="viewport" content="width=device-width,user-scalable=0,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
    <script type="text/javascript" src="stars.js" ></script>
	<style type="text/css">
        <!--/*CSS dla Stars */-->
        <!--/*
        #body  {margin:0;padding:0;background-color:#000000;overflow:hidden}
        #canvas{background-color:#000000;overflow:hidden}
        */-->
	</style>
    <link type="text/css" rel="stylesheet" href="css/cockpit.css" />
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
        position:absolute;
        top:5em;
        left:35%;
        #border: 1px solid red;
        width:400px;
        height:400px;
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
        <div class="cockpit-shape-placeholder">
            <div class="cockpit-shape-center"></div>
            <div class="cockpit-shape-top"></div>
            <div class="cockpit-shape-bottom"></div>
            <div class="planet"></div>
            <div class="cockpit-shape-right"></div>
            <div class="cockpit-shape-left"></div>
            <div class="cockpit-shape-last"></div>
        </div>
    </body>
</html>