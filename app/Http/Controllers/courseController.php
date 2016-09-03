<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Course;
use App\TheClass;
use Barryvdh\DomPDF\Facade as PDF;
use Redirect;
use Session;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon;
use File;

class courseController extends Controller
{
    public function index()
	{
		$alldata=Course::all();
		return 	view('course.index',compact('alldata'));
	}
	
	public function create()
	{
	 	$input=\App\TheClass::all();
	 
		return view('course.create',compact('input'));

	}

	 public function getTest()
    {
      //  $db_ext = \DB::connection('mysql_external');

        $user = \DB::connection('mysql_external')->User::all();
        print_r($user);
    }

	public function store(Request $request)
	{
			$course = new Course();           
            $course->course_code = $request->Input(['course_code']);
        	$course->course_title=$request->Input(['course_title']);
            $course->course_credit=$request->Input(['course_credit']);
        	$course->type = $request->Input(['type']);
         	if($request->hasFile('image')) {
            		$file = Input::file('image');            
           			 $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());            
           			 $name = $timestamp. '-' .$file->getClientOriginalName();            
           			 $course->image = $name;
           			 $file->move(public_path().'/images/', $name);
        		}

            $course->save();
			return redirect('course');
	}	
	
	public function edit($id)
	{
		$course=Course::findOrFail($id);
		return view('course.edit',compact('course'));
	}
	
	public function update(Request $request, $id)
	{
		$data=Course::findOrFail($id);	
		 $data->update($request->all());

		if ($request->hasFile('image'))
   		{
		        $file = $request->file('image');
		        $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString()); 
		        $name = $timestamp. '-' .$file->getClientOriginalName();
		        $data->image = $name;
		        $file->move(public_path().'/images/', $name);	
		        $data->save();		            
		    }	
		return redirect('course');
	}

	public function destroy($id)
	{
		$data=Course::findOrFail($id);
		$data->delete($data);
		return redirect('course');
	}
	

/*	public function download()			// for csv download
        {
            $table = Course::all();
            $filename = "userList.csv";
            $handle = fopen($filename, 'w+');
            fputcsv($handle, array('Course Code', 'Course Title'));

            foreach($table as $row) {
                fputcsv($handle, array($row['course_code'], $row['course_title']));
            }

            fclose($handle);
            $headers = array(
                'Content-Type' => 'text/csv',
            );
            return Response::download($filename, 'userList.csv', $headers);
        }  

	public function createPdf()		// for pdf download
	{
        $alldata=Course::all();
        $pdf = \PDF::loadView('course.invoice', compact('alldata'))->setPaper('a4')->setOrientation('portrait');
		return $pdf->download('invoice.pdf');       
	} 	*/
}
