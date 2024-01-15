@extends('admin.admin_master') @section('admin') <div class="page-content">
    <div class="container-fluid">
      <!-- start page title -->
      <div class="row">
        <div class="col-12">
          <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Employee All</h4>
          </div>
        </div>
      </div>
      <!-- end page title -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <a href="{{ route('employee.create') }}" class="btn btn-dark btn-rounded waves-effect waves-light" style="float:right;">
                <i class="fas fa-plus-circle"> Add Employee </i>
              </a>
              <br>
              <br>
              <h4 class="card-title">Employee Data </h4>
              <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                  <tr>
                    <th>Sl</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile Number </th>
                    <th>Salary</th>
                    <th>Picture</th>
                    <th>Action</th>
                </thead>
                <tbody> @foreach($employees as $key => $item) <tr>
                    <td> {{ $key+1}} </td>
                    <td> {{ $item->employee_name }} </td>
                    <td> {{ $item->employee_email }} </td>
                    <td> {{ $item->employee_phone }} </td>
                    <td> {{ $item->employee_salary }} </td>
                    <td> <img src="{{ asset( $item->employee_picture ) }}" style="width:60px; height:50px"> </td>
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