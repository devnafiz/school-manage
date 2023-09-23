@extends('backend.layouts.app')

@section('title', __('Expense  Management'))

@section('breadcrumb-links')
    @include('backend.auth.user.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Expense  List')
        </x-slot>

        

        <x-slot name="body">
        <div  class="row">
               <div class="col-md-4">
                   <h4> Add Expense</h4>
                   <form action="{{route('admin.expense.store')}}" method="POST">
                    @csrf

                       <div  class="form-group">
                         <label>Expense Category Name</label>
                             <select  name="expense_categories_id" class="form-control">
                                 <option value="">Select</option>
                                 @foreach($expense_cat as $cat )
                                 <option value="{{$cat->id}}">{{$cat->exp_category}}</option>
                                 @endforeach
                             </select> 
 
                       </div>
                       <div class="form-group">
                          <label>Name</label>
                          <input type="text" name="name" class="form-control"/>
                        </div>

                         <div class="form-group">
                          <label>Invoice Number</label>
                          <input type="text" name="invoice_no" class="form-control"/>
                        </div>

                         <div class="form-group">
                          <label>Date</label>
                          <input type="date" name="date" class="form-control"/>
                        </div>
                        <div class="form-group">
                          <label>Amount</label>
                          <input type="text" name="amount" class="form-control"/>
                        </div>
                        <div class="form-group">
                          <label>Document</label>
                          <input type="file" name="documents" class="form-control"/>
                        </div>
                         <div class="form-group">
                          <label>Note</label>
                          <textarea class="form-control" name="note"></textarea>
                        </div>


                       <div class="form-group">
                      
                        <label>active
                         <input type="checkbox" name="is_active"  value="yes"/>
                        </label>
                      
                       </div>


                       <input type="submit" value="save" class="btn btn-info"/>

                   </form>
               </div> 
               <div class="col-md-8">
                   <h4>Expense category list</h4>
                   <table class="table table-striped table-bordered table-hover example dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                    <tr role="row">
                                         <th>Name</th>
                                         <th>Description</th>
                                         <th>Expense Category</th>

                                         <th>Invoice Number</th>
                                         <th>date</th>
                                         <th>amount</th>
                                         <th>Status</th>
                                        <th >Action</th>
                                    </tr>
                                </thead>
                                <tbody>      
                                   @foreach($expenses as $expense)

                                   <tr>
                                      <td>{{$expense->name ?? ""}}</td>
                                      <td>{{$expense->note ?? ""}}</td>
                                       <td>{{$expense->expenCategory->exp_category ?? ""}}</td>
                                      <td>{{$expense->invoice_no ?? ""}}</td>
                                      <td>{{$expense->date ?? ""}}</td>
                                      <td>{{$expense->amount ?? ""}}</td>

                                      
                                      <td>
                                       {{($expense->is_active==1)? "active" :"Inactive"}}
                                      </td>
                                      <td>
                                        <a href="{{route('admin.expense.edit',$expense->id)}}"><i class="fa fa-edit"></i></a>
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
