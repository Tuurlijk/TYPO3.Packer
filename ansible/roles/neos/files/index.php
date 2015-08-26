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
