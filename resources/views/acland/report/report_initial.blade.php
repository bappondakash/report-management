@include('admin.header')
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

                <form action="{{ route('acland.report.initial.post') }}" method="post">
                    {{ csrf_field() }}
                    <div id="basicwizard">
                        <ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">
                            <li class="nav-item">
                                <div class="nav-link rounded-0 pt-2 pb-2 active">
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
                                <div class="nav-link rounded-0 pt-2 pb-2">
                                    <i class="mdi mdi-checkbox-marked-circle-outline me-1"></i>
                                    <span class="d-none d-sm-inline">সংরক্ষণ</span>
                                </div>
                            </li>
                        </ul>

                        <div class="tab-content b-0 mb-0 pt-0">
                            <div class="tab-pane active">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="container">
                                            <div class="row mb-3">
                                                <label class="col-md-2 col-form-label" for="userName">রিপোর্টের ধরণ</label>
                                                <div class="col-md-9">
                                                    <select name="report_type" id="report_type" class="form-control">
                                                        <option>নির্বাচন করুন</option>
                                                        @foreach($report_type as $data)
                                                            <option {{{ (isset($report->report_type) && $report->report_type == $data->id) ? "selected=\"selected\"" : "" }}}>{{$data->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-md-2 col-form-label" for="password"> অর্থবছর</label>
                                                <div class="col-md-9">
                                                    <select name="fiscal_year" id="fiscal_year" class="form-control">
                                                        <option>নির্বাচন করুন</option>
                                                        @foreach($fiscal_year as $data)
                                                            <option {{{ (isset($report->fiscal_year) && $report->fiscal_year == $data->id) ? "selected=\"selected\"" : "" }}}>{{$data->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label class="col-md-2 col-form-label" for="confirm">মাস</label>
                                                <div class="col-md-9">
                                                    <select name="month" id="month" class="form-control">
                                                        <option>নির্বাচন করুন</option>
                                                        @foreach($month as $data)
                                                            <option {{{ (isset($report->month) && $report->month == $data->id) ? "selected=\"selected\"" : "" }}}>{{$data->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end col -->
                                </div> <!-- end row -->
                            </div>

                            <ul class="list-inline wizard mb-0">
                                <li class="previous list-inline-item disabled">
                                    <a href="javascript: void(0);" class="btn btn-secondary" disabled="">পেছনে</a>
                                </li>
                                <li class="next list-inline-item float-end">
                                    <button type="submit" class="btn btn-secondary">এগিয়ে যান</button>
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
