@extends('admin.admin_master')
@section('admin')
<div class="page-content">
<div class="container-fluid">
   <!-- start page title -->
   <div class="row">
      <div class="col-12">
         <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Dashboard</h4>
         </div>
      </div>
   </div>
   <!-- end page title -->
   <div class="row">
      <div class="col-xl-3 col-md-6">
         <div class="card">
            <div class="card-body">
               <div class="d-flex">
                  <div class="flex-grow-1">
                     <p class="text-truncate font-size-14 mb-2">Total Employee</p>
                     <h4 class="mb-2">{{ $total_employee }}</h4>
                     {{-- <p class="text-muted mb-0"><span class="text-success fw-bold font-size-12 me-2"><i class="ri-arrow-right-up-line me-1 align-middle"></i>9.23%</span>from previous period</p> --}}
                  </div>
                  <div class="avatar-sm">
                     <span class="avatar-title bg-light text-primary rounded-3">
                     <i class="ri-user-3-line font-size-24"></i>  
                     </span>
                  </div>
               </div>
            </div>
            <!-- end cardbody -->
         </div>
         <!-- end card -->
      </div>
      <!-- end col -->
      <div class="col-xl-3 col-md-6">
         <div class="card">
            <div class="card-body">
               <div class="d-flex">
                  <div class="flex-grow-1">
                     <p class="text-truncate font-size-14 mb-2">Total Supplier</p>
                     <h4 class="mb-2">{{ $total_suplier }}</h4>
                  </div>
                  <div class="avatar-sm">
                     <span class="avatar-title bg-light text-success rounded-3">
                     <i class="ri-user-3-line font-size-24"></i>  
                     </span>
                  </div>
               </div>
            </div>
            <!-- end cardbody -->
         </div>
         <!-- end card -->
      </div>
      <!-- end col -->
      <div class="col-xl-3 col-md-6">
         <div class="card">
            <div class="card-body">
               <div class="d-flex">
                  <div class="flex-grow-1">
                     <p class="text-truncate font-size-14 mb-2">Total Customer</p>
                     <h4 class="mb-2">{{ $total_customer }}</h4>
                  </div>
                  <div class="avatar-sm">
                     <span class="avatar-title bg-light text-primary rounded-3">
                     <i class="ri-user-3-line font-size-24"></i>  
                     </span>
                  </div>
               </div>
            </div>
            <!-- end cardbody -->
         </div>
         <!-- end card -->
      </div>
      <!-- end col -->
      <div class="col-xl-3 col-md-6">
         <div class="card">
            <div class="card-body">
               <div class="d-flex">
                  <div class="flex-grow-1">
                     <p class="text-truncate font-size-14 mb-2">Total Product</p>
                     <h4 class="mb-2">{{ $total_product }}</h4>
                  </div>
                  <div class="avatar-sm">
                     <span class="avatar-title bg-light text-success rounded-3">
                     <i class="mdi mdi-currency-btc font-size-24"></i>  
                     </span>
                  </div>
               </div>
            </div>
            <!-- end cardbody -->
         </div>
         <!-- end card -->
      </div>
      <!-- end col -->
   </div>

   <div class="row">
    <div class="col-xl-3 col-md-6">
       <div class="card">
          <div class="card-body">
             <div class="d-flex">
                <div class="flex-grow-1">
                   <p class="text-truncate font-size-14 mb-2">Total Purchase</p>
                   <h4 class="mb-2">{{ $total_purchase }}</h4>
                </div>
                <div class="avatar-sm">
                   <span class="avatar-title bg-light text-primary rounded-3">
                   <i class="mdi mdi-currency-usd font-size-24"></i>  
                   </span>
                </div>
             </div>
          </div>
          <!-- end cardbody -->
       </div>
       <!-- end card -->
    </div>
    <!-- end col -->
    <div class="col-xl-3 col-md-6">
       <div class="card">
          <div class="card-body">
             <div class="d-flex">
                <div class="flex-grow-1">
                   <p class="text-truncate font-size-14 mb-2">Today Purchase</p>
                   <h4 class="mb-2">{{ $today_total_purchae }}</h4>
                </div>
                <div class="avatar-sm">
                   <span class="avatar-title bg-light text-success rounded-3">
                   <i class="mdi mdi-currency-usd font-size-24"></i>  
                   </span>
                </div>
             </div>
          </div>
          <!-- end cardbody -->
       </div>
       <!-- end card -->
    </div>
    <!-- end col -->
    <div class="col-xl-3 col-md-6">
       <div class="card">
          <div class="card-body">
             <div class="d-flex">
                <div class="flex-grow-1">
                   <p class="text-truncate font-size-14 mb-2">Monthly Purchase</p>
                   <h4 class="mb-2">{{ $monthly_total_purchae }}</h4>
                </div>
                <div class="avatar-sm">
                   <span class="avatar-title bg-light text-primary rounded-3">
                   <i class="mdi mdi-currency-usd font-size-24"></i>  
                   </span>
                </div>
             </div>
          </div>
          <!-- end cardbody -->
       </div>
       <!-- end card -->
    </div>
    <!-- end col -->
    <div class="col-xl-3 col-md-6">
       <div class="card">
          <div class="card-body">
             <div class="d-flex">
                <div class="flex-grow-1">
                   <p class="text-truncate font-size-14 mb-2">Yearly Purchase</p>
                   <h4 class="mb-2">{{ $yearly_total_purchae }}</h4>
                </div>
                <div class="avatar-sm">
                   <span class="avatar-title bg-light text-success rounded-3">
                   <i class="mdi mdi-currency-usd font-size-24"></i>  
                   </span>
                </div>
             </div>
          </div>
          <!-- end cardbody -->
       </div>
       <!-- end card -->
    </div>
    <!-- end col -->
 </div>
   <!-- end row -->
</div>
@endsection
