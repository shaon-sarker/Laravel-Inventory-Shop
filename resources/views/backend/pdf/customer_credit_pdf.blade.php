@extends('admin.admin_master')
@section('admin')
<div class="page-content">
   <div class="container-fluid">
      <!-- start page title -->
      <div class="row">
         <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
               <h4 class="mb-sm-0">Customer Credit Report</h4>
               <div class="page-title-right">
                  <ol class="breadcrumb m-0">
                     <li class="breadcrumb-item"><a href="javascript: void(0);"> </a></li>
                     <li class="breadcrumb-item active">Customer Credit Report</li>
                  </ol>
               </div>
            </div>
         </div>
      </div>
      <!-- end page title -->
      <div class="row">
         <div class="col-12">
            <div class="card">
               <div class="card-body">
                  <div class="row">
                     <div class="col-12">
                        <div class="invoice-title">
                           <h3>
                              <img src="{{ asset('backend/assets/images/logo-sm.png') }}" alt="logo" height="24"/> Inventory Shop
                           </h3>
                        </div>
                        <hr>
                        <div class="row">
                           <div class="col-6 mt-4">
                              <address>
                                 <strong>Inventory Shop:</strong><br>
                                 Dhaka Bangladesh<br>
                                 shaonsarker92@gmail.com
                              </address>
                           </div>
                           <div class="col-6 mt-4 text-end">
                              <address>
                              </address>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-12">
                        <div>
                           <div class="p-2">
                           </div>
                           <div class="">
                              <div class="table-responsive">
                                 <table class="table">
                                    <thead>
                                       <tr>
                                          <td><strong>Sl </strong></td>
                                          <td class="text-center"><strong>Customer Name </strong></td>
                                          <td class="text-center"><strong>Invoice No  </strong>
                                          </td>
                                          <td class="text-center"><strong>Date</strong>
                                          </td>
                                          <td class="text-center"><strong>Due Amount  </strong>
                                          </td>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       @php
                                          $total_due = 0; // Initialize $total_due before using it
                                       @endphp
                                       @foreach($allData as $key => $item)
                                          <tr>
                                             <td class="text-center"> {{ $key+1 }} </td>
                                             <td class="text-center"> {{ isset($item['customer']['name']) ? $item['customer']['name'] : 'N/A' }} </td>
                                             <td class="text-center"> {{ isset($item['invoice']['invoice_no']) ? '#' . $item['invoice']['invoice_no'] : 'N/A' }} </td>
                                             <td class="text-center"> {{ isset($item['invoice']['date']) ? date('d-m-Y', strtotime($item['invoice']['date'])) : 'N/A' }} </td>
                                             <td class="text-center"> {{ isset($item->due_amount) ? $item->due_amount : 'N/A' }} </td>
                                          </tr>
                                          @php
                                             // Check if $item->due_amount is set and not null before adding it to $total_due
                                             if(isset($item->due_amount)) {
                                                   $total_due += $item->due_amount;
                                             }
                                          @endphp
                                       @endforeach
                                       <tr>
                                          <td class="no-line"></td>
                                          <td class="no-line"></td>
                                          <td class="no-line"></td>
                                          <td class="no-line text-center">
                                             <strong>Grand Due Amount</strong>
                                          </td>
                                          <td class="no-line text-end">
                                             <h4 class="m-0">${{ $total_due}}</h4>
                                          </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                              @php
                              $date = new DateTime('now', new DateTimeZone('Asia/Dhaka')); 
                              @endphp         
                              <i>Printing Time : {{ $date->format('F j, Y, g:i a') }}</i>   
                              <div class="d-print-none">
                                 <div class="float-end">
                                    <a href="javascript:window.print()" class="btn btn-success waves-effect waves-light"><i class="fa fa-print"></i></a>
                                    <a href="#" class="btn btn-primary waves-effect waves-light ms-2">Download</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- end row -->
               </div>
            </div>
         </div>
         <!-- end col -->
      </div>
      <!-- end row -->
   </div>
   <!-- container-fluid -->
</div>
@endsection
