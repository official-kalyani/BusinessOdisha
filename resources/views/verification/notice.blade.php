@include('layouts.admin_layout.head-main')

<head>

    <title> | Dason - Admin & Dashboard Template</title>

    @include('layouts.admin_layout.head')

    @include('layouts.admin_layout.head-style')

</head>


<!-- Begin page -->
<body data-topbar="dark">
<div id="layout-wrapper">

@include('layouts.admin_layout.menu')

    
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <?php
                $maintitle = "Ecommerce";
                $title = "Dashboard";
                ?>
                @include('layouts.admin_layout.breadcrumb')
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                    
                        <div class="card">
                            <div class="card-body">                            
                            <form action="{{ url('save-symptom') }}" id="userform" name="userform" method="POST" enctype="multipart/form-data" autocomplete="off">
                            @csrf
                                    
                                    <div class="row" >
                                        <div class="col-12">
                                        @if (session('resent'))
                                            <div class="alert alert-success" role="alert">
                                                A fresh verification link has been sent to your email address.
                                            </div>
                                        @endif
                                            <div class="text-sm-center">
                                                @if (Auth::check() && !Auth::user()->is_admin )
                                                    Before proceeding, please check your email for a verification link. If you did not receive the email,
                                                    <form action="{{ route('verification.resend') }}" method="POST" class="d-inline">
                                                        @csrf
                                                        <button type="submit" class="d-inline btn btn-link p-0">
                                                            click here to request another
                                                        </button>.
                                                    </form>
                                                @endif
                                            
                                                
                                            </div>
                                        </div>
                                    </div> 
                               
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->




            </div>
                  
                    
                     <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
        @include('layouts.admin_layout.footer')
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

@include('layouts.admin_layout.right-sidebar') 
@include('layouts.admin_layout.vendor-scripts')

</body>

</html>