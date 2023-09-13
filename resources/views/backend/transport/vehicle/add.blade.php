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
                   <h4> Add Vehicle</h4>
                   <form action="{{route('admin.vehicle.store')}}" method="POST">
                    @csrf

                        <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Vehicle Number</label><small class="req"> *</small>
                                        <input autofocus="" id="vehicle_no" name="vehicle_no" placeholder="" type="text" class="form-control"  value="" />
                                        <span class="text-danger"></span>
                                    </div>
                                   
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Vehicle Model</label>
                                        <input id="vehicle_model" name="vehicle_model" placeholder="" type="text" class="form-control"  value="" />
                                        <span class="text-danger"></span>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Year Made </label>
                                        <input id="manufacture_year" name="manufacture_year" placeholder="" type="text" class="form-control"  value="" />
                                        <span class="text-danger"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Registration Number </label>
                                        <input id="registration_number" name="registration_number" placeholder="" type="text" class="form-control"  value="" />
                                        <span class="text-danger"></span>
                                    </div>
                                   
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Chasis Number </label>
                                        <input id="chasis_number" name="chasis_number" placeholder="" type="text" class="form-control"  value="" />
                                        <span class="text-danger"></span>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Max Seating Capacity </label>
                                        <input id="max_seating_capacity" name="max_seating_capacity" placeholder="" type="text" class="form-control"  value="" />
                                        <span class="text-danger"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Driver Name</label>
                                        <input id="driver_name" name="driver_name" placeholder="" type="text" class="form-control"  value="" />
                                        <span class="text-danger"></span>
                                    </div>
                                   
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Driver License</label>
                                        <input id=" driver_licence" name="driver_licence" placeholder="" type="text" class="form-control"  value="" />
                                        <span class="text-danger"></span>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Driver Contact</label>
                                        <input id="driver_contact" name="driver_contact" placeholder="" type="text" class="form-control"  value="" />
                                        <span class="text-danger"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                  <div class="form-group">
                                        <label >Vehicle Photo</label>
                                        <input id="vehicle_photo" name="vehicle_photo" placeholder="" type="file" class="filestyle form-control" data-height="30"  value="" />
                                        <span class="text-danger"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                  <div class="form-group">
                                        <label>Note</label>
                                        <textarea class="form-control" id="note" name="note" placeholder="" rows="3"></textarea>
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
