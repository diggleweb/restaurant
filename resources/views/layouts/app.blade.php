<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

        
        <link rel="dns-prefetch" href="https://fonts.gstatic.com"/>
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css"/>

        <link rel="stylesheet" type="text/css"
              href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"/>
         <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
        <link href="{{ asset('AdminPanel/css/material-dashboard.css?v=2.1.1') }}" rel="stylesheet"/>
       
        <link href="{{ asset('AdminPanel/demo/demo.css') }}" rel="stylesheet"/>
        @stack('css')
    </head>
    <body>
        <div id="app">
            <div class="wrapper ">
                @if(Request::is('admin*'))
                @include('layouts.sidebar')
                @endif

                <div class="main-panel">
                    @if(Request::is('admin*'))
                    @include('layouts.topbar')
                    @endif
                    <!-- End Navbar -->
                    @yield('content')

                    @if(Request::is('admin*'))
                    @include('layouts.footer')
                    @endif
                </div>
            </div>
            <div class="fixed-plugin">
                <div class="dropdown show-dropdown">
                    <a href="#" data-toggle="dropdown">
                        <i class="fa fa-cog fa-2x"> </i>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header-title"> Sidebar Filters</li>
                        <li class="adjustments-line">
                            <a href="javascript:void(0)" class="switch-trigger active-color">
                                <div class="badge-colors ml-auto mr-auto">
                                    <span class="badge filter badge-purple" data-color="purple"></span>
                                    <span class="badge filter badge-azure" data-color="azure"></span>
                                    <span class="badge filter badge-green" data-color="green"></span>
                                    <span class="badge filter badge-warning" data-color="orange"></span>
                                    <span class="badge filter badge-danger" data-color="danger"></span>
                                    <span class="badge filter badge-rose active" data-color="rose"></span>
                                </div>
                                <div class="clearfix"></div>
                            </a>
                        </li>
                        <li class="header-title">Images</li>
                        <li class="active">
                            <a class="img-holder switch-trigger" href="javascript:void(0)">
                                <img src="{{ asset('AdminPanel/img/sidebar-1.jpg') }}" alt="">
                            </a>
                        </li>
                        <li>
                            <a class="img-holder switch-trigger" href="javascript:void(0)">
                                <img src="{{ asset('AdminPanel/img/sidebar-2.jpg') }}" alt="">
                            </a>
                        </li>
                        <li>
                            <a class="img-holder switch-trigger" href="javascript:void(0)">
                                <img src="{{ asset('AdminPanel/img/sidebar-3.jpg') }}" alt="">
                            </a>
                        </li>
                        <li>
                            <a class="img-holder switch-trigger" href="javascript:void(0)">
                                <img src="{{ asset('AdminPanel/img/sidebar-4.jpg') }}" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <script src="{{ asset('AdminPanel/js/core/jquery.min.js') }}"></script>
        <script src="{{ asset('AdminPanel/js/core/popper.min.js') }}"></script>
        <script src="{{ asset('AdminPanel/js/core/bootstrap-material-design.min.js') }}"></script>
        <script src="{{ asset('AdminPanel/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
        
        <script src="{{ asset('AdminPanel/js/plugins/moment.min.js') }}"></script>
        
        <script src="{{ asset('AdminPanel/js/plugins/sweetalert2.js') }}"></script>
        
        <script src="{{ asset('AdminPanel/js/plugins/jquery.validate.min.js') }}"></script>
        
        <script src="{{ asset('AdminPanel/js/plugins/jquery.bootstrap-wizard.js') }}"></script>
        
        <script src="{{ asset('AdminPanel/js/plugins/bootstrap-selectpicker.js')}}"></script>
        
        <script src="{{ asset('AdminPanel/js/plugins/bootstrap-datetimepicker.min.js') }}"></script>
        
        <script src="{{ asset('AdminPanel/js/plugins/jquery.dataTables.min.js')}}"></script>
        
        <script src="{{ asset('AdminPanel/js/plugins/bootstrap-tagsinput.js') }}"></script>
        
        <script src="{{ asset('AdminPanel/js/plugins/jasny-bootstrap.min.js')}}"></script>
        
        <script src="{{ asset('AdminPanel/js/plugins/fullcalendar.min.js') }}"></script>
        
        <script src="{{ asset('AdminPanel/js/plugins/jquery-jvectormap.js') }}"></script>
        
        <script src="{{ asset('AdminPanel/js/plugins/nouislider.min.js') }}"></script>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
        
        <script src="{{ asset('AdminPanel/js/plugins/arrive.min.js') }}"></script>
        
<!--        <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>-->
        
        <script src="{{ asset('AdminPanel/js/plugins/chartist.min.js') }}"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>


        <script src="{{ asset('AdminPanel/js/plugins/bootstrap-notify.js') }}"></script>
        
<!--        <script src="{{ asset('AdminPanel/js/material-dashboard.min.js?v=2.1.0') }}" type="text/javascript"></script>-->
        
        <script src="{{ asset('AdminPanel/demo/demo.js') }}"></script>
        
        <script>
$(document).ready(function () {
    $().ready(function () {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

        if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
            if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
                $('.fixed-plugin .dropdown').addClass('open');
            }

        }

        $('.fixed-plugin a').click(function (event) {
            // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
            if ($(this).hasClass('switch-trigger')) {
                if (event.stopPropagation) {
                    event.stopPropagation();
                } else if (window.event) {
                    window.event.cancelBubble = true;
                }
            }
        });

        $('.fixed-plugin .active-color span').click(function () {
            $full_page_background = $('.full-page-background');

            $(this).siblings().removeClass('active');
            $(this).addClass('active');

            var new_color = $(this).data('color');

            if ($sidebar.length != 0) {
                $sidebar.attr('data-color', new_color);
            }

            if ($full_page.length != 0) {
                $full_page.attr('filter-color', new_color);
            }

            if ($sidebar_responsive.length != 0) {
                $sidebar_responsive.attr('data-color', new_color);
            }
        });

        $('.fixed-plugin .background-color .badge').click(function () {
            $(this).siblings().removeClass('active');
            $(this).addClass('active');

            var new_color = $(this).data('background-color');

            if ($sidebar.length != 0) {
                $sidebar.attr('data-background-color', new_color);
            }
        });

        $('.fixed-plugin .img-holder').click(function () {
            $full_page_background = $('.full-page-background');

            $(this).parent('li').siblings().removeClass('active');
            $(this).parent('li').addClass('active');


            var new_image = $(this).find("img").attr('src');

            if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                $sidebar_img_container.fadeOut('fast', function () {
                    $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                    $sidebar_img_container.fadeIn('fast');
                });
            }

            if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                $full_page_background.fadeOut('fast', function () {
                    $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                    $full_page_background.fadeIn('fast');
                });
            }

            if ($('.switch-sidebar-image input:checked').length == 0) {
                var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
                var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
            }

            if ($sidebar_responsive.length != 0) {
                $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
            }
        });

        $('.switch-sidebar-image input').change(function () {
            $full_page_background = $('.full-page-background');

            $input = $(this);

            if ($input.is(':checked')) {
                if ($sidebar_img_container.length != 0) {
                    $sidebar_img_container.fadeIn('fast');
                    $sidebar.attr('data-image', '#');
                }

                if ($full_page_background.length != 0) {
                    $full_page_background.fadeIn('fast');
                    $full_page.attr('data-image', '#');
                }

                background_image = true;
            } else {
                if ($sidebar_img_container.length != 0) {
                    $sidebar.removeAttr('data-image');
                    $sidebar_img_container.fadeOut('fast');
                }

                if ($full_page_background.length != 0) {
                    $full_page.removeAttr('data-image', '#');
                    $full_page_background.fadeOut('fast');
                }

                background_image = false;
            }
        });

        $('.switch-sidebar-mini input').change(function () {
            $body = $('body');

            $input = $(this);

            if (md.misc.sidebar_mini_active == true) {
                $('body').removeClass('sidebar-mini');
                md.misc.sidebar_mini_active = false;

                $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

            } else {

                $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

                setTimeout(function () {
                    $('body').addClass('sidebar-mini');

                    md.misc.sidebar_mini_active = true;
                }, 300);
            }

            // we simulate the window Resize so the charts will get updated in realtime.
            var simulateWindowResize = setInterval(function () {
                window.dispatchEvent(new Event('resize'));
            }, 180);

            // we stop the simulation of Window Resize after the animations are completed
            setTimeout(function () {
                clearInterval(simulateWindowResize);
            }, 1000);

        });
    });
});
        </script>
        @stack('scripts')
    </body>
</html>
