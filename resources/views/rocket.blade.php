<!DOCTYPE html>
<html>
  <head>
    <title>Test View</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="{{ asset('semantic/semantic.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('prism/prism.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/rocket.css') }}">
  </head>
  <body>
   	<table class="ui blue table">
		  <thead>
		    <tr>
		    	<th>Id</th>
			    <th>Name</th>
			    <th>Username</th>
			    <th>Email</th>
			  </tr>
			</thead>
			<tbody>
		    @foreach($users as $user)
		    <tr>
		    	<td>{{$user->id}}</td>
		    	<td>{{$user->name}}</td>
		    	<td>{{$user->username}}</td>
		    	<td>{{$user->email}}</td>
		    </tr>
		    @endforeach
		  </tbody>
		</table>
		{{$users->links()}}
    <script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('semantic/semantic.min.js') }}"></script>
    <script src="{{ asset('js/rocket.js') }}"></script>
    <script src="{{ asset('prism/prism.js') }}"></script>
    <script type="text/javascript">
      $('.ui.dropdown').dropdown();
      $('.ui.checkbox').checkbox();
    </script>
  </body>
</html>