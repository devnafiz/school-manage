@extends('backend.layouts.app')

@section('title', __('User Management'))

@section('breadcrumb-links')
    @include('backend.auth.user.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Vehicle Route List')
        </x-slot>

        

        <x-slot name="body">
        <div  class="row">
               <div class="col-md-4">
                   <h4> Add Class</h4>
                   <form action="{{route('admin.class.store')}}" method="POST">
                    @csrf

                       <div  class="form-group">
                        <select class="form-control" name="route_id">
                          <option>select route</option>
                          @foreach($routes as $route)
                           <option value="{{$route->id}}">{{$route->name}}</option>
                           @endforeach
                        </select>
 
                       </div>
                   

                       <div class="form-group">
                        @foreach($vehicles as $vehicle)
                        <label>
                        <input type="checkbox" name="vehicle_id[]" value="<?php echo $vehicle['id'] ?>" />
                        {{ $vehicle['vehicle_no'] }}
                        </label><br/>

                       
                        @endforeach

                       </div>


                       <input type="submit" value="save" class="btn btn-info"/>

                   </form>
               </div> 
               <div class="col-md-8">
                   <h4>rterte</h4>
                   <table class="table table-striped table-bordered table-hover example dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                    <tr role="row">
                                        <th>Route</th>
                                        <th >vehicle</th>
                                        <th >Action</th>
                                    </tr>
                                </thead>
                                <tbody>      
                                   @foreach($vehicle_routes as $route)

                                   <tr>
                                      <td>{{$route->name}}</td>

                                      <td>
                                        <ul>
                                          <?php $vehicles = vehicle_names($route->vehicles); ?>
                              
                                          {!!$vehicles['vehicle_names']!!}

                                       
                                      </ul>
                                      </td>
                                      <td>
                                        <a href="{{route('admin.class.edit',$route->id)}}"><i class="fa fa-edit"></i></a>
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
