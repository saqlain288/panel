<?php
namespace App\Http\Controllers;

use App\Models\firstproject;
use Illuminate\Http\Request;
use DB;
use Session;
use Redirect;

class FirstprojectController extends Controller
{
    /**
     * Insert data into the database.
     */
    public function insertdata(Request $r)
    {
        $object = new firstproject;
        $object->Name = $r->Name;
        $object->age = $r->age;

        if ($object->save()) {
            Session::flash('message', "Data inserted successfully!");
            return Redirect::back();
        } else {
            return redirect()->back()->with('error', 'Error inserting data!');
        }
    }

    /**
     * Show data with pagination.
     */
    public function showdata()
    {
        $record = DB::table('firstprojects')->orderBy('id', 'desc')->paginate(5);
        return view('template.table', compact('record'));
    }

    public function deldata($Name)
    {
        DB::table('firstprojects')->where('Name', $Name)->delete();
        Session::flash('message', 'Data deleted successfully!');
        return Redirect::back();
    }
    
    public function edit($Name)
    {
        $record = DB::table('firstprojects')->where('Name', $Name)->get()->paginate(10); 
        return view('template.table', compact('record'));
    }
    public function update(Request $r)
    {
       
        $update = DB::table('firstprojects')
                    ->where('Name', $r->Name)
                    ->update([
                        "Name" => $r->Name,
                    ]);
        return Redirect::back();
    }
}          



