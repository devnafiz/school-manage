@extends('backend.layouts.app')

@section('title', __('Disable Reason Management'))

@section('breadcrumb-links')
    @include('backend.auth.user.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Disable Reason  List')
        </x-slot>

        

        <x-slot name="body">
        <div  class="row">
               <div class="col-md-12">
                   <h4> Add Name</h4>
                   <form action="{{route('admin.disable-reason.update',$edit_data->id)}}" method="POST">
                    @csrf
                    @method('PUT')

                       <div  class="form-group">
                         <input type="text" name="reason" class="form-control" value="{{$edit_data->reason}}" />
 
                       </div>
                       


                       <input type="submit" value="save" class="btn btn-info"/>

                   </form>
               </div> 
               


           </div>
        </x-slot>
    </x-backend.card>
@endsection
