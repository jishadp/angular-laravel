<!doctype html>
<html lang="en" ng-app="anguApp">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
	<script type="text/javascript" href="{{URL::asset('js/angular.js')}}"></script>
	<script type="text/javascript"  href="{{URL::asset('js/controller.js')}}"></script>
</head>
<body>
	<div class="welcome">
		<a href="{{URL::route('home')}}">Inner</a>
		<h1>You have arrived.</h1>
		<ul ng-controller="clientList">
			<!-- <li ng-repeat="user in users"></li> -->
		</ul>
		
	</div>
</body>
</html>
