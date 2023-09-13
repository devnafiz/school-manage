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
               <div class="col-md-12 col-lg-12 col-sm-12">
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
               


           </div>
        </x-slot>
    </x-backend.card>
@endsection
