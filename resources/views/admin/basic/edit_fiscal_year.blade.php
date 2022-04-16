@include('admin.header')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item">ড্যাশবোর্ড</li>
                    <li class="breadcrumb-item active">অর্থবছর সম্পাদন</li>
                </ol>
            </div>
            <h4 class="page-title">অর্থবছর সম্পাদন</h4>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-lg-12">
        <!-- Portlet card -->
        <div class="card">
            <div class="card-header bg-success py-3 text-white">
                <h5 class="card-title mb-0 text-white">অর্থবছর সম্পাদন</h5>
            </div>
            <div id="cardCollpase7" class="collapse show">
                <div class="card-body">
                    <div class="container">
                        <form action="{{ url('admin/fiscal-years/'.$fiscal_year->id) }}" method="post">
                            @csrf
                            @method('PATCH')
                            <div class="row mt-3">
                                <div class="col-md-2 mr-2">
                                    <label class="col-form-label">অর্থবছর</label>
                                </div>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="name" value="{{ $fiscal_year->name }}">
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
