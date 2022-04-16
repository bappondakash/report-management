 </div> <!-- container -->

            </div> <!-- content -->

            <br><br><br><br><br>
            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> &copy; BD-IT <a href="">Bappon Das</a>
                        </div>
                        <div class="col-md-6">
                            <div class="text-md-end footer-links d-none d-sm-block">
                                <a href="javascript:void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->

    <!-- Vendor js -->
    <script src="/assets/js/vendor.min.js"></script>

    <!-- Plugins js-->
<script src="/assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<!-- Plugins js-->
<script src="/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="/assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
<script src="/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="/assets/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
<!-- Dashboar 1 init js-->
<script src="/assets/js/pages/datatables.init.js"></script>
    <!-- Tost-->
<script src="/assets/libs/toastr/toastr.js"></script>
<script>
        @if(Session::has('message'))
        toastr.options = {
        "closeButton": true,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-bottom-right",
    }
        var type = "{{ Session::get('alert-type','info') }}"
        switch(type){
        case 'info':
        toastr.info(" {{ Session::get('message') }} ");
        break;

        case 'success':
        toastr.success(" {{ Session::get('message') }} ");
        break;

        case 'warning':
        toastr.warning(" {{ Session::get('message') }} ");
        break;

        case 'error':
        toastr.error(" {{ Session::get('message') }} ");
        break;
    }
    @endif
</script>
<script src="/assets/libs/select2/js/select2.min.js"></script>
    <!-- Dashboar 1 init js-->
<script src="/assets/js/pages/dashboard-1.init.js"></script>

    <!-- App js-->
<script src="/assets/js/app.min.js"></script>
<script>
    $(document).ready(function () {
        $('#division-dd').on('change', function () {
            var idDivision = this.value;
            $("#distric-dd").html('');
            $.ajax({
                url: "{{url('fetch-districs')}}",
                type: "POST",
                data: {
                    division_id: idDivision,
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',
                success: function (result) {
                    $('#distric-dd').html('<option value="">জেলা নির্বাচন করুন</option>');
                    $.each(result.districs, function (key, value) {
                        $("#distric-dd").append('<option value="' + value
                            .id + '">' + value.distric_name + '</option>');
                    });
                    $('#upazila-dd').html('<option value="">উপজেলা নির্বাচন করুন</option>');
                }
            });
        });

        $('#distric-dd').on('change', function () {
            var idDistric = this.value;
            $("#upazila-dd").html('');
            $.ajax({
                url: "{{url('fetch-upazilas')}}",
                type: "POST",
                data: {
                    distric_id: idDistric,
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',
                success: function (res) {
                    $('#upazila-dd').html('<option value="">উপজেলা নির্বাচন করুন</option>');
                    $.each(res.upazilas, function (key, value) {
                        $("#upazila-dd").append('<option value="' + value
                            .id + '">' + value.upazila_name + '</option>');
                    });
                }
            });
        });
    });
</script>

<script>
    $(document).ready(function () {
        $('#division-dd').on('change', function () {
            var idDivision = this.value;
            $("#office-dd").html('');
            $.ajax({
                url: "{{url('fetch-division-offices')}}",
                type: "POST",
                data: {
                    division_id: idDivision,
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',
                success: function (result) {
                    $('#office-dd').html('<option value="">বিভাগীয় অফিস নির্বাচন করুন</option>');
                    $.each(result.divoffice, function (key, value) {
                        $("#office-dd").append('<option value="' + value
                            .office_code + '">' + value.office_name + '</option>');
                    });
                }
            });
        });

        $('#distric-dd').on('change', function () {
            var idDistric = this.value;
            $("#office-dd").html('');
            $.ajax({
                url: "{{url('fetch-distric-offices')}}",
                type: "POST",
                data: {
                    distric_id: idDistric,
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',
                success: function (res) {
                    $('#office-dd').html('<option value="">জেলা অফিস নির্বাচন করুন</option>');
                    $.each(res.disoffice, function (key, value) {
                        $("#office-dd").append('<option value="' + value
                            .office_code + '">' + value.office_name + '</option>');
                    });
                }
            });
        });

        $('#upazila-dd').on('change', function () {
            var idUpazila = this.value;
            $("#office-dd").html('');
            $.ajax({
                url: "{{url('fetch-upazila-offices')}}",
                type: "POST",
                data: {
                    upazila_id: idUpazila,
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',
                success: function (res) {
                    $('#office-dd').html('<option value="">উপজেলা অফিস নির্বাচন করুন</option>');
                    $.each(res.upaoffice, function (key, value) {
                        $("#office-dd").append('<option value="' + value
                            .office_code + '">' + value.office_name + '</option>');
                    });
                }
            });
        });
    });
</script>

</body>

</html>
