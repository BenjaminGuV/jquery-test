<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Animate</title>
	<style type="text/css">

		body{ width: 400px; margin: 100px auto; }

		.box{
			width: 400px;
			background-color: red;
			position: relative;
			overflow: hidden;
			padding: 1em;
		}

	</style>
</head>
<body>
	
	<div class="box">
		<h2>Hi There</h2>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</p>
	</div>

	<p><button>FadeSlideToggle</button></p>
<!---->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.js"></script>
	<script type="text/javascript">


		(function(){
			var box = $('div.box');

			$.fn.FadeSlideToggle = function(speed, fn){

				return $(this).animate({
					'height': 'toggle',
					'opacity': 'toggle'
				}, speed || 400, function(){
					$.isFunction( fn ) && fn.call( this );
				} );
			};

			$('button').on( 'click', function() {
				box.FadeSlideToggle( 500 );
			});

		})();

	</script>
<!---->
</body>
</html>