<!DOCTYPE html>
<html>
<head>
	<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style type="text/css">
		video#bgvid { 
		    position: fixed;
		    top: 48%;
		    left: 50%;
		    min-width: 100%;
		    min-height: 100%;
		    width: auto;
		    height: auto;
		    z-index: -100;
		    -ms-transform: translateX(-50%) translateY(-50%);
		    -moz-transform: translateX(-50%) translateY(-50%);
		    -webkit-transform: translateX(-50%) translateY(-50%);
		    transform: translateX(-50%) translateY(-50%);
		    background: url(polina.jpg) no-repeat;
		    background-size: cover; 
		}


		/* Overlay style */
		.overlay {
			position: fixed;
			width: 100%;
			height: 100%;
			top: 0;
			left: 0;
			background: rgba(0,0,0,0.85);
		}

		/* Overlay closing cross */
		.overlay .overlay-close {
			width: 80px;
			height: 80px;
			position: absolute;
			right: 20px;
			top: 20px;
			overflow: hidden;
			border: none;
			background: url(img/cross.png) no-repeat center center;
			text-indent: 200%;
			color: transparent;
			outline: none;
			z-index: 100;
		}

		/* Menu style */
		.overlay nav {
			text-align: center;
			position: relative;
			top: 50%;
			height: 60%;
			-webkit-transform: translateY(-50%);
			transform: translateY(-50%);
		}

		.overlay ul {
			list-style: none;
			padding: 0;
			margin: 0 auto;
			display: inline-block;
			height: 100%;
			position: relative;
		}

		.overlay ul li {
			display: block;
			height: 20%;
			height: calc(100% / 5);
			min-height: 54px;
			-webkit-backface-visibility: hidden;
			backface-visibility: hidden;
		}

		.overlay ul li a {
			font-size: 54px;
			font-weight: 300;
			display: block;
			color: #fff;
			-webkit-transition: color 0.2s;
			transition: color 0.2s;
		}

		.overlay ul li a:hover,
		.overlay ul li a:focus {
			color: #e3fcb1;
		}

		/* Effects */
		.overlay-slidedown {
			visibility: hidden;
			-webkit-transform: translateY(-100%);
			transform: translateY(-100%);
			-webkit-transition: -webkit-transform 0.4s ease-in-out, visibility 0s 0.4s;
			transition: transform 0.4s ease-in-out, visibility 0s 0.4s;
		}

		.overlay-slidedown.open {
			visibility: visible;
			-webkit-transform: translateY(0%);
			transform: translateY(0%);
			-webkit-transition: -webkit-transform 0.4s ease-in-out;
			transition: transform 0.4s ease-in-out;
		}

		@media screen and (max-height: 30.5em) {
			.overlay nav {
				height: 70%;
				font-size: 34px;
			}
			.overlay ul li {
				min-height: 34px;
			}
		}
	</style>
	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
	<script src="js/modernizr.custom.js"></script>
</head>
<body>

<p><button id="trigger-overlay" type="button" style="z-index:80;">Open Overlay</button></p>
<video playsinline autoplay controls poster="" id="bgvid">

    <source src="http://movies.apple.com/media/us/html5/showcase/2011/demos/apple-html5-demo-tron-us_848x352.m4v">
    <source src="http://movies.apple.com/media/us/html5/showcase/2011/demos/apple-html5-demo-tron-us_848x352.m4v">
</video>






<!-- open/close -->
		<div class="overlay overlay-slidedown">
			<button type="button" class="overlay-close" style="z-index:200;">Close</button>
			<nav>
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Work</a></li>
					<li><a href="#">Clients</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</nav>
		</div>

		<script src="js/classie.js"></script>
		<script src="js/demo1.js"></script>
</body>
</html>