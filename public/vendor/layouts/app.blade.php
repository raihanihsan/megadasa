<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
        .popup-position{
            display: none;
            position: fixed;
            top:0;
            left: 0;
            background-color: rgba(0,0,0,0.3);
            width: 100%;
            height: 100%;
        }
        #popup-wrapper{
            width: 78%;
            margin:70px auto;
            text-align: left;
        }
        #popup-container{
            background-color: #fff;
            padding: 20px;
            border-radius: 4px;
        }
        #popup-wrapper p{
            text-align: right;
            
        }
        #popup-wrapper p a{
            color:red;
        }
        h4{
            text-align: center;
            font-weight: bold;
        }
        
    </style>

    <script type="text/javascript">
    <!--
        function toggle_visibility(id) {
           var e = document.getElementById(id);
           if(e.style.display == 'block')
              e.style.display = 'none';
           else
              e.style.display = 'block';
        }
    //-->
    

</script>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    Universitas Surabaya
                </a>
            </div>
            @include('popup.box')
            
            
            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    @if(Auth::check())
                    <li><a href="{{ url('/home') }}">Home</a></li>
                        @if(Auth::user()->jabatan=='Mahasiswa')
                        <li><a href="{{ url('/showAdministrasi') }}">Pengajuan Administrasi</a></li>
                        <li><a href="{{ url('/showSetJudul') }}">Judul</a></li>
                        @else
                            @if(Auth::user()->jabatan=='PAJ')
                            <li><a href="{{ url('/checkAdministrasi') }}" class="fa fa-btn fa-check-square">Check Administrasi</a></li>
                            <li><a href="{{url('/showSetTglUjian')}}"><i class="fa fa-btn fa-calendar"></i>Periode</a></li>
                            <li><a href="{{url('/showSetRuangUjian')}}"><i class="fa fa-btn fa-home"></i>Ruang Ujian</a></li>
                            <li><a href="{{url('/generatejadwalujian')}}"><i class="fa fa-btn fa-calendar"></i>Generate</a></li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                   More <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{url('/showFormInformasiMahasiswa')}}"><i class="fa fa-btn fa-info"></i>Informasi Mahasiswa</a></li>
                                    <li><a href="{{url('/showFormGantiJudul')}}"><i class="fa fa-btn fa-refresh"></i>Ganti Judul</a></li>
                                    <li><a href="{{url('/showsettingPetugas')}}"><i class="fa fa-btn fa-refresh"></i>Setting Petugas</a></li>
                                </ul>
                            </li>
                           
                            @else 
                                @if(Auth::user()->jabatan=='Korprog/Kalab')
                                    <li><a href="{{url('/showSetBidangIlmu')}}"><i class="fa fa-btn fa-book"></i>Bidang Ilmu</a></li>        
                                    <li><a href="{{url('/showsettingPetugas')}}"><i class="fa fa-btn fa-refresh"></i>Setting Petugas</a></li>
                                @endif
                                <li><a href="{{ url('/jadwalDosen') }}" class="fa fa-btn fa-check-square">Jadwal</a></li>

                            @endif
                        @endif
                    @endif
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="javascript:void(0)" onclick="toggle_visibility('popup-box1');"><i class="fa fa-btn fa-users"></i>Profile</a></li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
