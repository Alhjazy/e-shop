<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7 fluid top-full sticky-top sidebar sidebar-full"> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8 fluid top-full sidebar sidebar-full"> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9 fluid top-full sidebar sidebar-full"> <![endif]-->
<!--[if gt IE 8]> <html class="ie gt-ie8 fluid top-full sidebar sidebar-full"> <![endif]-->
<!--[if !IE]><!--><html class="fluid top-full sidebar sidebar-full"><!-- <![endif]-->
<head>
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Meta -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap -->
    <link href="{{asset('/common/bootstrap/css/bootstrap.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('/common/bootstrap/css/responsive.css')}}" rel="stylesheet" type="text/css" />

    <!-- Glyphicons Font Icons -->
    <link href="{{asset('/common/theme/fonts/glyphicons/css/glyphicons.css')}}" rel="stylesheet" />

    <link rel="stylesheet" href="{{asset('/common/theme/fonts/font-awesome/css/font-awesome.min.css')}}">
    <!--[if IE 7]><link rel="stylesheet" href="{{asset('/common/theme/fonts/font-awesome/css/font-awesome-ie7.min.css')}}"><![endif]-->

    <!-- Uniform Pretty Checkboxes -->
    <link href="{{asset('/common/theme/scripts/plugins/forms/pixelmatrix-uniform/css/uniform.default.css')}}" rel="stylesheet" />

    <!-- PrettyPhoto -->
    <link href="{{asset('/common/theme/scripts/plugins/gallery/prettyphoto/css/prettyPhoto.css')}}" rel="stylesheet" />

    <!--[if IE]><!--><script src="{{asset('/common/theme/scripts/plugins/other/excanvas/excanvas.js')}}"></script><!--<![endif]-->
    <!--[if lt IE 8]><script src="{{asset('/common/theme/scripts/plugins/other/json2.js')}}"></script><![endif]-->

    <!-- Bootstrap Extended -->
    <link href="{{asset('/common/bootstrap/extend/jasny-fileupload/css/fileupload.css')}}" rel="stylesheet">
    <link href="{{asset('/common/bootstrap/extend/bootstrap-wysihtml5/css/bootstrap-wysihtml5-0.0.2.css')}}" rel="stylesheet">
    <link href="{{asset('/common/bootstrap/extend/bootstrap-select/bootstrap-select.css')}}" rel="stylesheet" />
    <link href="{{asset('/common/bootstrap/extend/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css')}}" rel="stylesheet" />

    <!-- DateTimePicker Plugin -->
    <link href="{{asset('/common/theme/scripts/plugins/forms/bootstrap-datetimepicker/css/datetimepicker.css')}}" rel="stylesheet" />

    <!-- JQueryUI -->
    <link href="{{asset('/common/theme/scripts/plugins/system/jquery-ui/css/smoothness/jquery-ui-1.9.2.custom.min.css')}}" rel="stylesheet" />

    <!-- MiniColors ColorPicker Plugin -->
    <link href="{{asset('/common/theme/scripts/plugins/color/jquery-miniColors/jquery.miniColors.css')}}" rel="stylesheet" />

    <!-- Notyfy Notifications Plugin -->
    <link href="{{asset('/common/theme/scripts/plugins/notifications/notyfy/jquery.notyfy.css')}}" rel="stylesheet" />
    <link href="{{asset('/common/theme/scripts/plugins/notifications/notyfy/themes/default.css')}}" rel="stylesheet" />

    <!-- Gritter Notifications Plugin -->
    <link href="{{asset('/common/theme/scripts/plugins/notifications/Gritter/css/jquery.gritter.css')}}" rel="stylesheet" />

    <!-- Easy-pie Plugin -->
    <link href="{{asset('/common/theme/scripts/plugins/charts/easy-pie/jquery.easy-pie-chart.css')}}" rel="stylesheet" />

    <!-- Google Code Prettify Plugin -->
    <link href="{{asset('/common/theme/scripts/plugins/other/google-code-prettify/prettify.css')}}" rel="stylesheet" />

    <!-- Pageguide Guided Tour Plugin -->
    <!--[if gt IE 8]><!--><link media="screen" href="{{asset('/common/theme/scripts/plugins/other/pageguide/css/pageguide.css')}}" rel="stylesheet" /><!--<![endif]-->

    <!-- Bootstrap Image Gallery -->
    <link href="{{asset('/common/bootstrap/extend/bootstrap-image-gallery/css/bootstrap-image-gallery.min.css')}}" rel="stylesheet" />

    <!-- Main Theme Stylesheet :: CSS -->
    <link href="{{asset('/common/theme/css/style-default.css?1372280934')}}" rel="stylesheet" type="text/css" />


    <!-- LESS.js Library -->
    <script src="{{asset('/common/theme/scripts/plugins/system/less.min.js')}}"></script>
</head>
<body class="">

<!-- Main Container Fluid -->
<div class="container-fluid fluid menu-left">

    <!-- Sidebar menu & content wrapper -->
    <div id="wrapper">

        <!-- Sidebar Menu -->
        <div id="menu" class="hidden-phone hidden-print">

            <!-- Brand -->
            <a href="index.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full" class="appbrand">{{ config('app.name', 'Laravel') }}</a>

            <!-- Scrollable menu wrapper with Maximum height -->
            <div class="slim-scroll" data-scroll-height="800px">

                <!-- Sidebar Profile -->
                <span class="profile center">
				<a href="my_account_advanced.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full"><img data-src="holder.js/36x36/white" alt="Avatar" /></a>
			</span>
                <!-- // Sidebar Profile END -->

                <!-- Regular Size Menu -->
                <ul>


                    <!-- Not blank page -->

                    <!-- Quick Sidebar Style -->
                    <!-- // Quick Sidebar Style END -->

                    <!-- Full Sidebar Style -->
                    <li class="active"><a href="index.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full" class="glyphicons dashboard"><i></i> Dashboard</a></li>
                    <li class="dropdown dd-1">
                        <a href="" data-toggle="dropdown" class="glyphicons settings"><i></i>Controllers <span class="icon-chevron-right"></span></a>
                        <ul class="dropdown-menu pull-left">

                            <!-- Components Submenu Level 2 -->
                            <li class="dropdown submenu">
                                <a data-toggle="dropdown" class="dropdown-toggle">Users Control</a>
                                <ul class="dropdown-menu submenu-show submenu-hide pull-right">
                                    <li class=""><a href="form_wizards.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full">Create User</a></li>
                                    <li class=""><a href="form_elements.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full">Update User</a></li>
                                    <li class=""><a href="file_managers.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full">Search User</a></li>
                                    <li class=""><a href="form_validator.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full">Delete user</a></li>
                                </ul>
                            </li>
                            <!-- // Components Submenu Level 2 END -->

                            <li class="dropdown submenu">
                                <a data-toggle="dropdown" class="dropdown-toggle">Tables</a>
                                <ul class="dropdown-menu submenu-show submenu-hide pull-right">
                                    <li class=""><a href="tables.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full">Tables</a></li>
                                    <li class=""><a href="tables_responsive.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full">Responsive Tables</a></li>
                                    <li class=""><a href="pricing_tables.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full">Pricing tables</a></li>
                                </ul>
                            </li>

                            <!-- Components Submenu Regular Items -->
                            <li class=""><a href="ui.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full">UI Elements</a></li>
                            <li class=""><a href="icons.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full">Icons</a></li>
                            <li class=""><a href="widgets.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full">Widgets</a></li>
                            <li class=""><a href="tabs.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full">Tabs</a></li>
                            <li class=""><a href="sliders.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full">Sliders</a></li>
                            <li class=""><a href="charts.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full">Charts</a></li>
                            <li class=""><a href="grid.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full">Grid system</a></li>
                            <li class=""><a href="notifications.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full">Notifications</span></a></li>
                            <li class=""><a href="modals.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full">Modals</a></li>
                            <li class=""><a href="thumbnails.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full">Thumbnails</a></li>
                            <li class=""><a href="carousels.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full">Carousels</a></li>
                            <li class=""><a href="image_crop.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full">Image Cropping</a></li>
                            <li class=""><a href="tour.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full">Page Tour</a></li>

                            <li class="dropdown submenu">
                                <a data-toggle="dropdown" class="dropdown-toggle">APIs</a>
                                <ul class="dropdown-menu submenu-show submenu-hide pull-right">
                                    <li class=""><a href="twitter.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full">Twitter API</a></li>
                                    <li class=""><a href="google_analytics.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full">Google Analytics API</a></li>
                                </ul>
                            </li>

                            <li class=""><a href="infinite_scroll.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full">Infinite Scroll</a></li>
                            <!-- // Components Submenu Regular Items END -->

                            <li class="dropdown submenu">
                                <a data-toggle="dropdown" class="dropdown-toggle glyphicons circle_info"><i></i>4 Level Menu</a>
                                <ul class="dropdown-menu submenu-show submenu-hide pull-right">
                                    <li class="dropdown submenu">
                                        <a data-toggle="dropdown" href="#" class="dropdown-toggle">Menu item</a>
                                        <ul class="dropdown-menu submenu-show submenu-hide pull-right">
                                            <li><a href="#">Menu item</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown dd-1">
                        <a href="" data-toggle="dropdown" class="glyphicons notes"><i></i>Pages <span class="icon-chevron-right"></span></a>
                        <ul class="dropdown-menu pull-left">

                            <li><a href="timeline.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full" class="glyphicons history"><i></i>Timeline</a></li>


                            <li><a href="invoice.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full" class="glyphicons credit_card"><i></i>Invoice</a></li>
                            <li><a href="faq.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full" class="glyphicons circle_question_mark"><i></i>FAQ</a></li>
                            <li><a href="search.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full" class="glyphicons search"><i></i>Search</a></li>
                            <li><a href="ratings.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full" class="glyphicons star"><i></i>Ratings</a></li>

                            <li class="dropdown submenu">
                                <a data-toggle="dropdown" class="dropdown-toggle glyphicons user"><i></i>Account</a>
                                <ul class="dropdown-menu submenu-show submenu-hide pull-right">
                                    <li class=""><a href="my_account_advanced.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full">Advanced profile</a></li>
                                    <li class=""><a href="my_account.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full">My Account</a></li>
                                    <li><a href="login.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full"><i></i>Login</a></li>
                                    <li><a href="signup.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full"><i></i>Register</a></li>
                                </ul>
                            </li>
                            <li class="dropdown submenu">
                                <a data-toggle="dropdown" class="dropdown-toggle glyphicons google_maps"><i></i>Maps</a>
                                <ul class="dropdown-menu submenu-show submenu-hide pull-right">
                                    <li class=""><a href="maps_vector.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full">Vector maps</a></li>
                                    <li class=""><a href="maps_google.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full">Google maps</a></li>
                                </ul>
                            </li>
                            <li class="dropdown submenu">
                                <a data-toggle="dropdown" class="dropdown-toggle glyphicons shopping_cart"><i></i>Online Shop</a>
                                <ul class="dropdown-menu submenu-show submenu-hide pull-right">
                                    <li class=""><a href="shop_products.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full">Products</a></li>
                                    <li class=""><a href="shop_edit_product.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full">Add product</a></li>
                                    <li class=""><a href="shop_orders_timeline.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full">Orders Timeline</a></li>
                                </ul>
                            </li>
                            <li><a href="typography.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full" class="glyphicons font"><i></i>Typography</a></li>
                            <li><a href="gallery.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full" class="glyphicons picture"><i></i>Photo Gallery</a></li>
                            <li><a href="calendar.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full" class="glyphicons calendar"><i></i>Calendar</a></li>
                            <li><a href="bookings.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full" class="glyphicons user_add"><i></i>Bookings</a></li>
                            <li><a href="finances.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full" class="glyphicons coins"><i></i>Finances</a></li>
                            <li><a href="error.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full" class="glyphicons warning_sign"><i></i>Error page</a></li>
                            <li><a href="blank.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full" class="glyphicons magic"><i></i>Blank page</a></li>
                        </ul>
                    </li>
                    <li class="glyphs">
                        <ul>
                            <li class="active"><a href="icons.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full" class="glyphicons heart"><i></i></a></li>
                            <li><a href="icons.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full" class="glyphicons home"><i></i></a></li>
                            <li><a href="icons.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full" class="glyphicons bin"><i></i></a></li>
                            <li><a href="icons.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full" class="glyphicons user"><i></i></a></li>
                        </ul>
                    </li>
                    <li class="search open">
                        <form autocomplete="off" class="dropdown dd-1">
                            <input type="text" value="" placeholder="Type for suggestions .." data-toggle="typeahead" />
                            <button type="button" class="glyphicons search"><i></i></button>
                        </form>
                    </li>
                    <!-- // Full Sidebar Style END -->

                    <!-- // Not blank page END -->

                </ul>
                <div class="clearfix"></div>
                <!-- // Regular Size Menu END -->

                <div class="alert alert-primary">
                    <a class="close" data-dismiss="alert">&times;</a>
                    <p>Integer quis tempor mi. Donec venenatis dui in neque fringilla at iaculis libero ullamcorper. In velit sem, sodales id hendrerit ac, fringilla et est.</p>
                </div>

            </div>
            <!-- // Scrollable Menu wrapper with Maximum Height END -->

        </div>
        <!-- // Sidebar Menu END -->

        <!-- Content -->
        <div id="content">

            <!-- Top navbar -->
            <div class="navbar main hidden-print">

                <!-- Menu Toggle Button -->
                <button type="button" class="btn btn-navbar">
                    <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                </button>
                <!-- // Menu Toggle Button END -->

                <!-- Not Blank page -->

                <!-- Full Top Style -->
                <ul class="topnav pull-left">
                    <li class="active"><a href="index.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full" class="glyphicons dashboard"><i></i> Dashboard</a></li>
                    <li class="dropdown dd-1">
                        <a href="" data-toggle="dropdown" class="glyphicons settings"><i></i>Components <span class="caret"></span></a>
                        <ul class="dropdown-menu pull-left">

                            <!-- Components Submenu Level 2 -->
                            <li class="dropdown submenu">
                                <a data-toggle="dropdown" class="dropdown-toggle">Forms</a>
                                <ul class="dropdown-menu submenu-show submenu-hide pull-right">
                                    <li class=""><a href="form_wizards.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full">Form Wizards</a></li>
                                    <li class=""><a href="form_elements.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full">Form Elements</a></li>
                                    <li class=""><a href="form_validator.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full">Form Validator</a></li>
                                    <li class=""><a href="file_managers.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full">File Managers</a></li>
                                </ul>
                            </li>
                            <!-- // Components Submenu Level 2 END -->

                            <li class="dropdown submenu">
                                <a data-toggle="dropdown" class="dropdown-toggle">Tables</a>
                                <ul class="dropdown-menu submenu-show submenu-hide pull-right">
                                    <li class=""><a href="tables.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full">Tables</a></li>
                                    <li class=""><a href="tables_responsive.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full">Responsive Tables</a></li>
                                    <li class=""><a href="pricing_tables.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full">Pricing tables</a></li>
                                </ul>
                            </li>

                            <!-- Components Submenu Regular Items -->
                            <li class=""><a href="ui.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full">UI Elements</a></li>
                            <li class=""><a href="icons.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full">Icons</a></li>
                            <li class=""><a href="widgets.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full">Widgets</a></li>
                            <li class=""><a href="tabs.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full">Tabs</a></li>
                            <li class=""><a href="sliders.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full">Sliders</a></li>
                            <li class=""><a href="charts.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full">Charts</a></li>
                            <li class=""><a href="grid.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full">Grid system</a></li>
                            <li class=""><a href="notifications.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full">Notifications</span></a></li>
                            <li class=""><a href="modals.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full">Modals</a></li>
                            <li class=""><a href="thumbnails.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full">Thumbnails</a></li>
                            <li class=""><a href="carousels.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full">Carousels</a></li>
                            <li class=""><a href="image_crop.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full">Image Cropping</a></li>
                            <li class=""><a href="tour.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full">Page Tour</a></li>

                            <li class="dropdown submenu">
                                <a data-toggle="dropdown" class="dropdown-toggle">APIs</a>
                                <ul class="dropdown-menu submenu-show submenu-hide pull-right">
                                    <li class=""><a href="twitter.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full">Twitter API</a></li>
                                    <li class=""><a href="google_analytics.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full">Google Analytics API</a></li>
                                </ul>
                            </li>

                            <li class=""><a href="infinite_scroll.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full">Infinite Scroll</a></li>
                            <!-- // Components Submenu Regular Items END -->

                            <li class="dropdown submenu">
                                <a data-toggle="dropdown" class="dropdown-toggle glyphicons circle_info"><i></i>4 Level Menu</a>
                                <ul class="dropdown-menu submenu-show submenu-hide pull-right">
                                    <li class="dropdown submenu">
                                        <a data-toggle="dropdown" href="#" class="dropdown-toggle">Menu item</a>
                                        <ul class="dropdown-menu submenu-show submenu-hide pull-right">
                                            <li><a href="#">Menu item</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown dd-1">
                        <a href="" data-toggle="dropdown" class="glyphicons notes"><i></i>Pages <span class="caret"></span></a>
                        <ul class="dropdown-menu pull-left">

                            <li><a href="timeline.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full" class="glyphicons history"><i></i>Timeline</a></li>


                            <li><a href="invoice.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full" class="glyphicons credit_card"><i></i>Invoice</a></li>
                            <li><a href="faq.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full" class="glyphicons circle_question_mark"><i></i>FAQ</a></li>
                            <li><a href="search.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full" class="glyphicons search"><i></i>Search</a></li>
                            <li><a href="ratings.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full" class="glyphicons star"><i></i>Ratings</a></li>

                            <li class="dropdown submenu">
                                <a data-toggle="dropdown" class="dropdown-toggle glyphicons user"><i></i>Account</a>
                                <ul class="dropdown-menu submenu-show submenu-hide pull-right">
                                    <li class=""><a href="my_account_advanced.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full">Advanced profile</a></li>
                                    <li class=""><a href="my_account.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full">My Account</a></li>
                                    <li><a href="login.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full"><i></i>Login</a></li>
                                    <li><a href="signup.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full"><i></i>Register</a></li>
                                </ul>
                            </li>
                            <li class="dropdown submenu">
                                <a data-toggle="dropdown" class="dropdown-toggle glyphicons google_maps"><i></i>Maps</a>
                                <ul class="dropdown-menu submenu-show submenu-hide pull-right">
                                    <li class=""><a href="maps_vector.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full">Vector maps</a></li>
                                    <li class=""><a href="maps_google.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full">Google maps</a></li>
                                </ul>
                            </li>
                            <li class="dropdown submenu">
                                <a data-toggle="dropdown" class="dropdown-toggle glyphicons shopping_cart"><i></i>Online Shop</a>
                                <ul class="dropdown-menu submenu-show submenu-hide pull-right">
                                    <li class=""><a href="shop_products.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full">Products</a></li>
                                    <li class=""><a href="shop_edit_product.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full">Add product</a></li>
                                    <li class=""><a href="shop_orders_timeline.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full">Orders Timeline</a></li>
                                </ul>
                            </li>
                            <li><a href="typography.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full" class="glyphicons font"><i></i>Typography</a></li>
                            <li><a href="gallery.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full" class="glyphicons picture"><i></i>Photo Gallery</a></li>
                            <li><a href="calendar.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full" class="glyphicons calendar"><i></i>Calendar</a></li>
                            <li><a href="bookings.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full" class="glyphicons user_add"><i></i>Bookings</a></li>
                            <li><a href="finances.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full" class="glyphicons coins"><i></i>Finances</a></li>
                            <li><a href="error.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full" class="glyphicons warning_sign"><i></i>Error page</a></li>
                            <li><a href="blank.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full" class="glyphicons magic"><i></i>Blank page</a></li>
                        </ul>
                    </li>
                    <li class="glyphs hidden-tablet hidden-phone" data-toggle="tooltip" data-title="Click to see all the 400+ PREMIUM icons that you can use!" data-placement="bottom">
                        <ul>
                            <li class="active"><a href="icons.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full" class="glyphicons heart"><i></i></a></li>
                            <li><a href="icons.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full" class="glyphicons home"><i></i></a></li>
                            <li><a href="icons.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full" class="glyphicons bin"><i></i></a></li>
                        </ul>
                    </li>
                    <li class="search open hidden-phone hidden-tablet">
                        <form autocomplete="off" class="dropdown dd-1">
                            <input type="text" value="" placeholder="Type for suggestions .." data-toggle="typeahead" />
                            <button type="button" class="glyphicons search"><i></i></button>
                        </form>
                    </li>
                </ul>
                <!-- // Full Top Style END -->

                <!-- Quick Top Style -->
                <!-- // Quick Top Style END -->

                <!-- // Not Blank Page END -->


                <!-- Top Menu Right -->
                <ul class="topnav pull-right hidden-phone hidden-tablet hidden-desktop-1">

                    <!-- Themer -->
                    <li><a href="#themer" data-toggle="collapse" class="glyphicons eyedropper single-icon"><i></i></a></li>
                    <!-- // Themer END -->

                    <!-- Language menu -->
                    <li class="hidden-tablet hidden-phone hidden-desktop-1 dropdown dd-1 dd-flags" id="lang_nav">
                        <a href="#" data-toggle="dropdown"><img src="/common/theme/images/lang/en.png" alt="en" /></a>
                        <ul class="dropdown-menu pull-left">
                            <li class="active"><a href="?module=admin&amp;page=index&amp;url_rewrite=&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;sidebar_style=full&amp;top_style=full&amp;lang=en" title="English"><img src="/common/theme/images/lang/en.png" alt="English"> English</a></li>
                            <li><a href="?module=admin&amp;page=index&amp;url_rewrite=&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;sidebar_style=full&amp;top_style=full&amp;lang=ro" title="Romanian"><img src="/common/theme/images/lang/ro.png" alt="Romanian"> Romanian</a></li>
                            <li><a href="?module=admin&amp;page=index&amp;url_rewrite=&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;sidebar_style=full&amp;top_style=full&amp;lang=it" title="Italian"><img src="/common/theme/images/lang/it.png" alt="Italian"> Italian</a></li>
                            <li><a href="?module=admin&amp;page=index&amp;url_rewrite=&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;sidebar_style=full&amp;top_style=full&amp;lang=fr" title="French"><img src="/common/theme/images/lang/fr.png" alt="French"> French</a></li>
                            <li><a href="?module=admin&amp;page=index&amp;url_rewrite=&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;sidebar_style=full&amp;top_style=full&amp;lang=pl" title="Polish"><img src="/common/theme/images/lang/pl.png" alt="Polish"> Polish</a></li>
                        </ul>
                    </li>
                    <!-- // Language menu END -->

                    <!-- Profile / Logout menu -->
                    <li class="account dropdown dd-1">
                        <a data-toggle="dropdown" href="my_account_advanced.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full" class="glyphicons logout lock"><span class="hidden-tablet hidden-phone hidden-desktop-1">mosaicpro</span><i></i></a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="my_account_advanced.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full" class="glyphicons cogwheel">Settings<i></i></a></li>
                            <li><a href="my_account_advanced.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full" class="glyphicons camera">My Photos<i></i></a></li>
                            <li class="profile">
							<span>
								<span class="heading">Profile <a href="my_account_advanced.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full" class="pull-right">edit</a></span>
								<span class="img"></span>
								<span class="details">
									<a href="my_account_advanced.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full">Mosaic Pro</a>
									contact@mosaicpro.biz
								</span>
								<span class="clearfix"></span>
							</span>
                            </li>
                            <li>
							<span>
								<a class="btn btn-default btn-mini pull-right" href="login.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default&amp;top-sticky=false&amp;sidebar-sticky=false&amp;top_style=full&amp;sidebar_style=full">Sign Out</a>
							</span>
                            </li>
                        </ul>
                    </li>
                    <!-- // Profile / Logout menu END -->

                </ul>
                <!-- // Top Menu Right END -->
                <div class="clearfix"></div>

            </div>
            <!-- Top navbar END -->

            @yield('main-content')

        </div>
        <!-- // Content END -->

    </div>
    <div class="clearfix"></div>
    <!-- // Sidebar menu & content wrapper END -->

    <div id="footer" class="hidden-print">

        <!--  Copyright Line -->
        <div class="copy">&copy; 2012 - 2013 - <a href="http://www.mosaicpro.biz">MosaicPro</a> - All Rights Reserved. <a href="http://themeforest.net/item/quick-admin-template/4940725?ref=mosaicpro" target="_blank">Purchase Quick Admin on ThemeForest</a> - Current version: v1.3.3 / <a target="_blank" href="http://demo.mosaicpro.biz/quickadmin/CHANGELOG">changelog</a></div>
        <!--  End Copyright Line -->

    </div>
    <!-- // Footer END -->

</div>
<!-- // Main Container Fluid END -->

{{--@include('management.plugin.themer-options')--}}
{{--@include('management.plugin.model-gallery')--}}

<!-- JQuery -->
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<!-- Code Beautify -->
<script src="{{asset('/common/theme/scripts/plugins/other/js-beautify/beautify.js')}}"></script>
<script src="{{asset('/common/theme/scripts/plugins/other/js-beautify/beautify-html.js')}}"></script>

<!-- PrettyPhoto -->
<script src="{{asset('/common/theme/scripts/plugins/gallery/prettyphoto/js/jquery.prettyPhoto.js')}}"></script>

<!-- Global -->
<script>
    var basePath = '',
        commonPath = '{{asset("/common/")}}';
</script>

<!-- JQueryUI -->
<script src="{{asset('/common/theme/scripts/plugins/system/jquery-ui/js/jquery-ui-1.9.2.custom.min.js')}}"></script>

<!-- JQueryUI Touch Punch -->
<!-- small hack that enables the use of touch events on sites using the jQuery UI user interface library -->
<script src="{{asset('/common/theme/scripts/plugins/system/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js')}}"></script>


<!-- Modernizr -->
<script src="{{asset('/common/theme/scripts/plugins/system/modernizr.js')}}"></script>

<!-- Bootstrap -->
<script src="{{asset('/common/bootstrap/js/bootstrap.min.js')}}"></script>

<!-- SlimScroll Plugin -->
<script src="{{asset('/common/theme/scripts/plugins/other/jquery-slimScroll/jquery.slimscroll.min.js')}}"></script>

<!-- Common Demo Script -->
<script src="{{asset('/common/theme/scripts/demo/common.js?1372280934')}}"></script>

<!-- Holder Plugin -->
<script src="{{asset('/common/theme/scripts/plugins/other/holder/holder.js')}}"></script>
<script>
    Holder.add_theme("dark", {background:"#000", foreground:"#aaa", size:9});
    Holder.add_theme("white", {background:"#fff", foreground:"#c9c9c9", size:9});
</script>

<!-- Uniform Forms Plugin -->
<script src="{{asset('/common/theme/scripts/plugins/forms/pixelmatrix-uniform/jquery.uniform.min.js')}}"></script>

<!-- Bootstrap Extended -->
<script src="{{asset('/common/bootstrap/extend/bootstrap-select/bootstrap-select.js')}}"></script>
<script src="{{asset('/common/bootstrap/extend/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js')}}"></script>
<script src="{{asset('/common/bootstrap/extend/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js')}}"></script>
<script src="{{asset('/common/bootstrap/extend/jasny-fileupload/js/bootstrap-fileupload.js')}}"></script>
<script src="{{asset('/common/bootstrap/extend/bootbox.js')}}"></script>
<script src="{{asset('/common/bootstrap/extend/bootstrap-wysihtml5/js/wysihtml5-0.3.0_rc2.min.js')}}"></script>
<script src="{{asset('/common/bootstrap/extend/bootstrap-wysihtml5/js/bootstrap-wysihtml5-0.0.2.js')}}"></script>

<!-- Google Code Prettify -->
<script src="{{asset('/common/theme/scripts/plugins/other/google-code-prettify/prettify.js')}}"></script>

<!-- Gritter Notifications Plugin -->
<script src="{{asset('/common/theme/scripts/plugins/notifications/Gritter/js/jquery.gritter.min.js')}}"></script>

<!-- Notyfy Notifications Plugin -->
<script src="{{asset('/common/theme/scripts/plugins/notifications/notyfy/jquery.notyfy.js')}}"></script>

<!-- MiniColors Plugin -->
<script src="{{asset('/common/theme/scripts/plugins/color/jquery-miniColors/jquery.miniColors.js')}}"></script>

<!-- DateTimePicker Plugin -->
<script src="{{asset('/common/theme/scripts/plugins/forms/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js')}}"></script>

<!-- Cookie Plugin -->
<script src="{{asset('/common/theme/scripts/plugins/system/jquery.cookie.js')}}"></script>

<!-- Colors -->
<script>
    var primaryColor = '#4a8bc2',
        dangerColor = '#b55151',
        successColor = '#609450',
        warningColor = '#ab7a4b',
        inverseColor = '#45484d';
</script>

<!-- Themer -->
<script>
    var themerPrimaryColor = primaryColor;
</script>
<script src="{{asset('//common/theme/scripts/demo/themer.js')}}"></script>

<!-- Twitter Feed -->
<script src="{{asset('//common/theme/scripts/demo/twitter.js')}}"></script>

<!-- Easy-pie Plugin -->
<script src="{{asset('//common/theme/scripts/plugins/charts/easy-pie/jquery.easy-pie-chart.js')}}"></script>

<!-- Sparkline Charts Plugin -->
<script src="{{asset('//common/theme/scripts/plugins/charts/sparkline/jquery.sparkline.min.js')}}"></script>

<!-- Ba-Resize Plugin -->
<script src="{{asset('//common/theme/scripts/plugins/other/jquery.ba-resize.js')}}"></script>

<!-- Dashboard Demo Script -->
<script src="{{asset('//common/theme/scripts/demo/index.js?1372280934')}}"></script>


<!-- Google JSAPI -->
<script type="text/javascript" src="https://www.google.com/jsapi"></script>

<!--  Flot Charts Plugin -->
<script src="{{asset('//common/theme/scripts/plugins/charts/flot/jquery.flot.js')}}"></script>
<script src="{{asset('//common/theme/scripts/plugins/charts/flot/jquery.flot.pie.js')}}"></script>
<script src="{{asset('//common/theme/scripts/plugins/charts/flot/jquery.flot.tooltip.js')}}"></script>
<script src="{{asset('//common/theme/scripts/plugins/charts/flot/jquery.flot.selection.js')}}"></script>
<script src="{{asset('//common/theme/scripts/plugins/charts/flot/jquery.flot.resize.js')}}"></script>
<script src="{{asset('//common/theme/scripts/plugins/charts/flot/jquery.flot.orderBars.js')}}"></script>

<!-- Charts Helper Demo Script -->
<script src="{{asset('//common/theme/scripts/demo/charts.helper.js?1372280934')}}"></script>


<!-- Bootstrap Image Gallery -->
<script src="http://blueimp.github.com/JavaScript-Load-Image/load-image.min.js"></script>
<script src="{{asset('//common/bootstrap/extend/bootstrap-image-gallery/js/bootstrap-image-gallery.min.js')}}" type="text/javascript"></script>

</body>
</html>