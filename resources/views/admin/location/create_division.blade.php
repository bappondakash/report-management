@include('admin.header')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item">ড্যাশবোর্ড</li>
                    <li class="breadcrumb-item active">নতুন বিভাগ</li>
                </ol>
            </div>
            <h4 class="page-title">নতুন বিভাগ</h4>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-lg-12">
        <!-- Portlet card -->
        <div class="card">
            <div class="card-header bg-success py-3 text-white">
                <h5 class="card-title mb-0 text-white">নতুন বিভাগ</h5>
            </div>
            <div id="cardCollpase7" class="collapse show">
                <div class="card-body">
                    <div class="container">
                        <form action="{{ route('admin.divisions.store') }}" method="post">
                            @csrf
                            <div class="row mt-3">
                                <div class="col-md-2">
                                    <label class="col-form-label">বিভাগের নাম</label>
                                </div>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="division_name">
                                </div>

                                <p class="text-center mt-4">
                                    <button type="submit" class="btn btn-success">সংরক্ষণ করুন</button>
                                </p>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div> <!-- end card-->
    </div><!-- end col -->
</div>

@include('admin.footer')
