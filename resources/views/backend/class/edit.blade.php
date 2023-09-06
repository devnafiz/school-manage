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
               <div class="col-md-12">
                   <h4> Add Class</h4>
                   <form action="{{route('admin.class.update',$edit_data->id)}}" method="POST">
                    @method('PUT')
                    @csrf

                       <div  class="form-group">
                         <input type="text" name="class" class="form-control" value="{{$edit_data->class}}" />
 
                       </div>
                       <div class="form-group">
                        @foreach($sections as $section)
                        <label>
                        <input type="checkbox" name="section[]" value="<?php echo $section['id'] ?>" {{ in_array($section->id,$edit_data->sections->pluck('id')->toArray())? "checked" :""}}/>
                        {{ $section['section'] }}
                        </label><br/>

                       
                        @endforeach

                       </div>


                       <input type="submit" value="save" class="btn btn-info"/>

                   </form>
               </div> 
               <div class="col-md-8">
                   
                  
               </div>


           </div>
        </x-slot>
    </x-backend.card>
@endsection