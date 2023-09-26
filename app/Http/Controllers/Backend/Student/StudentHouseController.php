<?php

namespace App\Http\Controllers\Backend\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StusentHouse;

class StudentHouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $data['all_data']=StusentHouse::all();
         //dd($data['all_data']);

        return view('backend.student.house.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'house_name'=>'required|string',
            'description'=>'nullable|string'

        ]);

        $data = new StusentHouse();

        $data->house_name = $request->house_name;
        $data->description = $request->description;
        $data->save();
        return redirect()->back()->withSuccess('add  successfully');
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
       // dd($id);
         $data['edit_data']=StusentHouse::findOrFail($id);
          return view('backend.student.house.edit',$data);
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
        $request->validate([
            'house_name'=>'required|string',
            'description'=>'nullable|string'

        ]);

        $data =  StusentHouse::findOrFail($id);

        $data->house_name = $request->house_name;
        $data->description = $request->description;
        $data->save();
        return redirect()->back()->withSuccess('successfully Updated');
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
}
