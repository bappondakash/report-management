@include('admin.header')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item">ড্যাশবোর্ড</li>
                    <li class="breadcrumb-item active">উপজেলা সম্পাদন</li>
                </ol>
            </div>
            <h4 class="page-title">উপজেলা সম্পাদন</h4>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-lg-12">
        <!-- Portlet card -->
        <div class="card">
            <div class="card-header bg-success py-3 text-white">
                <h5 class="card-title mb-0 text-white">উপজেলা সম্পাদন</h5>
            </div>
            <div id="cardCollpase7" class="collapse show">
                <div class="card-body">
                    <div class="container">
                        <form action="{{ url('admin/upazila/'.$upazila->id) }}" method="post">
                            @csrf
                            @method('PATCH')
                            <div class="row mt-3">
                                <div class="col-md-4">
                                    <label class="col-form-label">বিভাগ</label>
                                    <select name="division_id" class="form-control" id="division-dd">
                                        <option value="{{ $upazila->division->id }}">{{ $upazila->division->division_name }}</option>
                                        @foreach($division as $data)
                                            <option value="{{$data->id}}">{{$data->division_name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <label class="col-form-label">জেলা</label>
                                    <select name="distric_id" id="distric-dd" class="form-control">
                                        <option value="{{ $upazila->distric->id }}"> {{ $upazila->distric->distric_name }}</option>
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <label class="col-form-label">উপজেলার নাম</label>
                                    <input type="text" class="form-control" name="upazila_name" value="{{ $upazila->upazila_name }}">
                                </div>
                                <p class="text-center mt-4">
                                    <button type="submit" class="btn btn-success">সংরক্ষণ করুন</button>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> <!-- end card-->
    </div><!-- end col -->
</div>

@include('admin.footer')
