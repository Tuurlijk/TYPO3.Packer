<!doctype html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Try Neos</title>

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
			color: #141413;
		}

		@media only screen and (min-width: 600px) {
			.panel .panel-title {
				font-size: 2.8125rem;
			}
		}

		.panel .panel-text {
			line-height: 1.6;
			margin: 0 0 1.5rem 0;
			color: #a4a4a4;
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

		a{
			color: #00b5ff;
			text-decoration: none;
			line-height: inherit
		}

		a:hover, a:focus {
			color: #007fb2
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

		.neos {
			background-color: #323232;
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
	</a>

	<div class="panel neos">
		<p class="panel-title">
			<a href="http://neos.io">
		<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAKUAAABQCAMAAABPqkVCAAAABGdBTUEAALGPC/xhBQAAAAFzUkd
CAK7OHOkAAAMAUExURUxpcdPd4fj5+fr7/OLm59Ta3Pn5+ufp59Tm7iQ1Rvn6+vn6+/Hz9Pv8/U
VPYPj6+s/Y3v39/fb5+vz8/fz8/fj4+fz9/vv8/PX29/v7+/P1+PP09/v7/Pr8/Pn6+vb59/Lx8
ff49/39/vr7/Pr6+/j39/b4+fb4+fz8/ff5+vv7+/f5+u/y9PT29/r7+/f5+g0RIejs7fj6+vz8
/fT19fz8/PX09P39/fv8/fb4+vb4+fr6+dzi5/X3+Z6orRIZI6+8wdni6Pf4+vj5++fq7Pr7+v3
9/Ofn6e/w8vv8/Pz9/fr7/OHl69zg4+fq7Ont8lldaPLy8/39/fr7+/39/ezw8vb4+fn7+8PM0O
vt7/T29/v8/MvU1+fr7fb4+f39/fz8/P39/fH19/z9/fDz9f39/fn6+/Dy8/b4+fv8/KWorfj5+
v3+/uPo6tLZ3Pn6+vj5+u/09v3+/enu8OPl6Ozw8vDz9f39/fj5+vH09+fs793i5P7+/vX299PV
2Nbe4Ozt7/P19ujp6v39/urt8CgrNfDz9PL19vz9/PX299/m5/P19r7AxI+SmGlvfquutNnf49z
c3u3v8cfL0M7S2O3w8WxzffP299zh5ebn6fT19vz8/cLDxubr7uLk52JoaOXm5+bp68jM0pmcn9
jZ2o2Ljuru76epsP39/e3x8qOjp+bo6Z+ipNra2+/x8/79/dHV2O3x9IqQmPj5+v39/cXJyaywt
6CkrPT4+WVrdOPq69zd4BQYHfL198bIyu/w8t/i5eTl57+/xO/w8ejo6+zs7vT29sbIy+Xo68/T
2efs78bHzb6/wuvv8ba9xNTX3PHz9ezs7dze4I6Xo8/P0dvd3rCyudzg49/i5bS5wbu7venw8vP
192dxf5mco/P198LHzOrs78TFycvKy9bb4MLGybC0urOyst7c3NLP0OHl57m7v8HBxIuUoL/Dyq
2ytaqvt9PU1c/X22pwdWFqcZeanoiPk8vR0qqusLa6wf////3///T3+Pj5+vP09tfb3nBIUY0AA
AD6dFJOUwAPEvIIAkUFAQFS7g+5A+wLqtrW7z7/2jJacCj++TQXCxr60zkhf/bhzW+FOqOP0gYu
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" width="165" height="80">
			</a>
		</p>

		<p class="panel-text">
			Great Success!
		</p>

		<p class="panel-text">
			You have successfully installed Try NEOS.
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
				'local.neos.io'
			);
			foreach ($sites as $site) {
				if (!in_array($site, $exclude) && !strstr($site, 'local.typo3.org')) {
					echo '<li><a href="http://' . $site . '/neos/">http://' . $site . '/neos/</a></li>';
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
