<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Gateway;

class GatewayController extends Controller
{
	public function add()
    {
	    return view('forms.gateway');
    }
	
    public function store()
    {
	    //dd(request()->all());
	    
	    Gateway::create(request(['name', 'macID', 'area', 'beacon', 'tenant']));
	    
	    return redirect('/');
    }
    
    public function delete($id)
    {
	    //dd(request()->all());
	    //$post = Beacon::find($id);
	    //$id->delete();
	    
	    DB::table('gateways')->where('id', '=', $id)->delete();
	    
	    return redirect('/list');
    }
    
    public function edit($id)
    {
	    $post = Gateway::find($id);
	    
	    return view('edits.edit_gateway', compact('post'));
    }
    
    public function replace($id)
    {
	    Gateway::create(request(['name', 'macID', 'area', 'beacon', 'tenant']));
	    
	    DB::table('gateways')->where('id', '=', $id)->delete();
	    
	    return redirect('/list');
    }
}
