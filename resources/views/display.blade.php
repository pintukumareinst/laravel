<!DOCTYPE html>
<html>
<head>
	<title>User Data</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
</head>
<body>	
	<div class="container">
	<div class="table-responsive-md">
		<header class="text-center" style="padding-bottom: 4px; background-color:#25274D !important; color: white;">

			<h3>User Detail's</h3>
		</header>	
		<table class="table table-striped table-bordered table-hover">
			<tr>
			<th>Name</th>
			<th>Email</th>
			
			</tr>




		<tr>

				<td>{{ Auth::user()->name }}</td>
				<td>{{ Auth::user()->email }}</td>
				
				
			  </tr>
			  
	

</table>
<a href="/"><button class="btn btn-danger b2">Back</button></a>
</div>
</div>


</body>
</html>
