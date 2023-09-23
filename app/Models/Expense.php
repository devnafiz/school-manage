<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function expenCategory(){

    	return $this->belongsTo(ExpenseCategory::class,'expense_categories_id','id');
    }
}
