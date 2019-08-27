<!DOCTYPE html>

<html lang="en">


    <head>
        <meta charset="utf-8" />
        <title>KENYA HEALTH WORKFORCE PROJECT</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of health system" name="description" />
        <meta content="" name="author" />

        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="{{ url('/layout_assets/global/plugins/font-awesome/css/font-awesome.min.css') }}/" rel="stylesheet" type="text/css" />
        <link href="{{ url('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ url('layout_assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ url('layout_assets/global/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ url('layout_assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ url('layout_assets/global/css/components-md.min.css')}}" rel="stylesheet" id="style_components" type="text/css" />
        <link href="{{ url('layout_assets/global/css/plugins-md.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ url('layout_assets/layouts/layout2/css/layout.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ url('layout_assets/layouts/layout2/css/themes/blue.min.css')}}" rel="stylesheet" type="text/css" id="style_color" />
        <link href="{{ url('layout_assets/layouts/layout2/css/custom.min.css')}}" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" href="favicon.ico" /> </head>

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid page-md">
        <div class="page-header navbar navbar-fixed-top">
            <div class="page-header-inner ">
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>

                <div class="page-top">
                </div>
            </div>
        </div>
        <div class="clearfix"> </div>
        <div class="page-container">
    
            <div class="page-content-wrapper">
                <div class="page-content">

 @yield('content')
    
                </div>

            </div>

        </div>

        <!-- BEGIN FOOTER -->
        <div class="page-footer">
            <div class="page-footer-inner"> 2019 &copy; QWERTY SOLUTIONS
               
                <div class="scroll-to-top">
                    <i class="icon-arrow-up"></i>
                </div>
            </div>
            <!-- END FOOTER -->
            <!-- BEGIN QUICK NAV -->

            <div class="quick-nav-overlay"></div>
  
            <script src="{{ url('layout_assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
            <script src="{{ url('layout_assets/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
            <script src="{{ url('layout_assets/global/plugins/js.cookie.min.js')}}" type="text/javascript"></script>
            <script src="{{ url('layout_assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
            <script src="{{ url('layout_assets/global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
            <script src="{{ url('layout_assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}" type="text/javascript"></script>
            <!-- END CORE PLUGINS -->
            <!-- BEGIN THEME GLOBAL SCRIPTS -->
            <script src="{{ url('layout_assets/global/scripts/app.min.js')}}" type="text/javascript"></script>
            <!-- END THEME GLOBAL SCRIPTS -->
            <!-- BEGIN THEME LAYOUT SCRIPTS -->
            <script src="{{ url('layout_assets/layouts/layout2/scripts/layout.min.js')}}" type="text/javascript"></script>
            <script src="{{ url('layout_assets/layouts/layout2/scripts/demo.min.js')}}" type="text/javascript"></script>
            <script src="{{ url('layout_assets/layouts/global/scripts/quick-sidebar.min.js')}}" type="text/javascript"></script>
            <script src="{{ url('layout_assets/layouts/global/scripts/quick-nav.min.js')}}" type="text/javascript"></script>
            <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>