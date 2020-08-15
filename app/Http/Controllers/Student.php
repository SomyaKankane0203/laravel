<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Student extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
    	// echo '<pre>';print_r("sfsddf");die();
        return view('studentform');
    }

    public function student_register(Request $request)
    {
    	
    	 // $data = $request->input();   [name] => jh
    
// echo '<pre>';print_r($request->input());die();
 		$data=array(
	 		'name'=>$request->input('name'),
			'grade'=>$request->input('grade'),
			'photo'=>$request->input('photo'),
			'dob'=>$request->input('dob'),
			'address'=>	$request->input('address'),
			'city'=>$request->input('city'),
			'country'=>$request->input('country')
 		);
 		// echo '<pre>';print_r($data);die();
    	   DB::table('student')->insert($data);

    	 // echo '<pre>';print_r($users);die();
        return view('studentform');
    }
}
