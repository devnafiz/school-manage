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
                         <label>Hostel</label>
                         <input type="text" name="hostel_name" class="form-control"/>
 
                       </div>

                       <div class="form-group">
                        <select name="type" class="form-control">
                            <option>selct Type</option>
                            <option value="boys">Boys</option>
                            <option value="girls">girl</option>
                            <option value="combine">Combine</option>
                          

                        </select>
                        
                       </div>
                       <div  class="form-group">
                        <label>address</label>
                         <input type="text" name="address" class="form-control"/>
 
                       </div>
                       
                       <div  class="form-group">
                        <label>intake</label>
                         <input type="text" name="intake" class="form-control"/>
 
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
                                        <th>Subject</th>
                                        <th >Suject code</th>
                                         <th >Suject type</th>
                                        <th >Action</th>
                                    </tr>
                                </thead>
                                <tbody>      
                                   @foreach($all_data as $data)

                                   <tr>
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
