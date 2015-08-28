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
		<svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" class="maxserv-logo" width="300" viewBox="0 0 494.8 122.6">
			<style>.st0 {
					fill: #3C3C3B;
				}

				.st1 {
					fill: #575756;
				}

				.st2 {
					fill: #E61471;
				}

				.st3 {
					fill: #C41460;
				}

				.st4 {
					fill: #3AAAE1;
				}

				.st5 {
					fill: #3392C0;
				}

				.st6 {
					fill: #94C124;
				}

				.st7 {
					fill: #7FA520;
				}

				.st8 {
					fill: #F39200;
				}

				.st9 {
					fill: #CE7E00;
				}

				.st10 {
					fill: #89B02E;
				}

				.st11 {
					fill: none;
				}</style>
			<path class="st0" d="M214 58.8v25h-11.6V59c0-7-3.5-10.4-9.8-10.4-3.8 0-6.6 1.3-9 3.6.4 1.2.5 3 .5 7v25h-11.4V58.8c0-7-3-10.4-9-10.4-4 0-7.3 1.3-9.7 3.6v32h-11.7V39H154v2.7c3-2.3 7.2-3.7 11.6-3.7 7 0 12 1.7 15 5.7 3.7-3.6 8.7-5.7 14-5.7C208 38 214 44.2 214 58.8M266.4 39v45H255v-3.3c-3.8 2.5-8.3 4-13.3 4-14 0-22.4-11.4-22.4-23.3 0-12 8.3-23.3 22.4-23.3 4.7 0 9.4 1.6 13.2 3.8V39h11.4zM255 52.2c-3-2.4-7-4-11.2-4-8.2 0-13.4 6.2-13.4 13s5.2 13 13.4 13c4.4 0 8.3-1.5 11-4v-18zM326 71.7c5.6 2.4 9.8 3.7 15.4 3.7 5.3 0 7.4-2 7.4-4.3 0-2.5-2.6-3.6-9.5-5-9.7-2.3-16.8-5.4-16.8-14 0-8.2 6.7-14 17.2-14 7 0 12.7 1.8 17.6 3.8l-3.8 8.5c-4.4-1.7-9.5-3-14-3-4.4 0-6.6 1.7-6.6 4 0 2.6 2.6 3.8 10 5.2 10.4 2.2 16.4 5.8 16.4 14 0 8.5-6.6 14.2-18 14.2-8 0-13-1-19.6-4.3l4.2-8.7zM374.2 64.7c1.2 6 6 10 13 10 4.6 0 9-2.2 11.5-5.6l7.4 6.2c-4 5.6-11.4 9.3-20.2 9.3-13.6 0-23-10.4-23-23.2 0-13 9.4-23.3 23-23.3 14 0 22 10 22 24l-.2 2.7h-33.4zm0-7.4h22.4c-.4-5-3.2-10-11-10-6 0-10.2 4.4-11.3 10M425 45.2c3-4.2 7.7-7 14-7 1 0 2 0 3 .4V51s-3.3-.6-5.7-.6c-8.3 0-11.5 6-11.5 11.8V84h-11.6V39h11.6V45zM494.8 39l-21.6 45h-5.4L446 39h12.2l12.3 25.6L482.7 39zM319 45l-16 15.8 15.8 15.8-8.3 8.4-15.8-15.8-16 16-8-8 16-16L271 45.4 279 37 295 52.8l16-16z"/>
			<path class="st1" d="M61 7l8 8-7.8 7.8-8-8zM115.2 61.3l-7.7 7.8-7.8-7.7 7.8-7.8zM6.6 61.2l8-8 8.2 8-8 8.2zM61 115.6l-8-7.7 8.3-8.3 7.8 7.8z"/>
			<path class="st2" d="M84 15.6l23 22.8-7.3 7.3 7.8 7.8 15-15L84.2 0 69 15l7.8 8z"/>
			<path class="st3" d="M76.8 23L69 30.5 61.2 23l7.8-8z"/>
			<path class="st4" d="M15.6 38.4l22.8-22.8 7 7 7.7-8L38.5 0 0 38.4 14.7 53l7.8-7.6z"/>
			<path class="st5" d="M22.5 45.3l8 8.2-7.6 7.7-8.3-8z"/>
			<path class="st6" d="M45.4 100l-7 7-22.8-23 7-6.8-8-7.8L0 84l38.4 38.6L53 107.8z"/>
			<path class="st7" d="M45.4 100l8-8 8 7.7-8.2 8z"/>
			<path class="st8" d="M107 84l-23 23-7.2-7.3-7.7 7.8 15 15 38.6-38.4-15-15-8 7.8z"/>
			<path class="st9" d="M99.7 76.8L92 69l7.7-7.7 7.8 7.7z"/>
			<path class="st3" d="M99.7 45.7L92 53.5l-8 7.8 8 7.8 6.7-6.7 1-1 7.8-7.8z"/>
			<path class="st9" d="M69 92L61.3 84 53.4 92l7.8 7.7 7.8 7.8 7.8-7.8z"/>
			<path class="st7" d="M38.4 61.3l-7.8-7.8-.2.3-7.5 7.5-8.3 8 7.8 8 8-8.2z"/>
			<path class="st10" d="M38.4 61.3 30.7 53.5"/>
			<path class="st5" d="M69 30.6L62.4 24 53 14.6l-7.6 7.8 9 9 7 7z"/>
			<path class="st11" d="M-56.6-88.7h612v300.3h-612z"/>
		</svg>
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
					echo '<li><a href="http://' . $site . '/typo3/">http://' . $site . '/typo3/</a></li>';
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
