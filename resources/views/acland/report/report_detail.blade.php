@include('acland.header')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">ড্যাশবোর্ড</a></li>
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

                <form action="{{ route('acland.report.detail.post') }}" method="post">
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
                                <div class="nav-link rounded-0 pt-2 pb-2 active">
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
                                        <div class="table-responsive">
                                            <table class="table table-bordered" style="font-size: 20">
                                                <tr>
                                                    <td style="text-align:center">১</td>
                                                    <td>গত মাস পর্যন্ত অনিষ্পন্নকৃত রেন্ট সার্টফিকেট মামলা সংখ্যা</td>
                                                    <td><input type="number" class="form-control input_bangla" name="column_one" value="{{ $report->column_one ?? '' }}"></td>
                                                </tr>

                                                <tr>
                                                    <td style="text-align:center">২</td>
                                                    <td>চলতি মাসে দায়েরকৃত রেন্ট সার্টিফিকেট মামলা সংখ্যা</td>
                                                    <td><input type="number" class="form-control input_bangla" name="column_two" value="{{ $report->column_two ?? '' }}"></td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align:center">৩</td>
                                                    <td>গত মাস পর্যন্ত অনাদায়ী টাকার পরিমাণ</td>
                                                    <td><input type="number" class="form-control input_bangla" name="column_three" value="{{ $report->column_three ?? '' }}"></td>
                                                </tr>

                                                <tr>
                                                    <td style="text-align:center">৪</td>
                                                    <td>চলতি মাসে দায়েরকৃত মামলার দাবির টাকার পরিমাণ</td>
                                                    <td><input type="number" class="form-control input_bangla" name="column_four" value="{{ $report->column_four ?? '' }}"></td>
                                                </tr>

                                                <tr>
                                                    <td style="text-align:center">৫</td>
                                                    <td>চলতি মাসে নিষ্পত্তিকৃত রেন্ট সার্টিফিকেট মামলা সংখ্যা</td>
                                                    <td><input type="number" class="form-control input_bangla" name="column_five" value="{{ $report->column_five ?? '' }}"></td>
                                                </tr>

                                                <tr>
                                                    <td style="text-align:center">৬</td>
                                                    <td>আদায়কৃত টাকার পরিমাণ</td>
                                                    <td><input type="number" class="form-control input_bangla" name="column_six" value="{{ $report->column_six ?? '' }}"></td>
                                                </tr>

                                                <tr>
                                                    <td style="text-align:center">৭</td>
                                                    <td>জুলাই হতে অক্টোবর মাস পর্যন্ত নিষ্পত্তিকৃত পুঞ্জিভূত রেন্ট সার্টিফিকেট মামলার সংখ্যা</td>
                                                    <td><input type="number" class="form-control input_bangla" name="column_seven" value="{{ $report->column_seven ?? '' }}"></td>
                                                </tr>

                                                <tr>
                                                    <td style="text-align:center">৮</td>
                                                    <td>জুলাই হতে অক্টোবর মাস পর্যন্ত পুঞ্জিভূত আদায়কৃত টাকার পরিমাণ</td>
                                                    <td><input type="number" class="form-control input_bangla" name="column_eight" value="{{ $report->column_eight ?? '' }}"></td>
                                                </tr>

                                                <tr>
                                                    <td style="text-align:center">৯</td>
                                                    <td>মন্তব্য</td>
                                                    <td><input type="text" class="form-control input_bangla" name="column_nine" value="{{ $report->column_nine ?? '' }}"></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div> <!-- end col -->
                                </div> <!-- end row -->
                            </div>

                            <ul class="list-inline wizard mb-0">
                                <li class="previous list-inline-item disabled">
                                    <a href="{{ route('acland.report.initial') }}" class="btn btn-secondary">পেছনে</a>
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
