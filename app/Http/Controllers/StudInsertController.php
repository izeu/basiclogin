<?php
namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class StudInsertController extends Controller
{
    
    public function insertform()
    {
        
        return view('stud_create');
    }
    public function insert(Request $request)
    {
        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
        $city_name = $request->input('city_name');
        $email = $request->input('email');

        $data=array('first_name'=>$first_name,"last_name"=>
        $last_name,"city_name"=>$city_name,"email"=>$email);
        DB::table('tbl_insert')->insert($data);

        return redirect()->route('insert')
            ->with('message','Insert data successfully');
    }
			
}