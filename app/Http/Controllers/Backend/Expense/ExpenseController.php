<?php

namespace App\Http\Controllers\Backend\Expense;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\ExpenseCategory;
use App\Models\Expense;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $data['expense_cat']=ExpenseCategory::where('is_active',1)->get();
         $data['expenses']=Expense::with('expenCategory')->orderBy('id','desc')->paginate(10);

         return view('Backend.expense.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

       


        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $expense_data =$this->expenseValidateion();

        Expense::create($expense_data);
        return redirect()->route('admin.picup.index')->withSuccess('Add successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $data['expense_cat']=ExpenseCategory::where('is_active',1)->get();
         $data['expense']=Expense::with('expenCategory')->where('id',$id)->first();

         return view('Backend.expense.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    //search expense
    public function searchExpense(){

         $data['expense_cat']=ExpenseCategory::where('is_active',1)->get();
         $data['expenses']=Expense::with('expenCategory')->orderBy('id','desc')->paginate(10);

        return view('Backend.expense.expense-search',$data);
    }

  public function expenseValidateion(){

        $data=request()->validate([

            'expense_categories_id' => 'nullable|numeric',
            'name' => 'required|string',
            'invoice_no' => 'required|numeric',
            'date' => 'required|date',
            'amount' => 'required|numeric',
            'documents' => 'nullable|file',
            'note' => 'nullable|string',
  
         ]);

       return $data; 


  }

   
}
