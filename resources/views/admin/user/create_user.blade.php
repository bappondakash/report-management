@include('admin.header')

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">ড্যাশবোর্ড</a></li>
                    <li class="breadcrumb-item active">নতুন ব্যবহারকারী</li>
                </ol>
            </div>
            <h4 class="page-title">নতুন ব্যবহারকারী</h4>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-success py-3 text-white">
                <h5 class="card-title mb-0 text-white">নতুন ব্যবহারকারী</h5>
            </div>
            <div id="cardCollpase7" class="collapse show">
                <div class="card">
                    <div class="card-body">
                        <div class="alert alert-warning">
                            <div class="text-center">পদবী অনুযায়ী বিভাগ, জেলা, উপজেলা, অফিস নির্বাচন করা প্রযোজ্য</span></div><span>
                        </div>
                        <form action="{{ route('admin.create.user.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="col-form-label">বিভাগ</label>
                                    <select name="division_id" id="division-dd" class="form-control">
                                        <option>নির্বাচন করুন</option>
                                        @foreach($division as $data)
                                        <option value="{{ $data->id }}">{{ $data->division_name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-3">
                                    <label class="col-form-label">জেলা</label>
                                    <select name="distric_id" id="distric-dd" class="form-control">
                                    </select>
                                </div>

                                <div class="col-md-3">
                                    <label class="col-form-label">উপজেলা</label>
                                    <select name="upazila_id" id="upazila-dd" class="form-control">
                                    </select>
                                </div>

                                <div class="col-md-3">
                                    <label class="col-form-label">কার্যালয়</label> <span style="color:red">*</span>
                                    <select name="office_id" id="office-dd" class="form-control">
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <label class="col-form-label">পদবী</label> <span style="color:red">*</span>
                                    <select name="user_level" class="form-control">
                                        <option>নির্বাচন করুন</option>
                                        @foreach($designation as $data)
                                            <option value="{{ $data->role_level }}"> {{ $data->designation_name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-3">
                                    <label class="col-form-label">ইউজারনেম</label> <span style="color:red">*</span>
                                    <input type="text" class="form-control" name="username">
                                </div>

                                <div class="col-md-3">
                                    <label class="col-form-label">ই-মেইল</label> <span style="color:red">*</span>
                                    <input type="text" class="form-control" name="email">
                                </div>

                                <div class="col-md-3">
                                    <label class="col-form-label">পাসওয়ার্ড</label> <span style="color:red">*</span>
                                    <input type="password" class="form-control" name="password">
                                </div>

                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="col-form-label">ব্যবহারকারীর নাম (বাংলা)</label> <span style="color:red">*</span>
                                        <input type="text" class="form-control" name="name_bangla">
                                    </div>

                                    <div class="col-md-3">
                                        <label class="col-form-label">ব্যবহারকারীর নাম (ইংরেজী)</label> <span style="color:red">*</span>
                                        <input type="text" class="form-control" name="name_english">
                                    </div>

                                    <div class="col-md-3">
                                        <label class="col-form-label">মোবাইল নম্বর</label> <span style="color:red">*</span>
                                        <input type="text" class="form-control" name="mobile">
                                    </div>

                                    <div class="col-md-3">
                                        <label class="col-form-label">এনআইডি নং</label>
                                        <input type="text" class="form-control" name="nidno">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <label class="col-form-label">জন্মতারিখ</label>
                                        <input type="text" class="form-control input_bangla" name="dob" data-provide="datepicker">
                                    </div>

                                    <div class="col-md-4">
                                        <label class="col-form-label">প্রোফাইল ফটো</label>
                                        <input type="file" class="form-control" name="profile">
                                    </div>

                                    <div class="col-md-4">
                                        <label class="col-form-label">স্বাক্ষর</label>
                                        <input type="file" class="form-control" name="signature">
                                    </div>
                                </div>

                                <p class="text-center mt-3">
                                    <button type="reset" class="btn btn-danger">রিসেট করুন</button>
                                    <button type="submit" class="btn btn-success">সংরক্ষণ করুন</button>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('admin.footer')
