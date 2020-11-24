<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://bootadmin.net/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://bootadmin.net/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="https://bootadmin.net/css/datatables.min.css">
    <link rel="stylesheet" href="https://bootadmin.net/css/fullcalendar.min.css">
    <link rel="stylesheet" href="https://bootadmin.net/css/bootadmin.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <title>Dashboard | BootAdmin</title>
</head>
<body class="bg-light">

    <nav class="navbar navbar-expand navbar-dark bg-primary">
        <a class="sidebar-toggle mr-3" href="#"><i class="fa fa-bars"></i></a>
        <a class="navbar-brand" href="#">MyMobile Area</a>

        <div class="navbar-collapse collapse">
            <ul class="navbar-nav ml-auto">
                
                <li class="nav-item dropdown">
                    <a href="#" id="dd_user" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fas fa-fw fa-user-circle fa-2x"></i> {{ Auth::user()->name }}</a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd_user">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-fw fa-sign-out-alt"></i>{{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <div class="d-flex">
        <div class="sidebar sidebar-dark bg-dark">
            <ul class="list-unstyled">
                <li class="active"><a href="{{url('home')}}"><i class="fa fa-fw fa-home"></i> Home</a></li>
                @if (Auth::user()->hasRole('admin'))
                <li><a href="{{route('mobiles.index')}}"><i class="fa fa-fw fa-mobile-alt"></i> Mobiles</a></li>
                @endif
                <li>
                    <a href="#sm_base" data-toggle="collapse">
                        <i class="fa fa-fw fa-comments"></i> Links
                    </a>
                    @isset($lista_mobiles)
                    <ul style="overflow-y: scroll; max-height: 250px" id="sm_base" class="list-unstyled collapse">
                        @foreach($lista_mobiles as $mobile)
                        <li><a href="{{route('mobiles.show', $mobile)}}">{{$mobile->name}}</a></li>
                        @endforeach
                    </ul>
                    @endisset
                </li>
                <li><a href="{{url('/')}}"><i class="fa fa-fw fa-angle-double-left"></i> Back Home</a></li>
            </ul>
        </div>

        <div class="content p-4">

        		@yield('content')        	

        </div>
    </div>
</body>

<script src="https://bootadmin.net/js/jquery.min.js"></script>
<script src="https://bootadmin.net/js/bootstrap.bundle.min.js"></script>
<script src="https://bootadmin.net/js/datatables.min.js"></script>
<script src="https://bootadmin.net/js/moment.min.js"></script>
<script src="https://bootadmin.net/js/fullcalendar.min.js"></script>
<script src="https://bootadmin.net/js/bootadmin.min.js"></script>
<script type="text/javascript">
    @yield('js_content')
</script>
</html>