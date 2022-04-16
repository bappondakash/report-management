@include('admin.header')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item">ড্যাশবোর্ড</li>
                    <li class="breadcrumb-item active">জেলা অফিস সম্পাদন</li>
                </ol>
            </div>
            <h4 class="page-title">জেলা অফিস সম্পাদন</h4>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-lg-12">
        <!-- Portlet card -->
        <div class="card">
            <div class="card-header bg-success py-3 text-white">
                <h5 class="card-title mb-0 text-white">জেলা অফিস সম্পাদন</h5>
            </div>
            <div id="cardCollpase7" class="collapse show">
                <div class="card-body">
                    <div class="container">
                        <form action="{{ url('admin/distric-offices/'.$dis_office->id) }}" method="post">
                            @csrf
                            @method('PATCH')
                            <div class="row">
                                <div class="col-md-4">
                                    <label class="col-form-label">বিভাগ</label>
                                    <select class="form-control" data-toggle="select2" name="division_id" id="division-dd">
                                        <option value="{{$dis_office->division->id}}">{{$dis_office->division->division_name}}</option>
                                        @foreach($division as $data)
                                            <option value="{{ $data->id }}">{{ $data->division_name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <label class="col-form-label">জেলা</label>
                                    <select class="form-control" id="distric-dd" name="distric_id">
                                        <option value="{{$dis_office->distric->id}}">{{$dis_office->distric->distric_name}}</option>
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <label class="col-form-label">অফিসের নাম</label>
                                    <input type="text" class="form-control" name="office_name" value="{{$dis_office->office_name}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label class="col-form-label">মোবাইল নম্বর</label>
                                    <input type="text" class="form-control" name="office_mobile" value="{{$dis_office->office_mobile}}">
                                </div>

                                <div class="col-md-4">
                                    <label class="col-form-label">ই-মেইল</label>
                                    <input type="text" class="form-control" name="office_email" value="{{$dis_office->office_email}}">
                                </div>

                                <div class="col-md-4">
                                    <label class="col-form-label">ওয়েবসাইট</label>
                                    <input type="text" class="form-control" name="office_website" value="{{$dis_office->office_website}}">
                                </div>
                            </div>

                            <p class="text-center mt-4">
                                <button type="submit" class="btn btn-success">সংরক্ষণ করুন</button>
                            </p>

                        </form>
                    </div>
                </div>
            </div>
        </div> <!-- end card-->
    </div><!-- end col -->
</div>

@include('admin.footer')
