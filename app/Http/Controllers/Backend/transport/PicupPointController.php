<?php

namespace App\Http\Controllers\Backend\transport;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Picuppoint;
use App\Models\Route;
use App\Models\PicupRoute;
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

        $data['all_data']= Route::has('picups')->with('picups')->get();
       // dd($data['all_data']);

        return view('backend.transport.picup.route_pic_index',$data);



    }

    public function picupPointRouteAdd(){

        $data['picup_points']=Picuppoint::get();
        $data['routes']=Route::where('is_active',1)->get();
        return view('backend.transport.picup.create_pic_route',$data);
    }
    public  function picupPointRouteStore(Request $request){




         $picupRoutes  = $this->picRouteValidation();



         if($request->route_id==null){
         return redirect()->back()->with('error','You do not select field');
        }else{
            $count_pickup=count($request->pickup_id);
            for ($i=0; $i <$count_pickup ; $i++) { 
                $purchase=new PicupRoute;
               
                $purchase->pickup_id=$request->pickup_id[$i];
                $purchase->distance=$request->distance[$i];
                $purchase->time=$request->time[$i];
                $purchase->fee=$request->fee[$i];
                $purchase->route_id =$request->route_id;
                $purchase->save();


            }


         //dd($picupRoutes);
        // $route_id =$request->route_id;
         //dd($route_id);

         // foreach ($picupRoutes as $k=>$picups) {
         //    foreach($picups as $picup){
         //    //dd($picup[$k]);
         //  // dd($route_id);
         //          // var_dump($picup);
         //    $picup['route_id'] = $route_id;

      
         //   PicupRoute::create($picup);
         //  }


         // }

         // foreach($picupRoutes as $key =>$value){

         //    //$countries = array_count_values($value);
         //    var_dump($value['route_id']);
         //    $route = Route::find($value['route_id']);

         //    $route->picups()->attach($value);
         //   // dd($value);
         // }
       return redirect()->back()->withSuccess('Add successfully');
        }

    }


    public function picupPointRouteEdit(Request $request,$id){

        $data['picup_points']=Picuppoint::get();
        $data['routes']=Route::where('is_active',1)->get();
        $data['all_data']= Route::has('picups')->with('picups')->where('id',$id)->first();
          //dd($data['all_data']);
         return view('backend.transport.picup.edit_route_pic',$data);
      
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

    public function picRouteValidation(){


         $data=request()->validate([

              
           'route_id'=>'required',
            'pickup_id'=>'required',
            'distance'=>'nullable|max:50',
            'time'=>'required',
            'fee'=>'required',

         ]);

         return $data;


    }



}
