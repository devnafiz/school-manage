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

     //room trype

     public  function AllRoomtype(){

     	$data['all_data']=RoomType::all();

     	return view('backend.hostel.roomtype.index',$data);

     }

     public function roomTypeStore(Request $request){

     	         $room=new RoomType();
     	         $room->room_type =$request->room_type;
     	         $room->description =$request->description;
     	         $room->save();
     	         return redirect()->back()->withSuccess('add data successfully');


     }

     public function hostelRoom(){

     	$data['all_data']=Hostel::all();
     	$data['type_data']=RoomType::all();


     	return view('backend.hostel.hostelroom.index',$data);
     }

     public function roomStore(Request $request){

     	  $hostelroom = new HostelRoom();
     	  $hostelroom->room_no =$request->room_no;
     	  $hostelroom->hostel_id =$request->hostel_id;
     	  $hostelroom->room_type_id =$request->room_type_id;

     	  $hostelroom->no_of_bed =$request->no_of_bed;
     	  $hostelroom->cost_per_bed =$request->cost_per_bed;
     	  $hostelroom->description =$request->description;
     	  $hostelroom->save();

          return redirect()->back()->withSuccess('add data successfully');



     }
}
