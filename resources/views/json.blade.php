<!DOCTYPE html>
<html>
<head>
	<title>bisbis</title>
</head>
<body>
	<h1>hello world</h1>
@foreach($array as $data)
						  
							    <!--  {{ method_field('DELETE') }} -->
							 <li>
							 	<ol>{{ $data }}</ol>
							 </li>
						
						  @endforeach
</body>
</html>