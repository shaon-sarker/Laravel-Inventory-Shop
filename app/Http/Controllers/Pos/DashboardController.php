<?php

namespace App\Http\Controllers\Pos;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Employee;
use App\Models\Product;
use App\Models\Purchase;
use App\Models\Supplier;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $total_employee = Employee::count();
        $total_suplier = Supplier::count();
        $total_customer = Customer::count();
        $total_product = Product::count();
        $total_purchase = Purchase::count();
        $total_expense = Purchase::select('buying_price')->sum('buying_price');
        $expense_date = date("y/m/d");
        $today_total_purchae = Purchase::where('date', $expense_date)->sum('buying_price');
        $expense_month = date('m');
        $monthly_total_purchae = Purchase::whereMonth('date', $expense_month)->sum('buying_price');
        $expense_year = date('Y');
        $yearly_total_purchae = Purchase::whereYear('date', $expense_year)->sum('buying_price');
        // dd($total_employee);
        return view('admin.index',compact('total_employee','total_suplier','total_customer','total_product','total_purchase','total_expense','today_total_purchae','monthly_total_purchae','yearly_total_purchae'));
    }
}
