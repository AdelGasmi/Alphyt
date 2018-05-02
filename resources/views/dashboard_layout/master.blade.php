<!DOCTYPE html>
<html lang="en"
      @if(app()->getLocale()==='ar')
      dir="rtl"
        @endif
>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('dashboard/plugins/images/favicon.png')}}">
    <title>{{$title}} - {{__('dashboard.dashboard')}}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script>
        window.Laravel ={!!
            json_encode([ 'csrfToken'=> csrf_token()])
         !!};
    </script>
    <link href="{{asset('dashboard/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css')}}"
          rel="stylesheet">

    <link href="{{asset('dashboard/css/style.css')}}" rel="stylesheet">

    <link href="{{asset('dashboard/css/colors/megna.css')}}" id="theme" rel="stylesheet">


    <!-- Menu CSS -->

    <link href="{{asset('dashboard/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css')}}" rel="stylesheet">

    <link href="{{asset('dashboard/plugins/bower_components/toast-master/css/jquery.toast.css')}}" rel="stylesheet">
{{----}}

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>

        ::-webkit-scrollbar {
            width: 12px;
        }

        ::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb {
            border-radius: 10px;
            -webkit-box-shadow: inset 0 0 6px #01c0c8;;
        }
    </style>
    @yield('css')

</head>

<body>
<div id="app">
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- Top Navigation -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header"><a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)"
                                          data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>

                <div class="top-left-part"><a class="logo" href="{{url('/')}}">
                        <img class="img-responsive center-block"
                             style="height: 60px;"
                             src="{{asset('img/logo.png')}}"
                             alt=""/>

                    </a>
                </div>
                <ul class="nav navbar-top-links navbar-left hidden-xs">
                    <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i
                                    class="icon-arrow-left-circle ti-menu"></i></a></li>

                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">


                    <li class="dropdown ">
                        <a class="dropdown-toggle waves-effect waves-light " data-toggle="dropdown" href="#">
                            <img class="img-circle img-responsive" src="{{asset('avatar/'.auth()->user()->avatar)}}"
                                 alt="user-img" style="height: 50px">
                        </a>


                        <ul class="dropdown-menu animated flipInY text-center">
                            <li><a href="{{url('profile')}}"><i class="ti-user"></i> Profile</a>

                            <li role="separator" class="divider"></li>
                            <li><a href="{{ route('logout') }}"
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                                            class="fa fa-power-off"></i> Se deconnecte</a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </ul>
                    </li>

                {{--<li class="right-side-toggle"><a class="waves-effect waves-light" href="javascript:void(0)"><i--}}
                {{--class="ti-settings"></i></a></li>--}}
                <!-- /.dropdown -->
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- End Top Navigation -->
        <!-- Left navbar-header -->
        <div class="navbar-default sidebar " role="navigation">
            <div class="sidebar-nav navbar-collapse">
                {{--<div class="user-profile">--}}
                {{----}}
                {{--</div>--}}
                <ul class="nav" id="side-menu">
                    <li>
                        <a id="users" href="javascript:void(0);" class="waves-effect">
                            <i class="icon-people fa-fw"></i>
                            <span class="hide-menu">
    Utilisateurs
                                <span class="fa arrow"></span>
        </span>
                        </a>

                        <ul class="nav nav-second-level">
                            @can('access to list users')

                                @foreach(\Spatie\Permission\Models\Role::all() as $role)
                                    <li>
                                        <a href="{{url('allUser/'.$role->name)}}">
                                            {{$role->name}}
                                        </a>
                                    </li>
                                @endforeach
                            @endcan
                            @can('add user')
                                <li><a href="{{url('addUser/')}}">Ajouter Utilisateur</a></li>
                            @endcan

                        </ul>
                    </li>


                    <ul class="nav" id="side-menu">
                        <li>
                            <a id="products" href="javascript:void(0);" class="waves-effect">
                                <i class="icon-people fa-fw"></i>
                                <span class="hide-menu">
    Produits
                                <span class="fa arrow"></span>
        </span>
                            </a>

                            <ul class="nav nav-second-level">
                                <li><a href="{{url('addUser/')}}">Ajouter Utilisateur</a></li>
                            </ul>

                        </li>


            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!--row -->
    <div class="row">
        @yield('content')
    </div>

</div>
<!-- /.container-fluid -->
<footer class="footer text-center">  <span>Powered by Stqdam version 1.0.0  <a class="text-primary"
                                                                               href="http://stqdam.com"
                                                                               target="_blank">stqdam.com</a></span>
</footer>
</div>
<!-- /#page-wrapper -->
</div>
</div>
<script>

    var urlBase = '{{url('/')}}';
    var _token = '{{csrf_token()}}';
</script>
<!-- /wrapper -->
{{--<script src="{{asset('js/app.js')}}" type="text/javascript"></script>--}}

<!-- jQuery -->
<script src="{{asset('dashboard/plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{asset('dashboard/bootstrap/dist/js/tether.min.js')}}"></script>
<script src="{{asset('dashboard/bootstrap/dist/js/bootstrap.min.js')}}"></script>

@if(app()->getLocale()==='en')
    <script src="{{asset('dashboard/plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js')}}"></script>
@else
    <script src="{{asset('dashboard/plugins/bower_components/bootstrap-rtl-master/dist/js/bootstrap-rtl.min.js')}}"></script>
@endif
<!-- Menu Plugin JavaScript -->
<script src="{{asset('dashboard/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js')}}"></script>
<!--slimscroll JavaScript -->
<script src="{{asset('dashboard/js/jquery.slimscroll.js')}}"></script>
<!--Wave Effects -->
<script src="{{asset('dashboard/js/waves.js')}}"></script>
<script src="{{asset('dashboard/js/custom.js')}}"></script>
<script src="{{asset('js/LanguageSwitcher.js')}}"></script>
<script src="{{asset('js/notification.js')}}"></script>

<script>
    $('#{{$active}}').addClass('active');
    @if(app()->getLocale()==='ar')
    $('.fa.arrow').addClass('fa-angle-left').removeClass('arrow')
    $('.icon-arrow-left-circle').addClass('icon-arrow-right-circle').removeClass('.icon-arrow-left-circle')
    $('.page-title').closest('div').removeClass('col-md-pull-8')
    $('.breadcrumb').closest('div').removeClass('col-md-push-4')
    @endif
</script>
<script src="{{asset('js/timeago/jquery.timeago.js')}}"></script>
@if(app()->getLocale()!='en')
    <script src="{{asset('js/timeago/jquery.timeago.'.app()->getLocale().'.js')}}"></script>
@endif
<script>
    jQuery("time.timeago").timeago();
</script>
@yield('js')
</body>

</html>
