@include('admin.header')
 <div class="row">
     <div class="col-12">
         <div class="page-title-box">
             <div class="page-title-right">
                 <ol class="breadcrumb m-0">
                     <li class="breadcrumb-item">ড্যাশবোর্ড</li>
                     <li class="breadcrumb-item active">নতুন পদবী</li>
                 </ol>
             </div>
             <h4 class="page-title">ড্যাশবোর্ড</h4>
         </div>
     </div>
 </div>


 <div class="row">
     <div class="col-lg-12">
         <!-- Portlet card -->
         <div class="card">
             <div class="card-header bg-success py-3 text-white">
                 <h5 class="card-title mb-0 text-white">নতুন পদবী</h5>
             </div>
             <div id="cardCollpase7" class="collapse show">
                 <div class="card-body mt-3">
                     <div class="container">
                         <form action="{{ route('admin.designations.store') }}" method="POST">
                            @csrf
                         <div class="row">
                             <div class="col-md-1">
                                 <label class="col-form-label">পদবীর নাম</label>
                             </div>
                                <div class="col-md-5">
                                 <input type="text" class="form-control" name="designation_name">
                             </div>
                             
                             <div class="col-md-1">
                                 <label class="col-form-label">লেভেল</label>
                             </div>
                                <div class="col-md-5">
                                 <input type="text" class="form-control" name="role_level">
                             </div>
                         </div>
                         
                         <p class="text-center">
                             <button type="submit" class="btn btn-success mt-3">সংরক্ষণ করুন</button>
                         </p>
                         
                         
                     </form>
                     </div>
                 </div>
             </div>
         </div> <!-- end card-->
     </div><!-- end col -->
 </div>

@include('admin.footer')