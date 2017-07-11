<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Item;
use App\Beacon;
use App\Gateway;
use App\Other;
use App\Mail;
use App\Mail\InventoryList;

class ItemController extends Controller
{
    public function index()
    {
	    return view('layouts.index');
    }
    
    public function add()
    {
	    return view('forms.scan');
    }
    
    public function viewList()
    {
	    $bposts = Beacon::all();
	    $gposts = Gateway::all();
	    $oposts = Other::all();
	    
	    return view('layouts.tables', compact('bposts', 'gposts', 'oposts'));
    }
    
    public function store()
    {
	    $scans = new Item;
	    $scans->name = request('name');
	    if(strlen($scans->name) == 17)
	    {
		    $post = new Gateway;
		    $post->macID = (string)request('name');
		    $post->name = substr((string)request('name'), 9);
		    //$post->macID = request('name');
		    
		    $post->save();
		    return redirect('/add/scan');
	    }
	    else
	    {
		    $post = new Beacon;
		    $split = explode(" ", request('name'));
		    //$sub_1 = $split[0];
		    //$sub_2 = $split[1];
		    $post->name = $split[1];
		    $post->uuid = str_replace("UUID:", "", $split[2]);
		    //$post->identifier = substr((string)$split[1], -4);
		    
		    $post->save();
		    return redirect('/list');
	    }
    }
    
    public function download()
    {
	    $btable = Beacon::all();
	    $gtable = Gateway::all();
	    $otable = Other::all();
	    
	    header('Content-disposition: attachment; filename=inventory.csv');
	   	header('Content-type: text/csv');
	   	header("Pragma: no-cache");
	   	header("Expires: 0");
	   	readfile('inventory.csv');
	    
	    $fileName = "inventory.csv";
	    $file = fopen($fileName, "w+");
	    $headers = ['id', 'name', 'uuid', 'minor', 'major', 'macID', 'tenant', 'identifier', 'category', 'quantity', 'area', 'beacon', 'created_at', 'updated_at'];
	    
	    fputcsv($file, $headers);
	    foreach ($btable as $row) 
	    {
	        fputcsv($file, array($row['id'], $row['name'], $row['uuid'], $row['minor'], $row['major'], $row['macID'], $row['tenant'], $row['identifier'], $row['category'], $row['quantity'], $row['area'], $row['beacon'], $row['created_at'], $row['updated_at']));
	    }
	    foreach ($gtable as $row) 
	    {
	        fputcsv($file, array($row['id'], $row['name'], $row['uuid'], $row['minor'], $row['major'], $row['macID'], $row['tenant'], $row['identifier'], $row['category'], $row['quantity'], $row['area'], $row['beacon'], $row['created_at'], $row['updated_at']));
	    }
	    foreach ($otable as $row) 
	    {
	        fputcsv($file, array($row['id'], $row['name'], $row['uuid'], $row['minor'], $row['major'], $row['macID'], $row['tenant'], $row['identifier'], $row['category'], $row['quantity'], $row['area'], $row['beacon'], $row['created_at'], $row['updated_at']));
	    }
	    
	    fclose($file);
    }
    
    public function sendMail()
    {
	    $user = new Item;
	    $user->email = request('email');
	    \Mail::to($user->email)->send(new InventoryList);
	    
	    return redirect("/");
    }
}
