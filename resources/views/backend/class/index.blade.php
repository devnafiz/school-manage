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
               <div class="col-md-4">
                   <h4> Add Class</h4>
                   <form action="{{route('admin.class.store')}}" method="POST">
                    @csrf

                       <div  class="form-group">
                         <input type="text" name="class" class="form-control"/>
 
                       </div>
                       <div class="form-group">
                        @foreach($sections as $section)
                        <label>
                        <input type="checkbox" name="section[]" value="<?php echo $section['id'] ?>" />
                        {{ $section['section'] }}
                        </label><br/>

                       
                        @endforeach

                       </div>


                       <input type="submit" value="save" class="btn btn-info"/>

                   </form>
               </div> 
               <div class="col-md-8">
                   <h4>rterte</h4>
                   <table class="table table-striped table-bordered table-hover example dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                    <tr role="row">
                                      <th>class</th>
                                        <th >Section</th>
                                        <th >Action</th>
                                    </tr>
                                </thead>
                                <tbody>      
                                   @foreach($classes as $class)

                                   <tr>
                                      <td>{{$class->class}}</td>

                                      <td>
                                        <ul>
                                        @foreach($class->sections as $section)
                                              <li>{{$section->section}}</li>
                                        @endforeach
                                      </ul>
                                      </td>
                                      <td>
                                        <a href="{{route('admin.class.edit',$class->id)}}"><i class="fa fa-edit"></i></a>
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
