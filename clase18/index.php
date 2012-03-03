<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>.grep</title>

</head>
<body>

	
	

	
<!---->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.js"></script>
	<script type="text/javascript">

		( function(){
			var arr = [ 
				{
					first: 'Jeffrey',
					last: 'Way'
				},
				{
					first: 'Allison',
					last: 'Chan'
				},
				{
					first: 'Pruebas',
					last: 'Way'
				},
				{
					first: 'Changos',
					last: 'Septh'
				},
				{
					first: 'Pruebas',
					last: 'Way'
				}
			];

			arr = $.grep( arr, function( obj, index ) {
				return obj.last === 'Way';
			});

			console.log( arr );

		})();

		

		
	</script>
<!---->
</body>
</html>