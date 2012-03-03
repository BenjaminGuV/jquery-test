<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Mustache</title>
	<style type="text/css">
		body{ width: 600px; margin: auto; }
		ul{ list-style: none; }
		li{ padding-bottom: 1em; }
		img{ float: left; padding-right: 1em; }
		a{ text-decoration: none; color: #333; }
	</style>
</head>
<body>

	<ul class="tweets">
		<script id="twetts-template" type="text/x-handlebars-template" >
		{{#each this}}
		<li>
			<img src="{{thumb}}" alt="{{author}}">
			<p><a href="{{url}}">{{tweet}}</a></p>
		</li>
		{{/each}}
		</script>
	</ul>
	

	
<!---->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.js"></script>
	<script type="text/javascript" src="http://cloud.github.com/downloads/wycats/handlebars.js/handlebars-1.0.0.beta.6.js"></script>
	<script type="text/javascript">

		( function() {

			var Twitter = {
				init: function( config ){
					this.url = 'http://search.twitter.com/search.json?q=' + config.query + '&callback=?';
					this.template = config.template;
					this.container = config.container;


					this.fetch();

				},

				attachTemplate: function(){
					var template = Handlebars.compile( this.template );
					this.container.append( template( this.tweets ) );

				},

				fetch: function(){
					var self = this;

					$.getJSON( this.url, function( data ){
						self.tweets = $.map( data.results, function( tweet ) {
							return {
								author: tweet.from_user,
								tweet: tweet.text,
								thumb: tweet.profile_image_url,
								url: 'http://twitter.com/' + tweet.from_user + '/status/' + tweet.id_str
							};
						});

						self.attachTemplate();
						
					});
				}
			};

			Twitter.init({
				template: $('#twetts-template').html(),
				container: $('ul.tweets'),
				query: 'freddier'
			});

		})();
			
	</script>
<!---->
</body>
</html>