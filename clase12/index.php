<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Animate</title>
	<style type="text/css">

		
		.box{
			width: 400px;
			background-color: red;
			padding: 1em;
			position: relative;
			-webkit-transition: border-radius 1s;
		}

		.rounded{ border-radius: 50px; }

	</style>
</head>
<body>
	
	<div class="box">
		<h2>Some Content Here</h2>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</p>
	</div>

	<p><button>Center</button></p>
<!---->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.js"></script>
	<script type="text/javascript">

		(function(){
			var	box = $( 'div.box' );

			$('button').on( 'click', function() {
				box.addClass( 'rounded' );

				
				/*box.animate({
					'fontSize': '+=5',
					'width': '+=300'
				}, 500, 'swing', function(){
					console.log('Completed');
				});*/

				

			});
		})();

	</script>
<!---->
</body>
</html>