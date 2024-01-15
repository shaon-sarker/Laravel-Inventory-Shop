@extends('admin.admin_master')
@section('admin')
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="page-content">
<div class="container-fluid">

<div class="row">
<div class="col-12">
    <div class="card">
        <div class="card-body">

            <h4 class="card-title">Update Employee</h4><br><br>
            <form method="POST" action="{{ route('employee.update',$employee->id) }}" id="myForm" enctype="multipart/form-data">
                @csrf
                @method('PUT')
            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Employee Name </label>
                <div class="form-group col-sm-10">
                    <input name="employee_name" class="form-control" type="text" value="{{ $employee->employee_name }}">
                </div>
            </div>
            <!-- end row -->
            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Employee Email</label>
                <div class="form-group col-sm-10">
                    <input name="employee_email" class="form-control" type="text" value="{{ $employee->employee_email }}">
                </div>
            </div>
            <!-- end row -->
            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Employee Mobile </label>
                <div class="form-group col-sm-10">
                    <input name="employee_phone" class="form-control" type="number" value="{{ $employee->employee_phone }}">
                </div>
            </div>
            <!-- end row -->
            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Employee Address </label>
                <div class="form-group col-sm-10">
                    {{-- <input name="email" class="form-control" type="email"  > --}}
                    <textarea name="employee_address" class="form-control" id="" cols="30" rows="10">{{ $employee->employee_address }}</textarea>
                </div>
            </div>
            <!-- end row -->
            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Employee Experience</label>
                <div class="form-group col-sm-10">
                    <input name="employee_experience" class="form-control" type="number" value="{{ $employee->employee_experience }}">
                </div>
            </div>
            <!-- end row -->
            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Employee Salary</label>
                <div class="form-group col-sm-10">
                    <input name="employee_salary" class="form-control" type="number" value="{{ $employee->employee_salary }}">
                </div>
            </div>
            <!-- end row -->
            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Employee Photo</label>
                <div class="form-group col-sm-10">
                    <input name="employee_picture" class="form-control" type="file">
                </div>
            </div>
            <!-- end row -->
            <div class="row mb-3">
               <label for="example-text-input" class="col-sm-2 col-form-label">  </label>
               <div class="col-sm-10">
                <img id="showImage" class="rounded avatar-lg" src="{{ asset($employee->employee_picture) }}" alt="Card image cap">
               </div>
           </div>
           <!-- end row -->
        
            <button type="submit" class="btn btn-info waves-effect waves-light">Submit</button>
            </form>
        </div>
    </div>
</div> <!-- end col -->
</div>
 


</div>
</div>

<script type="text/javascript">
    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
                name: {
                    required : true,
                }, 
                 mobile_no: {
                    required : true,
                },
                 email: {
                    required : true,
                },
                 address: {
                    required : true,
                },
            },
            messages :{
                name: {
                    required : 'Please Enter Your Name',
                },
                mobile_no: {
                    required : 'Please Enter Your Mobile Number',
                },
                email: {
                    required : 'Please Enter Your Email',
                },
                address: {
                    required : 'Please Enter Your Address',
                },
            },
            errorElement : 'span', 
            errorPlacement: function (error,element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight : function(element, errorClass, validClass){
                $(element).addClass('is-invalid');
            },
            unhighlight : function(element, errorClass, validClass){
                $(element).removeClass('is-invalid');
            },
        });
    });
    
</script>
<script type="text/javascript">
    
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });

</script>


 
@endsection 
