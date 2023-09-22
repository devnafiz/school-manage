@extends('backend.layouts.app')

@section('title', __('Transport Management'))

@section('breadcrumb-links')
    @include('backend.auth.user.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Vehicle list ')
        </x-slot>

        

        <x-slot name="body">
        <div  class="row">
          
                
               <div class="col-md-12 col-lg-12">
                  <div class="text-right">
                    <a href="{{route('admin.route.picup.point.create')}}" class="btn btn-info ">add Route Picup Point</a>
                  </div>
                   <h4>Picup Point List</h4>
                   <table class="table table-striped table-bordered table-hover example ajaxTable datatable  no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                    <tr role="row">
                                        <th>Route</th>
                                        <th>Picup Point</th>
                                        <th>Monthly fee</th>
                                        <th>Distance</th>
                                        <th>Picup Time</th>
                                        <th >Action</th>
                                    </tr>
                                </thead>
                                <tbody>      
                                   @foreach($all_data as $data)

                                   <tr>
                                      <td>{{$data->name}}</td>
                                      <td>
                                         @foreach($data->picups as $pic)
                                              <li>{{$pic->picup_point}}</li>
                                        @endforeach

                                      </td>
                                      <td>
                                         @foreach($data->picups as $pic)
                                              <li>{{$pic->pivot->fee}}</li>
                                        @endforeach
                                      </td>
                                       <td>
                                         @foreach($data->picups as $pic)
                                              <li>{{$pic->pivot->distance}}</li>
                                        @endforeach
                                      </td>
                                       <td>
                                         @foreach($data->picups as $pic)
                                              <li>{{$pic->pivot->time}}</li>
                                        @endforeach
                                      </td>
                                      

                                      
                                      <td>
                                        <a href=""><i class="fa fa-edit"></i></a>
                                        <a href=""><i class="fa fa-trash"></i></a>
                                      </td>

                                   </tr>  

                                   @endforeach
                                 
                                </tbody>
                            </table>
               </div>


           </div>
        </x-slot>
    </x-backend.card>
@endsection
