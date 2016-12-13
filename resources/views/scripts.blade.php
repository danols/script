<!DOCTYPE html>
<html>
<head>
	<title>Test View</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('semantic/semantic.min.css') }}">
	<script src="{{ asset('semantic/semantic.min.js') }}"></script>
</head>
<body>
	{{$script->code}}
	{{$script->user->name}}
	<button class="ui primary button">
	  Save
	</button>
</body>
</html>