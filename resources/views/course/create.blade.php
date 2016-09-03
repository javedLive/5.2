<html>
	<head> 
		<title> Create Course </title>
	 	 <meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
 		 <link rel="stylesheet" href="/dist/css/sweetalert.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
	</head>
	<body>

		<div class="container" >
			<h3> Create course </h3>
		{!! Form::open(array('route' => 'course.store','class'=>'form-horizontal','enctype' => 'multipart/form-data'))  !!}
		{!!	Form::token(); !!}
			<?php echo csrf_field(); ?>
  			<div class="form-group">
    			<label>Course Code</label>
    			<input type="text" name="course_code" class="form-control"  placeholder="Code">
  			</div>
  			<div class="form-group">
    			<label>Course Title</label>
    			<input type="text" name="course_title" class="form-control"  placeholder="Title">
  			</div>
  			<div class="form-group">
    			<label>Course Credit</label>
    			<input type="text" name="course_credit" class="form-control"  placeholder="Credit">
  			
        <div class="form-group">
            <label>Course Type</label></br>
            <input name="type" type="radio"  value="1"> Regular<br>
            <input checked="checked" name="type" type="radio" value="0"> Evening </br>
        </div>
        <div class="form-group">
            <label>Image Upload</label>
            <input type="file" name="image"  id="image" width="200px">
            <img src="" id="profile-img-tag" width="200px" />
        </div>  
  			<button type="submit" class="btn btn-default">Submit</button>
		{!! Form::close() !!}
		</div>
    <script type="text/javascript">
      function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#profile-img-tag').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#image").change(function(){
        readURL(this);
    });
</script>
	</body>
</html>