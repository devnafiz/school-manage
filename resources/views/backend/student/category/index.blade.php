@extends('backend.layouts.app')

@section('title', __('Student Category Management'))

@section('breadcrumb-links')
    @include('backend.auth.user.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Student Category  List')
        </x-slot>

        

        <x-slot name="body">
        <div  class="row">
               <div class="col-md-4">
                   <h4> Add Category</h4>
                   <form action="{{route('admin.studentCategory.store')}}" method="POST">
                    @csrf

                       <div  class="form-group">
                         <input type="text" name="name" class="form-control"/>
 
                       </div>
                       


                       <input type="submit" value="save" class="btn btn-info"/>

                   </form>
               </div> 
               <div class="col-md-8">
                   <h4>Category List</h4>
                   <table class="table table-striped table-bordered table-hover example dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                    <tr role="row">
                                        <th>Name</th>
                                        <th >id</th>
                                        <th >Action</th>
                                    </tr>
                                </thead>
                                <tbody>      
                                   @foreach($all_data as $category)

                                   <tr>
                                      <td>{{$category->name}}</td>

                                      <td>{{$category->id}}</td>
                                     
                                      <td>
                                        <a href="{{route('admin.studentCategory.edit',$category->id)}}"><i class="fa fa-edit"></i></a>
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
