<?php

namespace App\Http\Controllers\Backend\transport;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Picuppoint;
use App\Models\Route;

class PicupPointController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $data['all_data']=Picuppoint::paginate(10);

         return view('backend.transport.picup.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.transport.picup.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $data =$this->picUpPointValidation();

       Picuppoint::create($data);

       return redirect()->route('admin.picup.index')->withSuccess('Add successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public  function picupPointRouteView(){



    }

    public function picupPointRouteAdd(){

        $data['picup_points']=Picuppoint::get();
        $data['routes']=Route::where('is_active',1)->get();
        return view('backend.transport.picup.create_pic_route',$data);
    }

    public function getPicupPoint(){

        $data=Picuppoint::get();
        return $data;
    }


    public function picUpPointValidation(){

        $data=request()->validate([

            'picup_point'=>'required',
            'latitude'=>'required',
            'longitude'=>'required'

        ]);
        return $data;
    }



}
