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

                <form action="{{ route('acland.report.detail.preview.post') }}" method="post">
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
                                <div class="nav-link rounded-0 pt-2 pb-2 active">
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
                            <div class="tab-pane active" id="basictab1">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="table-responsive">
                                            <table class="table table-bordered" style="font-size: 20">
                                                <tr>
                                                    <td colspan="2" class="text-center">রিপোর্টের ধরন</td>
                                                    <td>{{$report->report_type}}</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" class="text-center">অর্থবছর</td>
                                                    <td>{{$report->fiscal_year}}</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" class="text-center">মাস</td>
                                                    <td>{{$report->month}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align:center">১</td>
                                                    <td>গত মাস পর্যন্ত অনিষ্পন্নকৃত রেন্ট সার্টফিকেট মামলা সংখ্যা</td>
                                                    <td class="input_bangla"><b>{{ $report->column_one }}</b></td>
                                                </tr>

                                                <tr>
                                                    <td style="text-align:center">২</td>
                                                    <td>চলতি মাসে দায়েরকৃত রেন্ট সার্টিফিকেট মামলা সংখ্যা</td>
                                                    <td class="input_bangla"><b>{{ $report->column_two }}</b></td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align:center">৩</td>
                                                    <td>গত মাস পর্যন্ত অনাদায়ী টাকার পরিমাণ</td>
                                                    <td class="input_bangla"><b>{{ $report->column_three }}</b></td>
                                                </tr>

                                                <tr>
                                                    <td style="text-align:center">৪</td>
                                                    <td>চলতি মাসে দায়েরকৃত মামলার দাবির টাকার পরিমাণ</td>
                                                    <td class="input_bangla"><b>{{ $report->column_four }}</b></td>
                                                </tr>

                                                <tr>
                                                    <td style="text-align:center">৫</td>
                                                    <td>মোট রেন্ট সার্টিফিকেট মামলা সংখ্যা (১+২)</td>
                                                    <td class="input_bangla">{{ $report->column_one + $report->column_two}}</td>
                                                </tr>

                                                <tr>
                                                    <td style="text-align:center">৬</td>
                                                    <td>মোট রেন্ট সার্টিফিকেট মামলার দাবির টাকার পরিমাণ (৩+৪)</td>
                                                    <td class="input_bangla"><b>{{ $report->column_three + $report->column_four}}</b></td>
                                                </tr>

                                                <tr>
                                                    <td style="text-align:center">৭</td>
                                                    <td>চলতি মাসে নিষ্পত্তিকৃত রেন্ট সার্টিফিকেট মামলা সংখ্যা</td>
                                                    <td class="input_bangla">{{ $report->column_five }}</td>
                                                </tr>

                                                <tr>
                                                    <td style="text-align:center">৮</td>
                                                    <td>আদায়কৃত টাকার পরিমাণ</td>
                                                    <td class="input_bangla">{{ $report->column_six }}</td>
                                                </tr>

                                                <tr>
                                                    <td style="text-align:center">৯</td>
                                                    <td>জুলাই হতে
                                                        @switch($report->month)
                                                            @case('জানুয়ারি')
                                                            ডিসেম্বর
                                                        @break
                                                            @case('ফেব্রুয়ারি')
                                                            জানুয়ারি
                                                            @break
                                                            @case('মার্চ')
                                                            ফেব্রুয়ারি
                                                            @break
                                                            @case('এপ্রিল')
                                                            মার্চ
                                                            @break
                                                            @case('মে')
                                                            এপ্রিল
                                                            @break
                                                            @case('জুন')
                                                            মে
                                                            @break
                                                            @case('জুলাই')
                                                            জুন
                                                            @break
                                                            @case('আগষ্ট')
                                                            জুলাই
                                                            @break
                                                            @case('সেপ্টেম্বর')
                                                            আগষ্ট
                                                            @break
                                                        @endswitch

                                                        মাস পর্যন্ত নিষ্পত্তিকৃত পুঞ্জিভূত রেন্ট সার্টিফিকেট মামলার সংখ্যা</td>
                                                    <td class="input_bangla">{{ $report->column_seven }}</td>
                                                </tr>

                                                <tr>
                                                    <td style="text-align:center">১০</td>
                                                    <td>জুলাই হতে
                                                        @switch($report->month)
                                                            @case('জানুয়ারি')
                                                            জানুয়ারি
                                                            @break
                                                            @case('ফেব্রুয়ারি')
                                                            ফেব্রুয়ারি
                                                            @break
                                                            @case('মার্চ')
                                                            মার্চ
                                                            @break
                                                            @case('এপ্রিল')
                                                            এপ্রিল
                                                            @break
                                                            @case('মে')
                                                            মে
                                                            @break
                                                            @case('জুন')
                                                            জুন
                                                            @break
                                                            @case('জুলাই')
                                                            জুলাই
                                                            @break
                                                            @case('আগষ্ট')
                                                            আগষ্ট
                                                            @break
                                                            @case('সেপ্টেম্বর')
                                                            সেপ্টেম্বর
                                                            @break
                                                        @endswitch
                                                        মাস পর্যন্ত নিষ্পত্তিকৃত পুঞ্জিভূত রেন্ট সার্টিফিকেট মামলার সংখ্যা (৭+৯)</td>
                                                    <td class="input_bangla">{{ $report->column_five + $report->column_seven }}</td>
                                                </tr>

                                                <tr>
                                                    <td style="text-align:center">১১</td>
                                                    <td>জুলাই হতে
                                                        @switch($report->month)
                                                            @case('জানুয়ারি')
                                                            ডিসেম্বর
                                                            @break
                                                            @case('ফেব্রুয়ারি')
                                                            জানুয়ারি
                                                            @break
                                                            @case('মার্চ')
                                                            ফেব্রুয়ারি
                                                            @break
                                                            @case('এপ্রিল')
                                                            মার্চ
                                                            @break
                                                            @case('মে')
                                                            এপ্রিল
                                                            @break
                                                            @case('জুন')
                                                            মে
                                                            @break
                                                            @case('জুলাই')
                                                            জুন
                                                            @break
                                                            @case('আগষ্ট')
                                                            জুলাই
                                                            @break
                                                            @case('সেপ্টেম্বর')
                                                            আগষ্ট
                                                            @break
                                                        @endswitch
                                                        মাস পর্যন্ত পুঞ্জিভূত আদায়কৃত টাকার পরিমাণ</td>
                                                    <td class="input_bangla">{{ $report->column_eight }}</td>
                                                </tr>

                                                <tr>
                                                    <td style="text-align:center">১২</td>
                                                    <td>জুলাই হতে
                                                        @switch($report->month)
                                                            @case('জানুয়ারি')
                                                            জানুয়ারি
                                                            @break
                                                            @case('ফেব্রুয়ারি')
                                                            ফেব্রুয়ারি
                                                            @break
                                                            @case('মার্চ')
                                                            মার্চ
                                                            @break
                                                            @case('এপ্রিল')
                                                            এপ্রিল
                                                            @break
                                                            @case('মে')
                                                            মে
                                                            @break
                                                            @case('জুন')
                                                            জুন
                                                            @break
                                                            @case('জুলাই')
                                                            জুলাই
                                                            @break
                                                            @case('আগষ্ট')
                                                            আগষ্ট
                                                            @break
                                                            @case('সেপ্টেম্বর')
                                                            সেপ্টেম্বর
                                                            @break
                                                        @endswitch
                                                        মাস পর্যন্ত পুঞ্জিভূত আদায়কৃত টাকার পরিমাণ (৮+১১)</td>
                                                    <td class="input_bangla">{{ $report->column_six + $report->column_eight }}</td>
                                                </tr>

                                                <tr>
                                                    <td style="text-align:center">১৩</td>
                                                    <td>মোট অনাদায়ী টাকার পরিমাণ (৬-৮)</td>
                                                    <td class="input_bangla">{{ ($report->column_three + $report->column_four)-$report->column_six }}</td>
                                                </tr>

                                                <tr>
                                                    <td style="text-align:center">৯</td>
                                                    <td>মন্তব্য</td>
                                                    <td class="input_bangla">{{ $report->column_nine }}</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div> <!-- end col -->
                                </div> <!-- end row -->
                            </div>

                            <ul class="list-inline wizard mb-0">
                                <li class="previous list-inline-item disabled">
                                    <a href="{{ route('acland.report.detail') }}" class="btn btn-secondary">পেছনে</a>
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
