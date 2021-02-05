<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudDeleteController extends Controller
{
    public function index()
    {
        $uusers = DB::select('SELECT * FROM tbl_insert');
        return view('stud_delete_view',['users'=>$uusers]);
    }

    public function destroy($id)
    {
        DB::delete('DELETE FROM tbl_insert WHERE id=?',[$id]);
        return redirect('delete-records')->with('delete', 'Record delete successfully.');
    }
}
