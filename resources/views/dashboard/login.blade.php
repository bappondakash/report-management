
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>লগিন | রিপোর্ট ব্যবস্থাপনা সিস্টেম</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="../assets/images/favicon.ico">

		<!-- App css -->
		<link href="/assets/css/config/modern/bootstrap.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
		<link href="/assets/css/config/modern/app.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

		<link href="/assets/css/config/modern/bootstrap-dark.min.css" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" />
		<link href="/assets/css/config/modern/app-dark.min.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />

		<!-- icons -->
		<link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body class="loading authentication-bg authentication-bg-pattern">

        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-4">
                        <div class="card bg-pattern">

                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <div class="auth-logo">
                                        <a href="index.html" class="logo logo-dark text-center">
                                            <span class="logo-lg">
                                               <h3>রিপোর্ট ব্যবস্থাপনা সিস্টেম</h3>
                                            </span>
                                        </a>
                    
                                        <a href="index.html" class="logo logo-light text-center">
                                            <span class="logo-lg">
                                                <img src="../assets/images/logo-light.png" alt="" height="22">
                                            </span>
                                        </a>
                                        <hr>
                                    </div>
                                </div>

                                <form method="post" action="{{ route('user.login.check')}}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="emailaddress" class="form-label">ই-মেইল</label>
                                        <input class="form-control" type="email" name="email" required="" placeholder="আপনার ই-মেইল এড্রেস লিখুন">
                                    </div>

                                    <div class="mb-3">
                                        <label for="password" class="form-label">পাসওয়ার্ড</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" name="password" class="form-control" placeholder="আপনার পাসওয়ার্ড লিখুন">
                                            <div class="input-group-text" data-password="false">
                                                <span class="password-eye"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-center d-grid">
                                        <button class="btn btn-primary" type="submit"> লগিন করুন </button>
                                    </div>

                                </form>

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->
        <!-- Vendor js -->
        <script src="/assets/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="/assets/js/app.min.js"></script>
        
    </body>
</html>