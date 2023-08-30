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
                   <h4> Add Section</h4>
                   <form action="{{route('admin.section.store')}}" method="POST">
                    @csrf

                       <div  class="form-group">
                         <input type="text" name="section" class="form-control"/>
 
                       </div>
                       <input type="submit" value="save" class="btn btn-info"/>

                   </form>
               </div> 
               <div class="col-md-8">
                   <h4>rterte</h4>
                   <table class="table table-striped table-bordered table-hover example dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Section: activate to sort column ascending" style="width: 359px;">Section</th>
                                        <th class="text-right noExport sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 259px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>      
                                    
                                @foreach($all_data as $data)
                                        <tr role="row" class="odd">
                                            <td class="mailbox-name">{{$data->section}}</td>
                                            <td class="mailbox-date pull-right ">
                                                      <a href="{{route('admin.section.edit',$data->id)}}" class="btn btn-default btn-xs" data-toggle="tooltip" title="Edit">
                                                        <i class="fa fa-pencil"></i>edit
                                                    </a>
                                                  <a href="https://demo.smart-school.in/sections/delete/1" class="btn btn-default btn-xs" data-toggle="tooltip" title="Delete" onclick="return confirm('Section Will Also Delete All Students Under This Section So Be Careful As This Action Is Irreversible');">
                                                        <i class="fa fa-remove"></i>
                                                    </a>
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
