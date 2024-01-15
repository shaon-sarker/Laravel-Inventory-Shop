@extends('admin.admin_master') @section('admin') <div class="page-content">
    <div class="container-fluid">
      <!-- start page title -->
      <div class="row">
        <div class="col-12">
          <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Expense Tracker</h4>
          </div>
        </div>
      </div>
      <!-- end page title -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <a href="" class="btn btn-dark btn-rounded waves-effect waves-light" style="float:right;">
                Today Expense: {{ $today_total_purchae }} Tk
              </a>
              <a href="" class="btn btn-success btn-rounded waves-effect waves-light" style="float:right;">
                Monthly Expense: {{ $monthly_total_purchae }} TK
              </a>
              <a href="" class="btn btn-primary btn-rounded waves-effect waves-light" style="float:right;">
                Yearly Expense: {{ $yearly_total_purchae }} Tk
              </a>
              <br>
              <br>
              <h4 class="card-title">Total Expense Data {{ round($total_expense) }} TK</h4>
              <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                  <tr>
                    <th>Sl</th>
                    <th>Supplier Name</th>
                    <th>Product Name</th>
                    <th>Purchase No</th>
                    <th>Date</th>
                    <th>Buying Price</th>
                    <th>Action</th>
                </thead>
                <tbody> @foreach($expense_list as $key => $item) <tr>
                    <td> {{ $key+1}} </td>
                    <td> {{ App\Models\Supplier::find($item->supplier_id)->name }} </td>
                    <td> {{ App\Models\Product::find($item->product_id)->name }} </td>
                    <td> {{ $item->purchase_no }} </td>
                    <td> {{ $item->date }} </td>
                    <td> {{ $item->buying_price }} </td>
                    <td>
                      <a href="{{ route('employee.edit',$item->id) }}" class="btn btn-info sm" title="Edit Data">
                        <i class="fas fa-edit"></i>
                      </a>
                      <form action="{{ route('employee.destroy',$item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger sm"><i class="fas fa-trash-alt"></i></button>
                    </form>
                      {{-- <a href="{{ route('employee.destroy',$item->id) }}" class="btn btn-danger sm" title="Delete Data" id="delete">
                        <i class="fas fa-trash-alt"></i>
                      </a> --}}
                    </td>
                  </tr> @endforeach </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- end col -->
      </div>
      <!-- end row -->
    </div>
    <!-- container-fluid -->
  </div> @endsection