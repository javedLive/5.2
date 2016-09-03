<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Invoice</title>
    <link rel="stylesheet" href="style.css" media="all" />
  </head>
  <style>

  </style>
  <body>
 <div class="container">
	<div class="row">
		<div class="col-md-12 ">
			<h3> List Of Courses </h3></br>

			
			<br>
			 <table class="table table-striped" >
			 	<thead>
				<tr>
					<td>Serial No</td>
					<td>Course Code</td>
					<td>Course Title</td>
					<td>Course Credit</td>
				
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
						
					</tr>
				
				<?php $i++; ?>
					
				@endforeach
				</tbody>         
			</table>
			
		</div>

	</div>
</div>

  </body>
</html>