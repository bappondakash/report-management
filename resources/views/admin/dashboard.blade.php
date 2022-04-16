@include('admin.header')


             <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item active">ড্যাশবোর্ড</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">ড্যাশবোর্ড</h4>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card widget-inline">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-6 col-xl-3">
                                            <div class="p-2 text-center">
                                                <i class="fas fa-user fa-2x text-primary"></i>
                                                <h3><span data-plugin="counterup">0</span></h3>
                                                <p class="text-muted font-15 mb-0">সর্বমোট ব্যবহারকারী</p>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-xl-3">
                                            <div class="p-2 text-center">
                                                <i class="fas fa-user-check fa-2x text-success"></i>
                                                <h3><span data-plugin="counterup">0</span></h3>
                                                <p class="text-muted font-15 mb-0">সক্রিয় ব্যবহারকারী</p>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-xl-3">
                                            <div class="p-2 text-center">
                                                <i class="fas fa-user-times fa-2x text-danger"></i>
                                                <h3><span data-plugin="counterup">0</span></h3>
                                                <p class="text-muted font-15 mb-0">নিষ্ক্রিয় ব্যবহারকারী</p>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-xl-3">
                                            <div class="p-2 text-center">
                                                <i class="fas fa-file-alt fa-2x text-blue"></i>
                                                <h3><span data-plugin="counterup">০</span></h3>
                                                <p class="text-muted font-15 mb-0">সর্বমোট রিপোর্ট</p>
                                            </div>
                                        </div>

                                    </div> <!-- end row -->
                                </div>
                            </div> <!-- end card-->
                        </div> <!-- end col-->
                    </div>

                    <div class="row">
                        <div class="col-xl-4">
                            <!-- Portlet card -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-widgets">
                                        <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                        <a data-bs-toggle="collapse" href="#cardCollpase1" role="button" aria-expanded="false" aria-controls="cardCollpase1"><i class="mdi mdi-minus"></i></a>
                                        <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                                    </div>
                                    <h4 class="header-title mb-0">Lifetime Sales</h4>

                                    <div id="cardCollpase1" class="collapse show">
                                        <div class="text-center pt-3">
                                            <div id="lifetime-sales" data-colors="#00acc1,#f1556c"><canvas width="472" height="220" style="display: inline-block; width: 472.328px; height: 220px; vertical-align: top;"></canvas></div>

                                            <div class="row mt-3">
                                                <div class="col-4">
                                                    <p class="text-muted font-15 mb-1 text-truncate">Target</p>
                                                    <h4><i class="fe-arrow-down text-danger me-1"></i>$7.8k</h4>
                                                </div>
                                                <div class="col-4">
                                                    <p class="text-muted font-15 mb-1 text-truncate">Last week</p>
                                                    <h4><i class="fe-arrow-up text-success me-1"></i>$1.4k</h4>
                                                </div>
                                                <div class="col-4">
                                                    <p class="text-muted font-15 mb-1 text-truncate">Last Month</p>
                                                    <h4><i class="fe-arrow-down text-danger me-1"></i>$9.8k</h4>
                                                </div>
                                            </div> <!-- end row -->

                                        </div>
                                    </div> <!-- collapsed end -->
                                </div> <!-- end card-body -->
                            </div> <!-- end card-->
                        </div> <!-- end col-->

                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-widgets">
                                        <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                        <a data-bs-toggle="collapse" href="#cardCollpase2" role="button" aria-expanded="false" aria-controls="cardCollpase2"><i class="mdi mdi-minus"></i></a>
                                        <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                                    </div>
                                    <h4 class="header-title mb-0">Income Amounts</h4>

                                    <div id="cardCollpase2" class="collapse show">
                                        <div class="text-center pt-3">
                                            <div id="income-amounts" data-colors="#00acc1"><canvas width="205" height="220" style="display: inline-block; width: 205px; height: 220px; vertical-align: top;"></canvas></div>
                                            <div class="row mt-3">
                                                <div class="col-4">
                                                    <p class="text-muted font-15 mb-1 text-truncate">Target</p>
                                                    <h4><i class="fe-arrow-up text-success me-1"></i>641</h4>
                                                </div>
                                                <div class="col-4">
                                                    <p class="text-muted font-15 mb-1 text-truncate">Last week</p>
                                                    <h4><i class="fe-arrow-down text-danger me-1"></i>234</h4>
                                                </div>
                                                <div class="col-4">
                                                    <p class="text-muted font-15 mb-1 text-truncate">Last Month</p>
                                                    <h4><i class="fe-arrow-up text-success me-1"></i>3201</h4>
                                                </div>
                                            </div> <!-- end row -->
                                        </div>
                                    </div> <!-- collapsed end -->
                                </div> <!-- end card-body -->
                            </div> <!-- end card-->
                        </div> <!-- end col-->

                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-widgets">
                                        <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                        <a data-bs-toggle="collapse" href="#cardCollpase3" role="button" aria-expanded="false" aria-controls="cardCollpase3"><i class="mdi mdi-minus"></i></a>
                                        <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                                    </div>
                                    <h4 class="header-title mb-0">Total Users</h4>

                                    <div id="cardCollpase3" class="collapse show">
                                        <div class="text-center pt-3">
                                            <div id="total-users" data-colors="#00acc1,#4b88e4,#e3eaef,#fd7e14"><canvas width="220" height="220" style="display: inline-block; width: 220px; height: 220px; vertical-align: top;"></canvas></div>
                                            <div class="row mt-3">
                                                <div class="col-4">
                                                    <p class="text-muted font-15 mb-1 text-truncate">Target</p>
                                                    <h4><i class="fe-arrow-down text-danger me-1"></i>18k</h4>
                                                </div>
                                                <div class="col-4">
                                                    <p class="text-muted font-15 mb-1 text-truncate">Last week</p>
                                                    <h4><i class="fe-arrow-up text-success me-1"></i>3.25k</h4>
                                                </div>
                                                <div class="col-4">
                                                    <p class="text-muted font-15 mb-1 text-truncate">Last Month</p>
                                                    <h4><i class="fe-arrow-up text-success me-1"></i>28k</h4>
                                                </div>
                                            </div> <!-- end row -->
                                        </div>
                                    </div> <!-- collapsed end -->
                                </div> <!-- end card-body -->
                            </div> <!-- end card-->
                        </div> <!-- end col-->
                    </div>

@include('admin.footer')
