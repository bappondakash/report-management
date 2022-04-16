@include('acland.header')

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('acland.dashboard') }}">ড্যাশবোর্ড</a></li>
                    <li class="breadcrumb-item active">নতুন রিপোর্ট</li>
                </ol>
            </div>
            <h4 class="page-title">নতুন রিপোর্ট</h4>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <!-- Portlet card -->
        <div class="card">
            <div class="card-header bg-success py-3 text-white">
                <h5 class="card-title mb-0 text-white">নতুন রিপোর্ট</h5>
            </div>
            <div class="card-body">

                <form action="{{ route('acland.report.save.post') }}" method="post">
                    {{ csrf_field() }}
                    <div id="basicwizard">
                        <ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">
                            <li class="nav-item">
                                <div class="nav-link rounded-0 pt-2 pb-2">
                                    <i class="fe-alert-circle"></i>
                                    <span class="d-none d-sm-inline">সাধারণ তথ্য</span>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div class="nav-link rounded-0 pt-2 pb-2">
                                    <i class="fe-edit"></i>
                                    <span class="d-none d-sm-inline">বিস্তারিত তথ্য</span>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div class="nav-link rounded-0 pt-2 pb-2">
                                    <i class="fe-eye"></i>
                                    <span class="d-none d-sm-inline">রিপোর্ট প্রিভিউ</span>
                                </div>
                            </li>

                            <li class="nav-item">
                                <div class="nav-link rounded-0 pt-2 pb-2 active">
                                    <i class="mdi mdi-checkbox-marked-circle-outline me-1"></i>
                                    <span class="d-none d-sm-inline">সংরক্ষণ</span>
                                </div>
                            </li>
                        </ul>

                        <div class="tab-content b-0 mb-0 pt-0">
                            <div class="tab-pane active">
                                <div class="row">
                                    <div class="col-12">

                                        <div class="text-center">
                                            <h2 class="mt-0"><i class="fa fa-eye"></i></h2>
                                            <h3 class="mt-0 text-primary">আপনি কি সত্যি রিপোর্টটি সংরক্ষণ করতে চান?</h3>

                                            <p class="w-75 mb-2 mx-auto text-warning">সংরক্ষণ করার আগে প্রদত্ত তথ্যগুলো পুণরায় যাচাই করুন</p>

                                            <div class="mb-3">
                                                <div class="form-check d-inline-block">
                                                    <button type="submit" class="btn btn-success">সংরক্ষণ করুন</button>
                                                </div>
                                            </div>
                                        </div>

                                    </div> <!-- end col -->
                                </div> <!-- end row -->
                            </div>


                            <ul class="list-inline wizard mb-0">
                                <li class="previous list-inline-item disabled">
                                    <a href="{{route('acland.report.detail.preview')}}" class="btn btn-secondary">পেছনে</a>
                                </li>
                                <li class="next list-inline-item float-end">
                                    <button type="submit" class="btn btn-secondary" disabled>এগিয়ে যান</button>
                                </li>
                            </ul>

                        </div> <!-- tab-content -->
                    </div> <!-- end #basicwizard-->
                </form>

            </div>
        </div> <!-- end card-->
    </div><!-- end col -->

</div>
@include('acland.footer')
