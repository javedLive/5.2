<html>
<head>
<title> All Courses </title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 


</head>

<body>
	<div class="container">
	<div class="row">
		<div class="col-md-12 ">
			<h3> List Of Courses </h3></br>

		
			<a href="{{Route('course.create')}}" class="btn btn-primary">Create New</a> </br>
					{{Session::get('name')}}
			<br>
			 <table class="table table-striped table-bordered dataTable" id="example">
			 	<thead>
				<tr>
					<td>Serial No</td>
					<td>Course Code</td>
					<td>Course Title</td>
					<td>Course Credit</td>
					<td>Action</td>
				</tr>
				</thead>
				<tbody>
				<?php $i=1; ?>
				@foreach($alldata as $row)
				
					<tr>
						<td>{{$i}}</td>
						<td>{{$row->course_code }}</td>
						<td>{{$row->course_title}}</td>
						<td>{{$row->course_credit}}</td>
						<td>
							<a href="{{Route('course.edit',$row->course_id)}}" class="btn btn-warning">Edit</a>
							 {!! Form::open([
                         					'method' => 'DELETE',
                    					    'route' => ['course.destroy',$row->course_id],
                         					'style'=>'display:inline',
                         					'onsubmit' => 'return confirm("Are you sure?")'
                     			 			]) !!}
							{!!	Form::hidden('id',$row->course_id) !!}
							{!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}
							{!!Form::close()!!}
						
							
						</td>
					</tr>
				
				<?php $i++; ?>
					
				@endforeach
				</tbody>
			</table>
			
		</div>

	</div>
</div>

    <li><a href="{{ route('pdf') }}">Download</a></li>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<script src="code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.11/js/dataTables.bootstrap.min.js"></script‌​> 
	//<script src="//code.jquery.com/jquery-1.10.2.js"></script>
	<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>	
	<script type="text/javascript" src="/bootstrap.js"></script>

	<script>
	$(document).ready(function() {
    $('#example').DataTable();
		} );
	</script>             
</body>
</html>