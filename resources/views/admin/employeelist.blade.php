<!DOCTYPE html>
<html>
<head>
	<title>Employee List</title>
</head>
<body>
	
	<table border="1">
		<tr>
			<td>Id</td>
			<td>Employee Name</td>
			<td>Contact Number</td>
			<td>User Name</td>
			<td>Action</td>
		</tr>

		@for($i=0; $i < count($employees); $i++)
			<tr>
				<td>{{$employees[$i]['id']}}</td>
				<td>{{$employees[$i]['name']}}</td>
				<td>{{$employees[$i]['contactno']}}</td>
				<td>{{$employees[$i]['username']}}</td>
				<td>
					<a href="{{route('admin.editemployee', $employees[$i]['id'])}}">Edit </a> |
					<a href="{{route('admin.employeedetails', $employees[$i]['id'])}}">Details </a> |
					<a href="{{route('admin.deleteemployee', $employees[$i]['id'])}}">Delete </a> 
				</td>
			</tr>
		@endfor

       <tr colspan="6">
       	<td><a href="{{route('admin.home')}}">Back</a> |
	        <a href="/logout">logout</a></tr></td>


       	
		


	</table>
	
	         
	
</body>
</html>