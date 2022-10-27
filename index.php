<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sitio web en mantenimiento</title>
	<link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
	<link rel="stylesheet" href="style-dist.css">
	<style type="text/css">
		$
		*,
		*::before,
		*::after {
			box-sizing: border-box; }
		
		body, html {
			font-family: 'Source Sans Pro', sans-serif;
			margin: 0;
			padding: 0;
			line-height: 1.2; }
				
		h1, h2, h3, p {
			margin: 0;
			font-weight: 400; }

		a {
		    text-decoration: none;
		    color: #444; }	

		.coverPage {
			display: flex;
			align-items: center;
			justify-content: center;
			height: 100vh; }

		.coverPage::before {
		    content: '';
		    display: block;
		    position: absolute; 
		    opacity: .8;
		    width: 100vw;
		    height: 100vh;
		    top: 0; }

		.__coverPage-content {
			display: flex;
			align-items: center;
			justify-content: center;
			flex-direction: column;
			color: #444;
			height: 50%;
			width: 60%;
			z-index: 1000;
			text-align: center;
			opacity: .9;
			padding: 1em; }

		.__coverPage-content h2 {
			font-size: 2.4em;
			color: #1E6292;
			opacity: .8;}

		.__coverPage-content h3 {
			font-size: 1.6em;
			margin-bottom: .8em;
			text-transform: uppercase;
			opacity: .7;
			color: #444; }

		.__coverPage-content p {
			font-size: .95em;
			margin-bottom: 1.5em;
			line-height: 1.5;
			opacity: .7; }

		.socialIcon {
			margin-right: 10px;
			opacity: .7; }

		.socialIcon i {
			display: inline-flex;
			justify-content: center;
			align-items: center;
			font-size: 20px;
			border: 2px solid #444;
			border-radius: 50%;
			padding: 15px;
			height: 25px;
			width: 25px;
			transition: all .3s }

		.socialIcon i:hover {
			color: #1E6292;
			border-color: #1E6292; }

		@media screen and (min-width: 321px) and (max-width: 1023px) {
			.__coverPage-content {
				width: 100%; }
		}
	</style>
</head>
<body>
<div class="coverPage">
	<div class="__coverPage-content">
		<h2><strong><em>Revista nombre</em></strong> editada por nombre</h2>
		<p></p>
		<h3>Estamos en <strong>MANTENIMIENTO</strong></h3>
		<h5>Próximamente en línea...</h5>
		<div class="socialMedia">
			<a class="socialIcon" href="mailto:user@example.mx"><i class="fas fa-envelope"></i></a>
			<a class="socialIcon" href="#" target="_blank"><i class="fa fa-globe"></i></a>
			<a class="socialIcon" href="#"><i class="fab fa-facebook-f"></i></a>
			<a class="socialIcon" href="#"><i class="fab fa-twitter"></i></a>
		</div>
	</div>
</div>
	
</body>
</html>