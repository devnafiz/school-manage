@extends('backend.layouts.app')

@section('title', __('Transport Management'))

@section('breadcrumb-links')
    @include('backend.auth.user.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Route list ')
        </x-slot>

        

        <x-slot name="body">
        <div  class="row">
               <div class="col-md-4">
                   <h4> Add Route</h4>
                   <form action="{{route('admin.route.store')}}" method="POST">
                    @csrf

                       <div  class="form-group">
                         <label>Route</label>
                         <input type="text" name="name" class="form-control"/>
 
                       </div>

                      
                     
                       


                       <input type="submit" value="save" class="btn btn-info"/>

                   </form>
               </div> 
          
                
               <div class="col-md-8 col-lg-8">
                  
                   <h4>Route List</h4>
                   <table class="table table-striped table-bordered table-hover example ajaxTable datatable  no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                    <tr role="row">
                                        <th>Route Name</th>
                                        
                                       
                                        <th>Status</th>

                                        

                                        <th >Action</th>
                                    </tr>
                                </thead>
                                <tbody>      
                                   @foreach($all_data as $data)

                                   <tr>
                                      <td>{{$data->name}}</td>
                                      <td>{{$data->is_active}}</td>
                                      

                                      
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
