@extends('backend.layouts.app')

@section('title', __('Expense  Management'))

@section('breadcrumb-links')
    @include('backend.auth.user.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Expense  Edit')
        </x-slot>

        

        <x-slot name="body">
        <div  class="row">
               <div class="col-md-12">
                   <h4> Edit Expense</h4>
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
               

           </div>
        </x-slot>
    </x-backend.card>
@endsection
