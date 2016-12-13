<!DOCTYPE html>
<html>
<head>
	<title>Test View</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('semantic/semantic.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('prism/prism.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/script.css') }}">
</head>
<body>
	<div class="ui container">
		<div class="ui menu">
		  <div class="header item">Welcome to Script</div>
		  <div class="right menu">
		    <div class="item">
		      <div class="ui action left icon input">
		        <i class="search icon"></i>
		        <input type="text" placeholder="Search">
		        <button class="ui button">Submit</button>
		      </div>
		    </div>
		    <a class="item">Sign In</a>
		  </div>
		</div>
		<pre><code class="language-python">{{$script->code}}</code></pre>
		{{$script->user->name}}
		<button class="ui primary button">
		  Save
		</button>
	</div>
	<script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
	<script src="{{ asset('semantic/semantic.min.js') }}"></script>
	<script src="{{ asset('js/script.js') }}"></script>
	<script src="{{ asset('prism/prism.js') }}"></script>
</body>
</html>