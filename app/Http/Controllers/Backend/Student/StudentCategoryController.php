<?php

namespace App\Http\Controllers\Backend\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StusentHouse;
use App\Models\StudentCategory;

class StudentCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['all_data']=StudentCategory::paginate(10);
       return view('backend.student.category.index',$data);

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
            'name'=>'required|string',
           

        ]);

        $data = new StudentCategory();

        $data->name = $request->name;
        $data->is_active =1;
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
        $data['edit_data']=StudentCategory::findOrFail($id);
          return view('backend.student.category.edit',$data);
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

       // dd($request->all());
        $request->validate([
            'name'=>'required|string',
           

        ]);

        $data =  StudentCategory::findOrFail($id);

        $data->name = $request->name;
        if($data->is_active==$request->is_active){
            $data->is_active = 1; 
        }else{

             $data->is_active = 0; 
        }

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
