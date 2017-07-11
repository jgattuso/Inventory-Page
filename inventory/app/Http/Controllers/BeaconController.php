<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Beacon;

class BeaconController extends Controller
{
	public function add()
    {
	    return view('forms.beacon');
    }
	
    public function store()
    {
	    //dd(request()->all());
	    Beacon::create(request(['name', 'uuid', 'minor', 'major', 'macID', 'identifier']));
	    
	    return redirect('/');
    }
    
    public function delete($id)
    {
	    //dd(request()->all());
	    //$post = Beacon::find($id);
	    //$id->delete();
	    
	    DB::table('beacons')->where('id', '=', $id)->delete();
	    
	    return redirect('/list');
    }
    
    public function edit($id)
    {
	    $post = Beacon::find($id);
	    
	    return view('edits.edit_beacon', compact('post'));
    }
    
    public function replace($id)
    {
	    Beacon::create(request(['name', 'uuid', 'minor', 'major', 'macID', 'identifier']));
	    
	    DB::table('beacons')->where('id', '=', $id)->delete();
	    
	    return redirect('/');
    }
    
    public function download()
    {
	    $table = Beacon::all();
	    $file = fopen("beacons.csv", "w+");
	    $headers = ['id', 'name', 'uuid', 'minor', 'major', 'macID', 'identifier', 'created_at', 'updated_at'];
	    
	    fputcsv($file, $headers);
	    foreach ($table as $row) 
	    {
	        fputcsv($file, $row->toArray());
	    }
	    
	    fclose($file);
	    return redirect("/");
    }
}
