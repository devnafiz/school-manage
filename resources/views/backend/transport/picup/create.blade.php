@extends('backend.layouts.app')

@section('title', __('Picup add Management'))

@section('breadcrumb-links')
    @include('backend.auth.user.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang(' Add Picup Point')
        </x-slot>

        

        <x-slot name="body">
        <div  class="row">
               <div class="col-md-12 col-lg-12 col-sm-12">
                   <h4> Add Picup Point</h4>
                   <form action="{{route('admin.picup.store')}}" method="POST">
                    @csrf

                        <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Pickup Point </label><small class="req"> *</small>
                                        <input autofocus="" id="picup_point" name="picup_point" placeholder="" type="text" class="form-control"  value="" />
                                        <span class="text-danger"></span>
                                    </div>
                                   
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Latitude *</label>
                                        <input id="latitude" name="latitude" placeholder="" type="text" class="form-control"  value="" />
                                        <span class="text-danger"></span>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Longitude * </label>
                                        <input id="longitude" name="longitude" placeholder="" type="text" class="form-control"  value="" />
                                        <span class="text-danger"></span>
                                    </div>
                                </div>
                            </div>

                          

                           
                            


                       <input type="submit" value="save" class="btn btn-info"/>

                   </form>
               </div> 
               


           </div>
        </x-slot>
    </x-backend.card>
@endsection
