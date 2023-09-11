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
                   <h4> Add Hostel</h4>
                   <form action="{{route('admin.hostel.store')}}" method="POST">
                    @csrf

                       <div  class="form-group">
                         <label>Room No</label>
                         <input type="text" name="room_no" class="form-control"/>
 
                       </div>

                       <div class="form-group">
                        <label>Hostel*</label>
                        <select name="hostel_id" class="form-control">
                            <option value="">Select hostel </option>
                            @foreach($all_data as $hostel)
                            <option value="{{$hostel->id}}">{{$hostel->hostel_name}}</option>
                            @endforeach
                           
                          

                        </select>
                        
                       </div>

                       <div class="form-group">
                        <label>Room Type *</label>
                        <select name="room_type_id" class="form-control">
                            <option>selct Type</option>
                            @foreach($type_data as $type)
                            <option value="{{$type->id}}">{{$type->room_type}}</option>
                            @endforeach
                           
                          

                        </select>
                        
                       </div>
                       <div  class="form-group">
                        <label>Number Of Bed *</label>
                         <input type="text" name="no_of_bed" class="form-control"/>
 
                       </div>
                       
                       <div  class="form-group">
                        <label>Cost Per Bed</label>
                         <input type="text" name="cost_per_bed" class="form-control"/>
 
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
                   <h4>Subject List</h4>
                   <table class="table table-striped table-bordered table-hover example ajaxTable datatable  no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                    <tr role="row">
                                        <th>Room Number / Name</th>
                                        <th>Hostel</th>
                                        <th>Room type</th>
                                        <th>Number of bed</th>
                                        <th>Number of cost</th>
                                        <th >Action</th>
                                    </tr>
                                </thead>
                                <tbody>      
                                   @foreach($all_data as $data)

                                   <tr>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>

                                      
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
