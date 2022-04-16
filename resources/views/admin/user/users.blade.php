@include('admin.header')

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">ড্যাশবোর্ড</a></li>
                    <li class="breadcrumb-item active">সক্রিয় ব্যবহারকারী</li>
                </ol>
            </div>
            <h4 class="page-title">সক্রিয় ব্যবহারকারী</h4>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-success py-3 text-white">
                <h5 class="card-title mb-0 text-white">সক্রিয় ব্যবহারকারী</h5>
            </div>
            <div id="cardCollpase7" class="collapse show">
                <div class="card">
                    <div class="card-body">
                        <table id="basic-datatable" class="table text-center dt-responsive nowrap w-100">
                            <thead>

                            <tr>
                                <th>#</th>
                                <th>ইউজারনেম</th>
                                <th>নাম (বাংলা)</th>
                                <th>নাম (ইংরেজী)</th>
                                <th>পদবী</th>
                                <th>ই-মেইল</th>
                                <th>মোবাইল নম্বর</th>
                                <th>বিভাগ</th>
                                <th>জেলা</th>
                                <th>উপজেলা</th>
                                <th>কার্যালয়</th>
                                <th>পদক্ষেপ নিন</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($user as $key=>$data)
                            <tr>
                                <td class="numeric_bangla">{{ $key+1 }}</td>
                                <td>{{ $data->username }}</td>
                                <td>{{ $data->name_bangla }}</td>
                                <td>{{ $data->name_english}}</td>
                                <td>{{ $data->designation->designation_name }}</td>
                                <td>{{ $data->email }}</td>
                                <td class="numeric_bangla">{{ $data->mobile }}</td>
                                <td>@if($data->division_id==!NULL)
                                    {{ $data->division->division_name }}
                                        @else
                                    <span>কোন তথ্য পাওয়া যায়নি</span>
                                    @endif
                                </td>
                                <td>@if($data->distric_id==!NULL)
                                        {{ $data->distric->distric_name }}
                                    @else
                                        <span>কোন তথ্য পাওয়া যায়নি</span>
                                    @endif
                                </td>

                                <td>@if($data->upazila_id==!NULL)
                                        {{ $data->upazila->upazila_name }}
                                    @else
                                        <span>কোন তথ্য পাওয়া যায়নি</span>
                                    @endif
                                </td>

                                <td>
                                    @if($data->divisionaloffice)
                                        {{ $data->divisionaloffice->office_name }}
                                    @elseif($data->districoffice)
                                        {{ $data->districoffice->office_name }}
                                    @elseif($data->upazilaoffice)
                                        {{ $data->upazilaoffice->office_name }}
                                    @else
                                        <span>কোন তথ্য পাওয়া যায়নি</span>
                                    @endif
                                </td>

                                <td>
                                    <div class="btn-group dropdown">
                                        <a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-pencil me-2 text-muted font-18 vertical-middle"></i>সম্পাদন করুন</a>
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-check-all me-2 text-muted font-18 vertical-middle"></i>ডিলেট করুন</a>
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-star me-2 font-18 text-muted vertical-middle"></i>নিষ্ক্রিয় করুন</a>
                                        </div>
                                    </div>
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

@include('admin.footer')
