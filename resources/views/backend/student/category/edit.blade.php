@extends('backend.layouts.app')

@section('title', __('Edit Category Management'))

@section('breadcrumb-links')
    @include('backend.auth.user.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Edit Category  List')
        </x-slot>

        

        <x-slot name="body">
        <div  class="row">
               <div class="col-md-12">
                   <h4> Edit Name</h4>
                   <form action="{{route('admin.studentCategory.update',$edit_data->id)}}" method="POST">
                    @csrf
                    @method('PUT')

                       <div  class="form-group">
                         <input type="text" name="name" class="form-control" value="{{$edit_data->name}}" />
 
                       </div>
                        <div  class="form-group">
                          <label>Status
                             <input type="checkbox" name="is_active" class="form-control" value="{{$edit_data->is_active}}" {{($edit_data->is_active==1) ? "checked" :""}}/> 
                          </label>
                        
 
                       </div>
                       


                       <input type="submit" value="update" class="btn btn-info"/>

                   </form>
               </div> 
               


           </div>
        </x-slot>
    </x-backend.card>
@endsection
