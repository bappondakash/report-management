@include('admin.header')

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">ড্যাশবোর্ড</a></li>
                    <li class="breadcrumb-item active">জেলাসমূহ</li>
                </ol>
            </div>
            <h4 class="page-title">জেলাসমূহ</h4>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-success py-3 text-white">
                <h5 class="card-title mb-0 text-white">/h5>
            </div>
            <div id="cardCollpase7" class="collapse show">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive text-center">
                            <table class="table table-bordered table-nowrap table-hover table-centered m-0">

                                <thead class="table-light">
                                <tr>
                                    <th>#</th>
                                    <th>বিভাগ</th>
                                    <th>জেলা</th>
                                    <th>পদক্ষেপ নিন</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($distric as $key=>$data)
                                    <tr>
                                        <td class="numeric_bangla">{{$key+1}}</td>
                                        <td> {{ $data->division->division_name }}  </td>
                                        <td>{{ $data->distric_name }}</td>
                                        <td>
                                            <a href="{{ url('admin/districs/'.$data->id.'/edit') }}" class="btn btn-xs btn-light"><i class="mdi mdi-pencil"></i></a> |
                                            <a href="{{ url('admin/districs/'.$data->id.'/delete') }}" class="btn btn-xs btn-light"><i class="mdi mdi-delete"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div> <!-- end .table-responsive-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('admin.footer')
