
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>eMsika Shopping LIst</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <link rel="stylesheet" href="{{asset('assests/plugins/morris/morris.css')}}">
    @livewireStyles
    <link href="{{asset('assests/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assests/css/icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assests/css/style.css')}}" rel="stylesheet" type="text/css">
 @yield('page_css')
</head>


<body class="fixed">

<!-- Loader -->
<div id="preloader">
    <div id="status">
        <div class="spinner"></div>
    </div>
</div>

<!-- Begin page -->
<div id="wrapper">

    <!-- Start content -->
    <div class="content-page">

        <div class="content">

            <!-- Top Bar Start -->
    <div class="topbar">

        <nav class="navbar-custom">

            <ul class="list-inline float-right mb-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif          
            </ul>

                    <h3 class="page-title">eMsika Shopping list system</h3>   
                    
        </nav>

    </div>
    <div class="page-content-wrapper ">
    <div class="container-fluid">
     <div class="row">
        <div class="col-12">
            <div class="card m-b-20">
                <div class="card-body">
                <div class="card-header text-black-50 mb-3">Shopping list</div>
                   @yield('content')
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div><!-- container-->
        </div>
    </div>

    <footer class="footer">
     
    eMsika system © {{date("Y")}}. All Rights Reserved
    </footer>

</div>
<!-- End Right content here -->

<!-- END wrapper -->


<!-- jQuery  -->
<script src="{{asset('assests/js/jquery.min.js')}}"></script>
<script src="{{asset('assests/js/popper.min.js')}}"></script>
<script src="{{asset('assests/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assests/js/modernizr.min.js')}}"></script>
<script src="{{asset('assests/js/detect.js')}}"></script>
<script src="{{asset('assests/js/fastclick.js')}}"></script>
<script src="{{asset('assests/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('assests/js/jquery.blockUI.js')}}"></script>
<script src="{{asset('assests/js/waves.js')}}"></script>
<script src="{{asset('assests/js/jquery.nicescroll.js')}}"></script>
<script src="{{asset('assests/js/jquery.scrollTo.min.js')}}"></script>
@livewireScripts
<!--Morris Chart-->
<script src="{{asset('assests/plugins/morris/morris.min.js')}}"></script>
<script src="{{asset('assests/plugins/raphael/raphael-min.js')}}"></script>

<script src="{{asset('pages/dashboard.js')}}"></script>

<!-- App js -->
<script src="{{asset('assests/js/app.js')}}"></script>
<script type="text/javascript">
        window.livewire.on('itemAdded', () => {
            $('#exampleModal').modal('hide');
        });
    </script>


</body>
</html>

