@extends('backend.layouts.app')

@section('title', __('User Management'))

@section('breadcrumb-links')
    @include('backend.auth.user.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Section List')
        </x-slot>

        

        <x-slot name="body">
        <div  class="row">
               <div class="col-md-4">
                   <h4> Add Hostel type</h4>
                   <form action="{{route('admin.room.type.store')}}" method="POST">
                    @csrf

                       <div  class="form-group">
                         <label>Room</label>
                         <input type="text" name="room_type" class="form-control"/>
 
                       </div>

                       
                       
                       <div  class="form-group">
                        <label>Description</label>
                         <textarea  name="description" cols="40%" rows="3" class="form-control"> 
                           
                         </textarea>
 
                       </div>


                       <input type="submit" value="save" class="btn btn-info"/>

                   </form>
               </div> 
               <div class="col-md-8">
                   <h4>Room type List </h4>
                   <table class="table table-striped table-bordered table-hover example ajaxTable datatable  no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                    <tr role="row">
                                        <th> Type</th>
                                       
                                        <th>description</th>
                                      
                                    </tr>
                                </thead>
                                <tbody>      
                                   @foreach($all_data as $data)

                                   <tr>
                                      <td>{{$data->room_type}}</td>
                                      <td>{{$data->description}}</td>
                                      

                                      
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
