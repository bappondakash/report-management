@include('acland.header')

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('acland.dashboard') }}">ড্যাশবোর্ড</a></li>
                    <li class="breadcrumb-item active">অপেক্ষমান রিপোর্টসমূহ</li>
                </ol>
            </div>
            <h4 class="page-title">অপেক্ষমান রিপোর্টসমূহ</h4>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-success py-3 text-white">
                <h5 class="card-title mb-0 text-white">অপেক্ষমান রিপোর্টসমূহ</h5>
            </div>
            <div id="cardCollpase7" class="collapse show">
                <div class="card">
                    <div class="card-body">
                        <table id="basic-datatable" class="table dt-responsive w-100 text-center">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>রিপোর্টের ধরণ</th>
                                <th>অর্থবছর</th>
                                <th>মাস</th>
                                <th>তৈরীর তারিখ</th>
                                <th>স্ট্যাটাস</th>
                                <th>বর্তমান ডেস্ক</th>
                                <th>পদক্ষেপ নিন</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($report as $key=>$data)
                            <tr>
                                <td class="input_bangla">{{ $key+1 }}</td>
                                <td>{{ $data->report_type }}</td>
                                <td>{{ $data->fiscal_year }}</td>
                                <td>{{ $data->month }}</td>
                                <td>{{ $data->created_at }}</td>
                                <td>
                                    @if($data->status == 0)
                                    <span class="badge bg-warning text-secondary">অপেক্ষমান</span>
                                    @endif
                                </td>
                                <td>
                                    @if($data->desk == 20)
                                        <span>সহকারী কমিশনার (ভূমি)</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="javascript: void(0);" class="btn btn-xs btn-primary" data-bs-toggle="modal" data-bs-target="#full-width-modal" title="বিস্তারিত দেখুন"><i class="fa fa-eye"></i></a>
                                    <a href="javascript: void(0);" class="btn btn-xs btn-secondary" title="সম্পাদন করুন"><i class="fas fa-edit"></i></a>
                                    <a href="javascript: void(0);" class="btn btn-xs btn-success" title="প্রেরণ করুন"><i class="fas fa-location-arrow"></i></a>
                                    <a href="javascript: void(0);" class="btn btn-xs btn-danger" title="ডিলেট করুন"><i class="fa fa-trash"></i></a>

                                    <!-- Full width modal content -->
                                    <div id="full-width-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="fullWidthModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-full-width">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="fullWidthModalLabel">বিস্তারিত</h4>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="col-lg-12">
                                                        <div class="card">
                                                            <div class="card-body" style="color: #000000;">
                                                                <p style="text-align: center">গণপ্রজাতন্ত্রী বাংলাদেশ সরকার <br> @if(Auth::user()->office_id == NULL) @else {{Auth::user()->upazilaoffice->office_name}} @endif <br>

                                                                    @if(Auth::user()->upazilaoffice->office_website == Null)
                                                                </p>
                                                                @else
                                                                    <small>{{Auth::user()->upazilaoffice->office_website}}</small></p>
                                                                @endif
                                                                <br>
                                                                <p class="text-center">{{$data->fiscal_year}} অর্থবছরের {{$data->report_type}}র বিবরণী</p>
                                                                <p class="text-center">মাসের নামঃ {{$data->month}}/২০২২</p>
                                                                <table class="table table-responsive dt-responsive" align="center" cellspacing="0" cellpadding="2" style="color: #000000;">
                                                                    <tr>
                                                                        <td style="text-align: center; border: 1px solid #000000;">গত মাস পর্যন্ত অনিষ্পত্তিকৃত রেন্ট সার্টিফিকেট মামলা সংখ্যা</td>
                                                                        <td style="text-align: center; border: 1px solid #000000;">চলতি মাসে দায়েরকৃত রেন্ট সার্টিফিকেট মামলা সংখ্যা</td>
                                                                        <td style="text-align: center; border: 1px solid #000000;">গত মাস পর্যন্ত অনাদায়ী টাকার পরিমাণ</td>
                                                                        <td style="text-align: center; border: 1px solid #000000;">চলতি মাসে দায়েরকৃত মামলার দাবির টাকার পরিমাণ</td>
                                                                        <td style="text-align: center; border: 1px solid #000000;">মোট রেন্ট সার্টিফিকেট মামলার সংখ্যা <br>
                                                                            <hr>(১+২)
                                                                        </td>
                                                                        <td style="text-align: center; border: 1px solid #000000;">মোট রেন্ট সার্টিফিকেট মামলার টাকার পরিমাণ <br>
                                                                            <hr>(৩+৪)
                                                                        </td>
                                                                        <td style="text-align: center; border: 1px solid #000000;">চলতি মাসে নিষ্পত্তিকৃত রেন্ট সার্টিফিকেট মামলা সংখ্যা
                                                                        </td>
                                                                        <td style="text-align: center; border: 1px solid #000000;">আদায়কৃত টাকার পরিমাণ</td>
                                                                        <td style="text-align: center; border: 1px solid #000000;">জুলাই হতে অক্টোবর মাস পর্যন্ত নিষ্পত্তিকৃত পুঞ্জিভূত রেন্ট সার্টিফিকেট মামলার সংখ্যা</td>
                                                                        <td style="text-align: center; border: 1px solid #000000;">জুলাই হতে নভেম্বর মাস পর্যন্ত নিষ্পত্তিকৃত পুঞ্জিভূত রেন্ট সার্টিফিকেট মামলার সংখ্যা</td>
                                                                        <td style="text-align: center; border: 1px solid #000000;">জুলাই হতে অক্টোবর মাস পর্যন্ত পুঞ্জিভূত আদায়কৃত টাকার পরিমাণ</td>
                                                                        <td style="text-align: center; border: 1px solid #000000;">জুলাই হতে নভেম্বর মাস পর্যন্ত পুঞ্জিভূত আদায়কৃত টাকার পরিমাণ</td>
                                                                        <td style="text-align: center; border: 1px solid #000000;">মোট অনিষ্পত্তিকৃত রেন্ট সার্টিফিকেট মামলার সংখ্যা <br>
                                                                            <hr>(৫-৭)
                                                                        </td>
                                                                        <td style="text-align: center; border: 1px solid #000000;">মোট অনাদায়ী টাকার পরিমাণ <br>
                                                                            <hr>(৬-৮)
                                                                        </td>
                                                                        <td style="text-align: center; border: 1px solid #000000;">মন্তব্য</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="text-align: center; border: 1px solid #000000;">১</td>
                                                                        <td style="text-align: center; border: 1px solid #000000;">২</td>
                                                                        <td style="text-align: center; border: 1px solid #000000;">৩</td>
                                                                        <td style="text-align: center; border: 1px solid #000000;">৪</td>
                                                                        <td style="text-align: center; border: 1px solid #000000;">৫</td>
                                                                        <td style="text-align: center; border: 1px solid #000000;">৬</td>
                                                                        <td style="text-align: center; border: 1px solid #000000;">৭</td>
                                                                        <td style="text-align: center; border: 1px solid #000000;">৮</td>
                                                                        <td style="text-align: center; border: 1px solid #000000;">৯</td>
                                                                        <td style="text-align: center; border: 1px solid #000000;">১০ <br>
                                                                            <hr>(৭+৯)
                                                                        </td>
                                                                        <td style="text-align: center; border: 1px solid #000000;">১১</td>
                                                                        <td style="text-align: center; border: 1px solid #000000;">১২ <br>
                                                                            <hr>(৮+১১)
                                                                        </td>
                                                                        <td style="text-align: center; border: 1px solid #000000;">১৩</td>
                                                                        <td style="text-align: center; border: 1px solid #000000;">১৪</td>
                                                                        <td style="text-align: center; border: 1px solid #000000;">১৫</td>
                                                                    </tr>
                                                                        <tr>
                                                                            <td style="text-align: center; border: 1px solid #000000;" class="numeric_bangla">{{$data->column_one}}</td>
                                                                            <td style="text-align: center; border: 1px solid #000000;" class="numeric_bangla">{{$data->column_two}}</td>
                                                                            <td style="text-align: center; border: 1px solid #000000;" class="numeric_bangla">{{$data->column_three}}</td>
                                                                            <td style="text-align: center; border: 1px solid #000000;" class="numeric_bangla">{{$data->column_four}}</td>
                                                                            <td style="text-align: center; border: 1px solid #000000;" class="numeric_bangla">{{$data->column_five}}</td>
                                                                            <td style="text-align: center; border: 1px solid #000000;" class="numeric_bangla">{{$data->column_six}}</td>
                                                                            <td style="text-align: center; border: 1px solid #000000;" class="numeric_bangla">{{$data->column_seven}}</td>
                                                                            <td style="text-align: center; border: 1px solid #000000;" class="numeric_bangla">{{$data->column_eight}}</td>
                                                                            <td style="text-align: center; border: 1px solid #000000;" class="numeric_bangla">{{$data->column_nine}}</td>
                                                                            <td style="text-align: center; border: 1px solid #000000;" class="numeric_bangla">{{$data->column_ten}}</td>
                                                                            <td style="text-align: center; border: 1px solid #000000;" class="numeric_bangla">{{$data->column_eleven}}</td>
                                                                            <td style="text-align: center; border: 1px solid #000000;" class="numeric_bangla">{{$data->column_twelve}}</td>
                                                                            <td style="text-align: center; border: 1px solid #000000;" class="numeric_bangla">{{$data->column_thirteen}}</td>
                                                                            <td style="text-align: center; border: 1px solid #000000;" class="numeric_bangla">{{$data->column_fourteen}}</td>
                                                                            <td style="text-align: center; border: 1px solid #000000;" class="numeric_bangla">{{$data->column_fifteen}}</td>

                                                                        </tr>
                                                                </table>
                                                                <br>
                                                                <div style="float: right; margin-right: 10%; margin-bottom: 2%">@if(Auth::user()->signature == NULL) @else <img src="/{{Auth::user()->signature}}" alt="" class="img-responsive" height="80px" width="140px"> @endif

                                                                    <div class="text-center">{{Auth::user()->name_bangla}}<br>{{Auth::user()->designation->designation_name}} <br>{{Auth::user()->upazilaoffice->office_name}}</div>
                                                                </div>
                                                                <br>
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('acland.footer')
