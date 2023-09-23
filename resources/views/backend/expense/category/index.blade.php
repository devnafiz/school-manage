@extends('backend.layouts.app')

@section('title', __('Expense Category Management'))

@section('breadcrumb-links')
    @include('backend.auth.user.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Expense Category List')
        </x-slot>

        

        <x-slot name="body">
        <div  class="row">
               <div class="col-md-4">
                   <h4> Add Class</h4>
                   <form action="{{route('admin.expensecategory.store')}}" method="POST">
                    @csrf

                       <div  class="form-group">
                         <label>Expense Category Name</label>
                         <input type="text" name="exp_category" class="form-control"/>
 
                       </div>
                       <div class="form-group">
                          <label> Category Description</label>
                          <input type="text" name="description" class="form-control"/>
                        </div>

                       <div class="form-group">
                      
                        <label>active
                         <input type="checkbox" name="is_active"  value="yes"/>
                        </label>
                      
                       </div>


                       <input type="submit" value="save" class="btn btn-info"/>

                   </form>
               </div> 
               <div class="col-md-8">
                   <h4>Expense category list</h4>
                   <table class="table table-striped table-bordered table-hover example dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                    <tr role="row">
                                        <th>Expense category</th>
                                        <th>Description</th>
                                         <th>Status</th>
                                        <th >Action</th>
                                    </tr>
                                </thead>
                                <tbody>      
                                   @foreach($all_category as $category)

                                   <tr>
                                      <td>{{$category->exp_category}}</td>

                                      <td>
                                       {{$category->description}}
                                      </td>
                                      <td>
                                       {{($category->is_active==1)? "active" :"Inactive"}}
                                      </td>
                                      <td>
                                        <a href="{{route('admin.expensecategory.edit',$category->id)}}"><i class="fa fa-edit"></i></a>
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
