<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

    <title>Student Empowerment System</title>
    <link rel="apple-touch-icon" href="{{asset("app-assets/images/ico/apple-icon-120.png")}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset("app-assets/images/ico/favicon.ico")}}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset("app-assets/vendors/css/vendors.min.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("app-assets/vendors/css/ui/prism.min.css")}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset("app-assets/css/bootstrap.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("app-assets/css/bootstrap-extended.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("app-assets/css/colors.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("app-assets/css/components.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("app-assets/css/themes/dark-layout.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("app-assets/css/themes/semi-dark-layout.css")}}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset("app-assets/css/core/menu/menu-types/vertical-menu.css")}}">
    <!-- END: Page CSS-->

    <link rel="stylesheet" type="text/css" href="{{asset("app-assets/vendors/css/tables/datatable/datatables.min.css")}}">
{{--    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">--}}

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset("assets/css/style.css")}}">
    <!-- END: Custom CSS-->


    <style>
        .mg{
            margin: 0px 30px;
        }
        .invalid-feedback {
            display: block;
        }
    </style>

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-sticky footer-static   menu-collapsed" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Header-->
   <div id="app">
        <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>


   @include("includes.navbar")

    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->

    @include("includes.sidebar")

    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">

        <router-view></router-view>


    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>



    @include("includes.footer")
       <vue-progress-bar></vue-progress-bar>
   </div>


    <script src="{{asset("app-assets/vendors/js/vendors.min.js")}}"></script>
    <script src="{{asset("app-assets/vendors/js/forms/select/select2.full.min.js")}}"></script>

    <script src="{{asset("app-assets/vendors/js/ui/prism.min.js")}}"></script>

    <script src="{{asset("app-assets/js/core/app-menu.js")}}"></script>
    <script src="{{asset("app-assets/js/core/app.js")}}"></script>


    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="{{asset("app-assets/vendors/js/tables/datatable/datatables.buttons.min.js")}}"></script>
    <script src="{{asset("app-assets/vendors/js/tables/datatable/buttons.html5.min.js")}}"></script>
    <script src="{{asset("app-assets/vendors/js/tables/datatable/buttons.print.min.js")}}"></script>
    <script src="{{asset("app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js")}}"></script>
    <script src="{{asset("app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js")}}"></script>

    <script src="{{asset("app-assets/vendors/js/forms/validation/jqBootstrapValidation.js")}}"></script>

    <script type="text/javascript" src="{{asset("js/app.js")}}"></script>

    <script>
        $(document).ready( function () {
            $('.table').DataTable();
        } );
    </script>

</body>
<!-- END: Body-->

</html>
