@include('acland.header')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">ড্যাশবোর্ড</a></li>
                    <li class="breadcrumb-item active">প্রোফাইল</li>
                </ol>
            </div>
            <h4 class="page-title">প্রোফাইল</h4>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-4 col-xl-4">
        <div class="card text-center border border-success">
            <div class="card-body">
            	@if($user->profile == Null)
                <img src="/assets/images/users/user-0.jpg" class="rounded-circle avatar-lg img-thumbnail" alt="profile-image">
                @else
                <img src="/{{ $user->profile }}" class="rounded-circle avatar-lg img-thumbnail" alt="profile-image">
                @endif
                <h4 class="mb-0">{{ $user->name_bangla }}</h4>
                <p class="text-muted">{{ $user->designation->designation_name }}</p>
                <hr>

                <div class="text-start mt-3">

                    <p class="text-muted mb-2 font-13"><strong>নাম :</strong> <span class="ms-2"> {{ $user->name_bangla }}</span></p>

                    <p class="text-muted mb-2 font-13"><strong>মোবাইল নম্বর :</strong><span class="ms-2">{{ $user->mobile }}</span></p>

                    <p class="text-muted mb-2 font-13"><strong>ই-মেইল :</strong> <span class="ms-2">{{ $user->email }}</span></p>

                    <p class="text-muted mb-1 font-13"><strong>কার্যালয় :</strong> <span class="ms-2">
                    	@if($user->office_id == Null)
                    	@else
                    	{{ $user->upazilaoffice->office_name }}
                    	@endif
                    </span></p>
                </div>
            </div>
        </div> <!-- end card -->
    </div> <!-- end col-->

    <div class="col-lg-8 col-xl-8">
        <div class="card">
            <div class="card-body border border-success">
               <h4 class="header-title">বিস্তারিত তথ্য</h4>
               <hr>

                <form action="{{route('acland.update.profile.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-4">
                            <label class="col-form-label">বিভাগ</label>
                            <select name="division_id" class="form-control" disabled>
                                <option value="{{$user->division->id}}">{{$user->division->division_name}}</option>
                            </select>
                        </div>

                        <div class="col-lg-4">
                            <label class="col-form-label">জেলা</label>
                            <select name="distric_id" class="form-control" disabled>
                                <option value="{{$user->distric->id}}">{{$user->distric->distric_name}}</option>
                            </select>
                        </div>

                        <div class="col-lg-4">
                            <label class="col-form-label">উপজেলা</label>
                            <select name="upazila_id" class="form-control" disabled>
                                <option value="{{$user->upazila->id}}">{{$user->upazila->upazila_name}}</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <label for="" class="col-form-label">নাম (বাংলা)</label>
                            <input type="text" name="name_bangla" class="form-control" value="{{ $user->name_bangla }}">
                        </div>

                        <div class="col-lg-4">
                            <label for="" class="col-form-label">নাম (ইংরেজী)</label>
                            <input type="text" name="name_english" class="form-control" value="{{ $user->name_english }}">
                        </div>

                        <div class="col-lg-4">
                            <label for="" class="col-form-label">ইউজারনেম</label>
                            <input type="text" name="username" class="form-control" value="{{ $user->username }}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <label for="" class="col-form-label">ই-মেইল</label>
                            <input type="text" name="email" class="form-control" value="{{ $user->email }}">
                        </div>

                        <div class="col-lg-4">
                            <label for="" class="col-form-label">মোবাইল নম্বর</label>
                            <input type="text" name="mobile" class="form-control" value="{{ $user->mobile }}">
                        </div>

                        <div class="col-lg-4">
                            <label for="" class="col-form-label">পাসওয়ার্ড</label>
                            <input type="password" name="password" class="form-control" value="">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <label for="" class="col-form-label">কার্যালয়</label>
                            <select name="office" class="form-control" disabled>
                                <option value="{{$user->upazilaoffice->office_id}}">{{$user->upazilaoffice->office_name}}</option>
                            </select>
                        </div>

                        <div class="col-lg-4">
                            <label for="" class="col-form-label">পদবী</label>
                            <select name="designation" class="form-control" disabled>
                                <option value="{{$user->designation->id}}">{{$user->designation->designation_name}}</option>
                            </select>
                        </div>

                        <div class="col-lg-4">
                            <label for="" class="col-form-label">এনআইডি নং</label>
                            <input type="text" class="form-control" value="{{$user->nidno}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <label for="" class="col-form-label">জন্মতারিখ</label>
                            <input type="text" class="form-control" value="{{$user->dob}}">
                        </div>

                        <div class="col-lg-4">
                            <label for="" class="col-form-label">ছবি</label>
                            <input type="file" class="form-control" name="profile">
                        </div>

                        <div class="col-lg-4">
                            <label for="" class="col-form-label">স্বাক্ষর</label>
                            <input type="file" class="form-control" name="signature">
                        </div>
                    </div>

                    <p class="text-center">
                        <button type="submit" class="btn btn-success mt-2">পরিবর্তন করুন</button>
                    </p>
                </form>
            </div>
        </div> <!-- end card-->
    </div> <!-- end col -->
</div>


@include('acland.footer')
