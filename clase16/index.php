<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Blog jQuery</title>
</head>
<body>
	
	<a href="http://www.google.com" class="myClass">Click me</a>

	<script id=blogTemplate type=tuts/template >
		<h2>{{title}}</h2>
		<img src={{thumbnail}} alt={{title}}>
	</script>

	
<!---->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.js"></script>
	<script type="text/javascript">

		( function() {
			var content = [
				{
					title: 'My awesome blog post',
					thumbnail: 'http://d2o0t5hpnwv4c1.cloudfront.net/2013_phpvsmysqli/pdo-vs-mysqli.jpg',
				},
				{
					title: 'My second awesome blog post',
					thumbnail: 'http://tutsplus.s3.amazonaws.com/tutspremium/courses_$folder$/30DaysJquery/200x200.png',
				}
			],
				template = $.trim( $('#blogTemplate').html() );

			$.each( content, function( index, obj ) {
				var temp = 
					template
						.replace( /{{title}}/ig, obj.title )
						.replace( /{{thumbnail}}/ig, obj.thumbnail );
				$(document.body).append( temp );
			});

		})();
		
		
			
	</script>
<!---->
</body>
</html>