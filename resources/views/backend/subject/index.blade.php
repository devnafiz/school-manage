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
                   <h4> Add Subject</h4>
                   <form action="{{route('admin.subject.store')}}" method="POST">
                    @csrf

                       <div  class="form-group">
                         <label>Subject name</label>
                         <input type="text" name="name" class="form-control"/>
 
                       </div>

                       <div class="form-group">
                        <label>
                          <input type="radio" name="type" value="Theory">
                          Theory
                        </label>
                         <label>
                          <input type="radio" name="type" value="Practical">
                          Practical
                        </label>
                       </div>
                       <div  class="form-group">
                        <label>Subject code</label>
                         <input type="text" name="code" class="form-control"/>
 
                       </div>


                       <input type="submit" value="save" class="btn btn-info"/>

                   </form>
               </div> 
               <div class="col-md-8">
                   <h4>Subject List</h4>
                   <table class="table table-striped table-bordered table-hover example dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                    <tr role="row">
                                        <th>Subject</th>
                                        <th >Suject code</th>
                                         <th >Suject type</th>
                                        <th >Action</th>
                                    </tr>
                                </thead>
                                <tbody>      
                                   @foreach($subjects as $subject)

                                   <tr>
                                      <td>{{$subject->name}}</td>
                                      <td>{{$subject->code}}</td>
                                      <td>{{$subject->type}}</td>

                                      
                                      <td>
                                        <a href="{{route('admin.subject.edit',$subject->id)}}"><i class="fa fa-edit"></i></a>
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
