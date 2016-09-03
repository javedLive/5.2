<html>
	<head> 
		<title> Update Course </title>
		 <meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>
	<body>

		<div class="container" >
			<h3> Update course </h3>
        {!! Form::open([
                         'method' => 'PATCH',
                         'route' => ['course.update',$course->course_id],
                         'class'=>'form-horizontal',
                         'enctype' => 'multipart/form-data'
                      ]) !!}
	     	{!!	Form::token(); !!}
		  	{{ csrf_field() }}
  			<div class="form-group">
    			<label >Course Code</label>
    			<input type="text" name="course_code" class="form-control"  value="{{$course->course_code}}">
  			</div>
  			<div class="form-group">
    			<label >Course Title</label>
    			<input type="text" name="course_title" class="form-control" value="{{$course->course_title}}">
  			</div>
  			<div class="form-group">
    			<label>Course Credit</label>
    			<input type="text" name="course_credit" class="form-control" value="{{$course->course_credit}}">
  			</div>
  			
        <div class="form-group">
            <label>Course Type</label></br>

            @if ($course->type == 1)
            <input name="type" checked="checked" type="radio" value="1"> Regular<br>
            <input name="type" type="radio" value="0"> Evening </br>
            @else
            <input name="type"  type="radio" value="1"> Regular<br>
            <input checked="checked" name="type" type="radio" value="0"> Evening </br>
            @endif
        </div>

          <div class="form-group">
            <label>Image Upload</label>
            <input type="file" name="image"  id="image"></br>
            <img src="{{ asset('public/images/' . $course->image) }}" id="profile-img-tag" width="200px" />
        </div> 
        
        			<button type="submit" class="btn btn-default">Update</button>
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