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
               <div class="col-md-4">
                   <h4> Add Name</h4>
                   <form action="{{route('admin.disable-reason.store')}}" method="POST">
                    @csrf

                       <div  class="form-group">
                         <input type="text" name="  reason" class="form-control"/>
 
                       </div>
                       


                       <input type="submit" value="save" class="btn btn-info"/>

                   </form>
               </div> 
               <div class="col-md-8">
                   <h4>rterte</h4>
                   <table class="table table-striped table-bordered table-hover example dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                    <tr role="row">
                                      <th>Reason</th>
                                        <th >id</th>
                                        <th >Action</th>
                                    </tr>
                                </thead>
                                <tbody>      
                                   @foreach($all_data as $reason)

                                   <tr>
                                      <td>{{$reason->reason}}</td>

                                      <td>{{$reason->id}}</td>
                                     
                                      <td>
                                        <a href="{{route('admin.disable-reason.edit',$reason->id)}}"><i class="fa fa-edit"></i></a>
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
