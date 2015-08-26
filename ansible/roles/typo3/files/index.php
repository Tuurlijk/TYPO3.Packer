<!doctype html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Try TYPO3</title>

	<style type="text/css">
		html {
			font-family: sans-serif;
			-ms-text-size-adjust: 100%;
			-webkit-text-size-adjust: 100%
		}

		body {
			margin: 0;
		}

		article, aside, details, figcaption, figure, footer, header, main, nav, section, summary {
			display: block
		}

		audio, canvas, progress, video {
			display: inline-block;
			vertical-align: baseline
		}

		audio:not([controls]) {
			display: none;
			height: 0
		}

		[hidden], template {
			display: none
		}

		a {
			background: transparent
		}

		a:active, a:hover {
			outline: 0
		}

		abbr[title] {
			border-bottom: 1px dotted
		}

		b, strong {
			font-weight: bold
		}

		dfn {
			font-style: italic
		}

		h1 {
			font-size: 2em;
			margin: 0.67em 0
		}

		mark {
			background: #ff0;
			color: #000
		}

		small {
			font-size: 80%
		}

		sub, sup {
			font-size: 75%;
			line-height: 0;
			position: relative;
			vertical-align: baseline
		}

		sup {
			top: -0.5em
		}

		sub {
			bottom: -0.25em
		}

		img {
			border: 0
		}

		svg:not(:root) {
			overflow: hidden
		}

		figure {
			margin: 1em 40px
		}

		hr {
			-moz-box-sizing: content-box;
			-webkit-box-sizing: content-box;
			box-sizing: content-box;
			height: 0
		}

		pre {
			overflow: auto
		}

		code, kbd, pre, samp {
			font-family: monospace, monospace;
			font-size: 1em
		}

		button, input, optgroup, select, textarea {
			color: inherit;
			font: inherit;
			margin: 0
		}

		button {
			overflow: visible
		}

		button, select {
			text-transform: none
		}

		button, html input[type="button"], input[type="reset"], input[type="submit"] {
			-webkit-appearance: button;
			cursor: pointer
		}

		button[disabled], html input[disabled] {
			cursor: default
		}

		button::-moz-focus-inner, input::-moz-focus-inner {
			border: 0;
			padding: 0
		}

		input {
			line-height: normal
		}

		input[type="checkbox"], input[type="radio"] {
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			box-sizing: border-box;
			padding: 0
		}

		input[type="number"]::-webkit-inner-spin-button, input[type="number"]::-webkit-outer-spin-button {
			height: auto
		}

		input[type="search"] {
			-webkit-appearance: textfield;
			-moz-box-sizing: content-box;
			-webkit-box-sizing: content-box;
			box-sizing: content-box
		}

		input[type="search"]::-webkit-search-cancel-button, input[type="search"]::-webkit-search-decoration {
			-webkit-appearance: none
		}

		fieldset {
			border: 1px solid #c0c0c0;
			margin: 0 2px;
			padding: 0.35em 0.625em 0.75em
		}

		legend {
			border: 0;
			padding: 0
		}

		textarea {
			overflow: auto
		}

		optgroup {
			font-weight: bold
		}

		table {
			border-collapse: collapse;
			border-spacing: 0
		}

		td, th {
			padding: 0
		}

		.button {
			position: relative;
			display: inline-block;
			overflow: hidden;
			padding: 0.625rem 1rem;
			border-radius: 0.25rem;
			background-color: #ed197a;
			background: -webkit-linear-gradient(335deg, #ed197a 50%, #d4136d 50%);
			background: linear-gradient(115deg, #ed197a 50%, #d4136d 50%);
			text-transform: uppercase;
			font-weight: 700;
			color: #f1f1f1
		}

		.button:hover {
			background: -webkit-linear-gradient(335deg, #db116e 50%, #bd1161 50%);
			background: linear-gradient(115deg, #db116e 50%, #bd1161 50%);
			color: #fff
		}

		.panel {
			position: relative;
			padding: 2.5rem;
			border: 0;
			margin-bottom: 2rem;
			-webkit-box-shadow: 0.0625rem 0.0625rem 0.1875rem 0 #ccc;
			box-shadow: 0.0625rem 0.0625rem 0.1875rem 0 #ccc;
			background: #fff;
			background: rgba(255, 255, 255, 0.75)
		}

		@media only screen and (min-width: 600px) {
			.panel {
				padding: 3.5rem 4.5rem 2rem 4.5rem
			}
		}

		.panel .panel-title {
			line-height: 1.6;
			margin: 0;
			font-family: Calibri, Arial, sans-serif;
			font-size: 1.5625rem;
			color: #141413
		}

		@media only screen and (min-width: 600px) {
			.panel .panel-title {
				font-size: 2.8125rem
			}
		}

		.panel .panel-text {
			line-height: 1.6;
			margin: 0 0 1.5rem 0;
			color: #626365
		}

		.social {
			text-align: center
		}

		.social-icon {
			position: relative;
			overflow: hidden;
			display: inline-block;
			width: 2rem;
			height: 2rem;
			border: 0.125rem solid #d2d2d2;
			border-radius: 100%;
			margin-right: 0.9375rem;
			text-indent: 100%;
			white-space: nowrap
		}

		.social-icon:last-child {
			margin-right: 0
		}

		.social-icon:before {
			content: "";
			position: absolute;
			top: 50%;
			left: 50%
		}

		.social-icon:hover {
			border-color: #ed197a
		}

		.social-icon.social-icon-linkedin:before {
			width: 0.9375rem;
			height: 0.9375rem;
			margin-top: -0.4375rem;
			margin-left: -0.4375rem;
			background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAANxJREFUeNpi9PLyYgCB4uJivt7e3k8MJADGvXv3sgLpPUBsB8RrgAaEEquZCYi1oBpBIAToAlFSNN8E4stQ/gEgfkO0ZqAzfwBpYyDWAGIXIP8/sZpZoPRsKA2ytQTodBsgnQIVWwnEmkAcDsS8QHwJiOuBltyEaY6H0g9BmoFYBUnMHYglkCwEGeQItECFiQjXgTReAOIdQPwPKiYGxH7EaD4HxEZAZ3oC6alI4vLEaD6EFIgXkMSFidH8EYn9D4nNzMRAARg4zbB4ToTSX6D0ESQx5EBCFr8GEGAArpM15ct406kAAAAASUVORK5CYII=")
		}

		.social-icon.social-icon-linkedin:hover:before {
			background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAN9JREFUeNpi+P//PwMIv5Ws4oOxicWMQE2sDAwMe4DYDojXCD1rDWUgEjABsRZUIwiEvJOqFiVF800gvgzlHwDiN8RqZgS5HWgbyOlKQHwH6Oy/xGpmgdKzoTTI1hKgYTZAOgUqthKINYE4HIh5gfgSENcDLbkJ0xwPpR+CNAOxCpKYOxBLIFkIMsgRaIEKExGuA2m8AMQ7gPgfVEwMiP2I0XwOiI2AzvQE0lORxOWJ0XwIqPE/lH0BSVyYGM0fkdj/kNjMTAwUgIHTDIvnRCj9BUofQRJDDiRk8WsAAQYATsldobynt4IAAAAASUVORK5CYII=")
		}

		.social-icon.social-icon-twitter:before {
			width: 0.875rem;
			height: 0.75rem;
			margin-top: -0.375rem;
			margin-left: -0.4375rem;
			background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA4AAAAMCAYAAABSgIzaAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAQBJREFUeNpi9PLyYiguLmbs7e39z4AFAOW8gJQZED8A4mVAzATEfIx79+7lBjJWAHEEUPNXNE1dQKoUSeg2EH8H4iiQbnEg9gHiE0CFZkiahIFUCZoDVIFYAoj5QTYyAxl3gFgBKnkMiNcC8Tcgno7F9VlAl01ngdp4F0mjFRTjAi8ZoB4FMeQZiAenwBqB1v4F0oFAfI4ITceB6p/AbASBh0AsTYTGOhgDrBFoymcg5QzE24H4Fw5NE4Dq9qBoBAY9KC6FgPgNELNh0TQRPWpA0aEFpKug/uRCkvsNxLuBuBNo0yF0kxhBSQ5qKyhq1IBYBIjfg+IWqOE7Ls8CBBgAQ9BHBQQpyFsAAAAASUVORK5CYII=")
		}

		.social-icon.social-icon-twitter:hover:before {
			background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA4AAAAMCAYAAABSgIzaAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAQNJREFUeNpi/P//P8M7qWpGoWet/xmwAKCcF5AyA+IHQLwMiJmAmI/xrWQVN5CxAogjgJq/omnqAlKlSEK3gfg7EEeBdIsDsQ8QnwAqNEPSJAykStAcoArEEkDMzwIkHkKdoQPEJ4EajgHptUD8DYgZsbi+AeiyYyxQG+8CsQJUwgqKcYGXDFCPghjyDMSDU2CNQGv/AulAID5HhKbjQPVPYDYyQP0pTYTGOhgDrBFoymcg5QzE24H4Fw5NE4Dq9qBoBIYkKC6FgPgNELNh0TQRPWpACUALSFdB/cmFJPcbiHcDcSfQpkPoJjGCkhzUVlDUqAGxCBC/B+I7QA3fcXkWIMAA0etKNnWD0noAAAAASUVORK5CYII=")
		}

		.social-icon.social-icon-facebook:before {
			width: 0.625rem;
			height: 1.125rem;
			margin-top: -0.5625rem;
			margin-left: -0.3125rem;
			background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAASCAYAAABit09LAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAALlJREFUeNpi9PLyYsAGiouL+YEUFxB/6e3t/cyIrhCowANIdQKxHpLwRBY0RcZAahMQs6LbwILGL0BTdAWI3wLxHXSFWkjsSUC35cM4TGgKmZHYl5AlmBhwg7/IHMa9e/dWAOkKKJ8XSfN3IP4FZeeB3MgBxPxYTOSEYhB4hs9qZHAPpHAGEBtC8S0kyXok8YcswCB4AWS8gAb4dySFj4ByF4jxNQOxwTNYFKInimdALABlf0GWAAgwANCXKe5w4ZcNAAAAAElFTkSuQmCC")
		}

		.social-icon.social-icon-facebook:hover:before {
			background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAASCAYAAABit09LAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAALdJREFUeNpi/P//PwM28E6qmh9IcQHxF6FnrZ8Z0RUCFXgAqU4g1kMSnsiCpsgYSG0CYlZ0G1jQ+AVoiq4A8VsgvoOuUAuJPQnotnwYhwlNITMS+xKyBBMDbvAXmcP4VrKqAkhXQPm8SJq/A/EvKDsP5EYOIObHYiInFIPAM3xWI4N7IIUzgNgQim8hSdYjiT9EiRlggF8AUvpQbiIweBYQ42sGYoNnsChETxTPgFgAyv6CLAEQYADB8Sx53KhCiAAAAABJRU5ErkJggg==")
		}

		* {
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			box-sizing: border-box
		}

		*:before, *:after {
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			box-sizing: border-box
		}

		html, body {
			height: 100%
		}

		body {
			padding: 0 0.9375rem;
			background: #f6f6f6;
			background: -webkit-linear-gradient(335deg, #f6f6f6 60%, #e8e7e4 60%);
			background: linear-gradient(115deg, #f6f6f6 60%, #e8e7e4 60%);
			background-attachment: fixed;
			font-family: Lato, Arial, sans-serif;
			font-size: 1rem;
			text-align: center
		}

		a {
			text-decoration: none
		}

		.container {
			position: relative;
			max-width: 46.875rem;
			margin: 0 auto
		}

		.logo {
			display: inline-block;
			margin: 3.125rem 0;
		}

		a:link.logo {
			background-color: transparent;
		}

		svg.typo3-logo {
			padding-right: 0.7rem;
		}

		ul {
			list-style-type: none;
			padding: 0;
			margin: 20px 0;
		}
	</style>
	<link href="https://fonts.googleapis.com/css?family=Lato:300,700" rel="stylesheet" type="text/css">

	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<a href="https://github.com/Tuurlijk/TYPO3.Packer"><img style="position: absolute; top: 0; left: 0; border: 0;" src="https://camo.githubusercontent.com/8b6b8ccc6da3aa5722903da7b58eb5ab1081adee/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f6c6566745f6f72616e67655f6666373630302e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_left_orange_ff7600.png"></a>

<div class="container">

	<a href="https://www.maxserv.com/" rel="nofollow" class="logo">
		<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAT0AAABQCAMAAABcWFKfAAAABGdBTUEAALGPC/xhBQAAAAFzUkd
CAK7OHOkAAAMAUExURUxpcTQ1NDU7NDIzMsrY0DU2NVBRT/f29GNUUjQ1NJN3e//+/um7sjM0Mz
EyMdolbjifzv7+/mxsbIODg+mLMERFRKy5prKysnx9fD9AP4S/Qy8wLzQ1NIqKiu2fVlVWVa6tr
m5vbmlpaVpbWlhZWNjY2DU2NVVVVby6vEVERUNEQzEyMVxcXE1OTbQfXMHGxlFRUYO/QV9gX2hp
aERFRGVmZeNVj0VGReNXkb1zKPn6+UlJSXm+3p2enaTPdliv1umKLjigzlRVVI+Pj/GzeHV2dWt
ra6fQeXh4eExNTE9QT3V1dWpqal5fXj4/PpCXilxcXI+Rj9XU1c5wmcyRWITE4FBQUO6mYmNjY+
+hWW252+BGhe2avVuw1oWGhU5QTsvLy0RFRISEhJXIXnFxcYyNjH5/fmRkZLO0s4OEg3h5eGZnZ
klKSS8wL3R1dFpaWk1NTWVmZWZmZuRbk4GDgl5eXpaYlnGrxXqyyshdi7TQjq7VhZ/NbdKfakND
Q4evW4uxYurl6l9gX6TPdLtuIKbReKfDhedxol1dXa+vr/Gub3V3eI+0Ztiqf1ZXVmtra3m/3aL
PcJ3LanV1dWKiv1+z2Pv7+42OjXFycdy3ku+mY1+hveNYkWGy2O+lYdtRio6Ojmtsa1ygvMJLfc
NQgN+dX5rKaKOjo3qXWeRjmOFKiKmGfXOsxtkibORhl6HOcGOPoYyyY7tyJ3Jzcp9ul26z0aSUg
5G9YjeOtTQ1NOqLMDmgztolboS/QzEyMTM0My8wL01OTTU2NTSIrG2dN7IeW75zKDk6OUFCQS0u
LYfBSE5PTjw9POuNM0ZHRjyiz0tLSjSHq9kga2ycNb1xJLEeWz+j0NsncG+gOMB1KYG9Pdomb1l
ZWTOLsLIZV4bBRM4qbdwudXqsQ9mGNkpPTGmaMUxncldgT4uPPUKPnLpHT0CZwZE5XS6FqoRmRW
eERz2Xv3hhSWRNVkxvfUlMTiqOsUxLTn5VhsN1KIRThcZ2JlKr1FZtgJvKZlhhZWVYaPVbpwQAA
AC5dFJOUwD8A/wC/gYBAf4EBQP7/P3+ChaV/ugHPGH6/vz5Rq+tG5KqwNAa+eQiQvn4Xuj+Etj7
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
QD8B+krz+rwQQobAAAAAElFTkSuQmCC" width="317" height="80">
	</a>

	<div class="panel">
		<p class="panel-title">
			<a href="http://typo3.org">
				<svg xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" class="typo3-logo" width="200" viewBox="0 0 200 56">
					<metadata>
						<rdf:RDF>
							<cc:Work rdf:about="">
								<dc:format>image/svg+xml</dc:format>
								<dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"/>
								<dc:title/>
							</cc:Work>
						</rdf:RDF>
					</metadata>
					<g transform="matrix(0.54938434,0,0,0.54938434,112.89374,-148.54418)" fill-rule="nonzero">
						<path fill="#000" d="m140,370c-5.2,0-13-1.6-14-1.8v-7.8c2.6,0.53,9.1,1.6,14,1.6,5.4,0,8.9-4.6,8.9-13,0-9.7-1.6-15-9.1-15h-8.7v-7.8h7.6c8.6,0,9-8.8,9-13,0-8.4-2.7-12-8-12-4.7,0-10,1.2-13,1.8v-7.8c1.2-0.21,7.4-1.8,13-1.8,11,0,17,4.7,17,21,0,7.2-2.6,14-8.2,16,6.5,0.42,9.5,7.5,9.5,18,0,16-6.2,22-18,22m-49-68c-9.6,0-13,6.5-13,30,0,23,3.2,30,13,30,9.6,0,13-7.6,13-30,0-23-3.2-30-13-30m0,68c-18,0-22-13-22-39,0-25,4.7-37,22-37,18,0,22,12,22,37,0,26-4.7,39-22,39m-53-68c-5.8,0-10,0.64-10,0.64v31h10c5.9,0,10-3.9,10-16,0-11-2.6-16-10-16m-1.1,39-8.9,0,0,28-9.2,0,0-74s9.1-0.74,18-0.74c16,0,21,10,21,23,0,16-5.5,24-21,24m-48-6.5,0,35-9.6,0,0-35-19-40,10,0,14,30,14-30,9.7,0-19,40zm-50-32,0,66-9.2,0,0-66-16,0,0-8.1,42,0,0,8.1-16,0z"/>
						<path fill="#ff8700" d="m-130,340c-1.5,0.44-2.7,0.6-4.3,0.6-13,0-32-45-32-60,0-5.5,1.3-7.3,3.1-8.9-16,1.8-35,7.6-41,15-1.3,1.8-2.1,4.7-2.1,8.4,0,23,25,76,42,76,8.1,0,22-13,33-31"/>
						<path fill="#ff8700" d="m-140,270c16,0,32,2.6,32,12,0,19-12,41-18,41-11,0-24-30-24-45,0-6.8,2.6-8.1,9.4-8.1"/>
					</g>
				</svg>
			</a> Try
		</p>

		<p class="panel-text">
			Great Success!
		</p>

		<p class="panel-text">
			You have successfully installed TYPOTry.
		</p>

		<p class="panel-text">
			The following sites are available:
			<ul>
			<?php
			$sites = scandir('..');
			$exclude = array(
				'.',
				'..',
				'html',
				'local.typo3.org'
			);
			foreach ($sites as $site) {
				if (!in_array($site, $exclude) && !strstr($site, 'local.neos.io')) {
					echo '<li><a href="http://' . $site . '">http://' . $site . '/typo3/</a></li>';
				}
			}
			?>
			</ul>
		</p>

		<a class="button" href="https://github.com/Tuurlijk/TYPO3.Packer" target="github">Contribute!</a>
	</div>
	<div class="social">
		<a class="social-icon social-icon-linkedin" href="https://www.linkedin.com/company/maxserv-b.v.">LinkedIn</a>
		<a class="social-icon social-icon-twitter" href="https://twitter.com/MaxServ">Twitter</a>
		<a class="social-icon social-icon-facebook" href="https://www.facebook.com/MaxServ">Facebook</a>
	</div>

</div>
</body>
</html>
