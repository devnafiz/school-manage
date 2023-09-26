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
               <div class="col-md-12">
                   <h4> Add House</h4>
                   <form action="{{route('admin.student-house.update',$edit_data->id)}}" method="POST">
                    @csrf
                    @method('PUT')

                       <div  class="form-group">
                         <input type="text" name="house_name" class="form-control" value="{{$edit_data->house_name}}" />
 
                       </div>
                       <div  class="form-group">
                        <label>Description</label>
                        <textarea name="description" class="form-control">
                          {{$edit_data->description}}
                        </textarea>
 
                       </div>
                       


                       <input type="submit" value="save" class="btn btn-info"/>

                   </form>
               </div> 
              


           </div>
        </x-slot>
    </x-backend.card>
@endsection
