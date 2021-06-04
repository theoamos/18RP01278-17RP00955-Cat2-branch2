<!DOCTYPE html>
<html>
<head>
	<title>view data</title>
	<style type="text/css">
		
table{

	border-collapse: collapse;
	width: 100%

}
td,th{
	padding: 5px;
	border: 1px solid;
}

	</style>
</head>
<body>
	@if(Session::has('addform'))
<span>{{Session::get('addform')}}</span>
@endif
<TABLE >
	<TR>
		<th>Id</th>
			<th>Fullname</th>
				<th>Contact_Nmuber</th>
					<th>Purpose</th>
						<th>Meeting to</th>
							<th>Entry Date</th>
							<th>Action</th>
	</TR>
	@foreach($posts as $post)
	<tr>
	<td>{{$post->id}}</td>	
	<td>{{$post->name}}</td>	
	<td>{{$post->phone}}</td>	
	<td>{{$post->purpose}}</td>	
	<td>{{$post->meeting}}</td>	
	<td>{{$post->date}}</td>	
<td>
	
<a href="/edit-post/{{$post->id}}">Edit</a>   |
<a href="/delete-post/{{$post->id}}">Delete</a>


</td>

	</tr>
	@endforeach
</TABLE>
</body>
</html>
