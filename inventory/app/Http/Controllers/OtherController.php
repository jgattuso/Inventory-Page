<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Other;

class OtherController extends Controller
{
	public function add()
    {
	    return view('forms.other');
    }
	
    public function store()
    {
	    //dd(request()->all());
	    Other::create(request(['name', 'category', 'quantity']));
	    
	    return redirect('/');
    }
    
    public function delete($id)
    {
	    //dd(request()->all());
	    //$post = Beacon::find($id);
	    //$id->delete();
	    
	    DB::table('others')->where('id', '=', $id)->delete();
	    
	    return redirect('/list');
    }
    
    public function edit($id)
    {
	    $post = Other::find($id);
	    
	    return view('edits.edit_other', compact('post'));
    }
    
    public function replace($id)
    {
	    Other::create(request(['name', 'category', 'quantity']));
	    
	    DB::table('others')->where('id', '=', $id)->delete();
	    
	    return redirect('/');
    }
    
    public function download()
    {
	    $table = Other::all();
	    $file = fopen("others.csv", "w+");
	    $headers = ['name', 'category', 'quantity', 'created_at', 'updated_at'];
	    
	    fputcsv($file, $headers);
	    foreach ($table as $row) 
	    {
	        fputcsv($file, $row->toArray());
	    }
	    
	    fclose($file);
	    return redirect("/");
    }
}
