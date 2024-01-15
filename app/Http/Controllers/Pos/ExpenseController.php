<?php

namespace App\Http\Controllers\Pos;

use App\Http\Controllers\Controller;
use App\Models\Purchase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ExpenseController extends Controller
{
    public function index()
    {
        $expense_list = Purchase::select(['id','supplier_id','product_id','purchase_no','date','buying_price'])->get();
        $total_expense = Purchase::select('buying_price')->sum('buying_price');
        $expense_date = date("y/m/d");
        $today_total_purchae = Purchase::where('date', $expense_date)->sum('buying_price');
        $expense_month = date('m');
        $monthly_total_purchae = Purchase::whereMonth('date', $expense_month)->sum('buying_price');
        $expense_year = date('Y');
        $yearly_total_purchae = Purchase::whereYear('date', $expense_year)->sum('buying_price');
        return view('backend.expense.index',compact('expense_list','total_expense','today_total_purchae','monthly_total_purchae','yearly_total_purchae'));
    }
}
