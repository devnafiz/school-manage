<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hostel;
use App\Models\HostelRoom;
use App\Models\RoomType;
use App\Http\Requests\HostelCreateRequest;

class HostelContoller extends Controller
{
    //

    public function index(){

    	//dd('ok');

    	$data['all_data']= Hostel::get();

    	return view('backend.hostel.index',$data);

    }


     public  function store(HostelCreateRequest $request){
     	Hostel::create($request->all());

     	return redirect()->back()->withSuccess('Add hostel successfully');

     } 
}
