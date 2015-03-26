@extends('layout.main')

@section('css')

@stop

@section('main_content')
	<div class="container">
		<div class="row">
			<div class="sixteen columns">
				<h1>Simple. Adaptive. Easy to Use</h1>
				<p class="lead">Welcome to this simple Laravel 5 boilerplate made to make developing web applications easier and adaptive to your custom touch.</p>
				<p>Our goal was to provide a starting ground to getting your web applications going. Even easy thing like creating folders to hold LESS files can even get annoying when you are constantly making new sites.</p>
				<p>Another goal was to provide a simple approach to the world of Laravel 5 and it's amazing features. Laravel 5 is a PHP framework made to make web applications easier and effectively. However, beginners may be nervous or may not know exactly where to begin. While we do not consider ourselves pros at developing, we have been successfully developing Laravel web applications for many years using the tools in this project. </p>
			</div>
		</div>
		<div class="row">
			<div class="sixteen columns center">
				<h2>Features</h2>
			</div>
		</div>
		<div class="row separator">
			<div class="one-half column">
				<div class="tile">
					<h3>Backend Framework</h3>
					<p>Laravel is our choice for our back-end framework. Laravel offers tons of easy to use features that make developing simple and fun.</p>
					<h4>Uniqueness</h4>
					<p>This project features many custom pages and methods to get going with simple web applications.
						The main feature is a custom dashboard for standard users and a separate dashboard for administrators.
						The reason is because a lot of the times web applications feature standard user accounts with an additional administrator dashboard to manage everything.
						So, this features it all together and all can easily be managed from the administrator dashboard with the custom user pages for both administrators and standard users.
					</p>
					<a href="http://laravel.com/" target="_blank" class="btn btn-outline-default btn-block">Visit Laravel's website</a>
				</div>
			</div>
			<div class="one-half column">
				<div class="tile">
					<h3>Frontend Framework</h3>
					<p>Skeleton is our choice for our front-end framework. Skeleton provides basic styling and an awesome developed responsive grid to allow for great responsive websites that look great on any device! </p>
					<h4>Uniqueness</h4>
					<p>Skeleton is great for a simple bare bones responsive grid. It also features basic styling for forms and more.
						We expanded upon that to feature a more robust collection of common styles.
						Common styles such as alerts, buttons, tables and more are available to be used easily.
						Along with the we created LESS files separated out into easily manageable files.
						All these LESS files are combined into one CSS file.
					</p>
					<a href="http://getskeleton.com/" target="_blank" class="btn btn-outline-default btn-block">Visit Skeleton's website</a>
				</div>
			</div>
		</div>
		<div class="row separator">
			<div class="sixteen columns center">
				<h3>Getting Started</h3>
				<p>Documentation for both the Front-end and Back-end frameworks are available on their respected websites.
					Documentation for getting started with this project can be found in the readme.md file.
					Detailed documentation on the uniqueness of this project is being prepared and will be available soon.
					However, it is encourage to dig into the project and get familiar with what the project has to offer as this project was created to help teach beginners use front-end and back-end frameworks easily.</p>
			</div>
		</div>
		<div class="row">
			<div class="sixteen columns center">
				<h3>Where the heck is the color?</h3>
			</div>
		</div>
		<div class="row">
			<div class="one-half column">
				<h4>Buttons</h4>
				<div class="add-bottom"><a href="#" class="btn btn-default">Default Button</a></div>
				<div class="add-bottom"><a href="#" class="btn btn-information">Information Button</a></div>
				<div class="add-bottom"><a href="#" class="btn btn-success">Success Button</a></div>
				<div class="add-bottom"><a href="#" class="btn btn-error">Error Button</a></div>
				<div class="add-bottom"><a href="#" class="btn btn-warning">Warning Button</a></div>
				<div class="add-bottom"><a href="#" class="btn btn-outline-default">Outline Default Button</a></div>
				<div class="add-bottom"><a href="#" class="btn btn-outline-information">Outline Information Button</a></div>
				<div class="add-bottom"><a href="#" class="btn btn-outline-success">Outline Success Button</a></div>
				<div class="add-bottom"><a href="#" class="btn btn-outline-error">Outline Error Button</a></div>
				<div class="add-bottom"><a href="#" class="btn btn-outline-warning">Outline Warning Button</a></div>
			</div>
			<div class="one-half column">
				<h4>Alerts</h4>
				<div class="alert alert-warning">
					<span class="icon-x alert-close alert-close-warning"></span>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eu cursus risus. Nullam condimentum rutrum tristique. Pellentesque aliquet massa vel dolor semper laoreet. Ut interdum quis arcu eget molestie. Cras dictum purus vel ipsum varius, et maximus nisi scelerisque
				</div>
				<div class="alert alert-success">
					<span class="icon-x alert-close alert-close-success"></span>
					this is your alert
				</div>
				<div class="alert alert-information">
					<span class="icon-x alert-close alert-close-information"></span>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eu cursus risus. Nullam condimentum rutrum tristique. Pellentesque aliquet massa vel dolor semper laoreet. Ut interdum quis arcu eget molestie. Cras dictum purus vel ipsum varius, et maximus nisi scelerisque
				</div>
				<div class="alert alert-error">
					<span class="icon-x alert-close alert-close-error"></span>
					this is your alert
				</div>
			</div>
		</div>
	</div>
@stop

@section('javascript')

@stop