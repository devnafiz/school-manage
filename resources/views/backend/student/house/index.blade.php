@extends('backend.layouts.app')

@section('title', __(' School House Management'))

@section('breadcrumb-links')
    @include('backend.auth.user.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('School House List')
        </x-slot>

        

        <x-slot name="body">
        <div  class="row">
               <div class="col-md-4">
                   <h4> Add House</h4>
                   <form action="{{route('admin.student-house.store')}}" method="POST">
                    @csrf

                       <div  class="form-group">
                         <input type="text" name="house_name" class="form-control"/>
 
                       </div>
                       <div  class="form-group">
                        <label>Description</label>
                        <textarea name="description" class="form-control">
                          
                        </textarea>
 
                       </div>
                       


                       <input type="submit" value="save" class="btn btn-info"/>

                   </form>
               </div> 
               <div class="col-md-8">
                   <h4>School House</h4>
                   <table class="table table-striped table-bordered table-hover example dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                    <tr role="row">
                                        <th>School house</th>
                                        <th >Description</th>
                                         <th >id</th>
                                        <th >Action</th>
                                    </tr>
                                </thead>
                                <tbody>      
                                   @foreach($all_data as $house)

                                   <tr>
                                      <td>{{$house->house_name}}</td>

                                      <td>{{$house->description}}</td>
                                       <td>{{$house->id}}</td>
                                     
                                      <td>
                                        <a href="{{route('admin.student-house.edit',$house->id)}}"><i class="fa fa-edit"></i></a>
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
