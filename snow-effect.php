<?php
		/*
		Plugin Name: Snow Effect for WordPress using Jquery
		Plugin URI: http://blogger.engineerinme.com/?p=96
		Description: Plugin for displaying snow fall effect in WordPress blog
		Author: Pankaj Kumar Sharma
		Version: 1.0
		Author URI: http://blogger.engineerinme.com/
		Jquery Used: snowfall.jquery.js http://jquery.com/
		*/		

		add_action('wp_enqueue_scripts', 'load_js_file');
		add_action('wp_footer', 'add_snow');
		
		function load_js_file()
		{			
			wp_enqueue_script('js', 'http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js' );
			wp_enqueue_script('the_js', plugins_url('/snowfall.jquery.js',__FILE__) );
		}
		function add_snow()
		{
?>
		
			<script type='text/javascript'> 	
			$(document).ready(function(){

			$(document).snowfall();

			$('.test').snowfall({flakeCount : 100, maxSpeed : 10});

			

			window.setTimeout(function(){$('.test').snowfall('clear');}, 5000);

		});

		 </script>
<?php		
		}
?>
