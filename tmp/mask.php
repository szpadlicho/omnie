<!DOCTYPE HTML>
<html lang="pl">
<head>
	<title>Mask</title>
	<style type="text/css">
    body{
        background-color:black;
    }
    svg {
        position:absolute;
    }
    @-webkit-keyframes animatedBackground {
        from { background-position: 0 0; }
        to { background-position: 100% 0; }
    }
    @keyframes animatedBackground {
        from { background-position: 0 0; }
        to { background-position: 100% 0; }
    }
    .planet {
        border: 1px solid red;
        width:500px;
        height:500px;
        background-image: url(images/Galaxy.jpg);
        mask: url(#masking);
        background-size: auto 100%;
        background-position: 0px 0px;
        background-repeat: repeat-x;
        -webkit-animation: animatedBackground 5s linear infinite;
        animation: animatedBackground 5s linear infinite;
    }
    .planet2 {
        #border: 1px solid red;
        width:500px;
        height:500px;
        border-radius:50%;
        background-image: url(images/slonce.png);
        #mask: url(#masking);
        background-size: auto 100%;
        background-position: 0px 0px;
        background-repeat: repeat-x;
        -webkit-animation: animatedBackground 5s linear infinite;
        animation: animatedBackground 5s linear infinite;
    }
    #mask{
        width:500px;
        height:500px;
    }
	</style>
</head>
<body>
<svg>
  <defs>
    <mask id="masking" maskUnits="objectBoundingBox" maskContentUnits="objectBoundingBox">
      <rect y="0.3" width="1" height=".7" fill="transparent" />
      <circle cx=".5" cy=".5" r=".45" fill="white" />
    </mask>
  </defs>
</svg>
<div class="planet"></div>
<div class="planet2"></div>