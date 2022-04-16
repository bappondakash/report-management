@include('admin.header')

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">ড্যাশবোর্ড</a></li>
                    <li class="breadcrumb-item active">রিপোর্ট টাইপ সম্পাদন</li>
                </ol>
            </div>
            <h4 class="page-title">রিপোর্ট টাইপ সম্পাদন</h4>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-success py-3 text-white">
                <h5 class="card-title mb-0 text-white">রিপোর্ট টাইপ সম্পাদন</h5>
            </div>
            <div id="cardCollpase7" class="collapse show">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ url('admin/report-type/'.$r_type->id) }}" method="post">
                            @csrf
                            @method('PATCH')
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-2">
                                        <label class="col-form-label">রিপোর্টের ধরণের নাম</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="name" value="{{ $r_type->name }}">
                                    </div>

                                    <div class="col-md-2">
                                        <button type="submit" class="btn btn-success">সংরক্ষণ করুন</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('admin.footer')
