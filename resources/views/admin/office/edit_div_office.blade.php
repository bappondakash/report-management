@include('admin.header')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item">ড্যাশবোর্ড</li>
                    <li class="breadcrumb-item active">নতুন পদবী</li>
                </ol>
            </div>
            <h4 class="page-title">নতুন বিভাগীয় অফিস</h4>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-lg-12">
        <!-- Portlet card -->
        <div class="card">
            <div class="card-header bg-success py-3 text-white">
                <h5 class="card-title mb-0 text-white">নতুন বিভাগীয় অফিস</h5>
            </div>
            <div id="cardCollpase7" class="collapse show">
                <div class="card-body">
                    <div class="container">
                        <form action="{{ url('admin/divisional-offices/'.$divoffice->id) }}" method="post">
                            @csrf
                            @method('PATCH')
                            <div class="row">
                                <div class="col-md-4">
                                    <label class="col-form-label">বিভাগ</label>
                                    <select class="form-control" data-toggle="select2" name="division_id">
                                        <option value="{{$divoffice->division->id}}">{{ $divoffice->division->division_name }}</option>
                                        @foreach($division as $data)
                                            <option value="{{ $data->id }}">{{ $data->division_name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <label class="col-form-label">অফিসের নাম</label>
                                    <input type="text" class="form-control" name="office_name" value="{{ $divoffice->office_name }}">
                                </div>

                                <div class="col-md-4">
                                    <label class="col-form-label">মোবাইল নম্বর</label>
                                    <input type="text" class="form-control" name="office_mobile" value="{{ $divoffice->office_mobile }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="col-form-label">ই-মেইল</label>
                                    <input type="text" class="form-control" name="office_email" value="{{ $divoffice->office_email }}">
                                </div>

                                <div class="col-md-6">
                                    <label class="col-form-label">ওয়েবসাইট</label>
                                    <input type="text" class="form-control" name="office_website" value="{{ $divoffice->office_website }}">
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
