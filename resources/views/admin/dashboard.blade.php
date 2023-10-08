@extends('master.adminlayout')

@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>

    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <a href="{{route('image')}}">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xl font-weight-bold text-primary text-uppercase mb-1">
                                    Data Slider</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                            </div>
                            <div class="col-auto">
                                @php
                                $slider = DB::table('images')->count();
                                @endphp
                                <i class="fas fa-images fa-2x text-gray-300"></i>
                                <span class="badge badge-danger navbar-badge">{{$slider}}</span>

                            </div>
                        </div>
                    </div>
                </a>

            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <a href="{{route('layanan')}}">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xl font-weight-bold text-primary text-uppercase mb-1">
                                    Data Layanan</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                            </div>
                            <div class="col-auto">
                                @php
                                $layanan = DB::table('layanans')->count();
                                @endphp
                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                <span class="badge badge-danger navbar-badge">{{$layanan}}</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <a href="{{route('artikel')}}">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xl font-weight-bold text-primary text-uppercase mb-1">
                                    Data Artikel</div>

                                <div class="h5 mb-0 font-weight-bold text-gray-800"></div>

                            </div>
                            <div class="col-auto">
                                @php
                                $artikel = DB::table('artikels')->count();
                                @endphp
                                <i class="fas fa-newspaper fa-2x text-gray-300"></i>
                                <span class="badge badge-danger navbar-badge">{{$artikel}}</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <a href="{{route('logo')}}">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xl font-weight-bold text-primary text-uppercase mb-1">
                                    Data Logo</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                            </div>
                            <div class="col-auto">
                                @php
                                $logo = DB::table('logos')->count();
                                @endphp
                                <i class="fas fa-image fa-2x text-gray-300"></i>
                                <span class="badge badge-danger navbar-badge">{{$logo}}</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <a href="{{route('header')}}">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xl font-weight-bold text-primary text-uppercase mb-1">
                                    Data Header</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                            </div>
                            <div class="col-auto">
                                @php
                                $header = DB::table('headers')->count();
                                @endphp
                                <i class="fas fa-heading fa-2x text-gray-300"></i>
                                <span class="badge badge-danger navbar-badge">{{$header}}</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <a href="{{route('card')}}">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xl font-weight-bold text-primary text-uppercase mb-1">
                                    Portfolio</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                            </div>
                            <div class="col-auto">
                                @php
                                $card = DB::table('cards')->count();
                                @endphp
                                <i class="fas fa-file fa-2x text-gray-300"></i>
                                <span class="badge badge-danger navbar-badge">{{$card}}</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <a href="{{route('kontak')}}">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xl font-weight-bold text-primary text-uppercase mb-1">
                                    Data Kontak</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                            </div>
                            <div class="col-auto">
                                @php
                                $kontak = DB::table('kontaks')->count();
                                @endphp
                                <i class="fas fa-address-book fa-2x text-gray-300"></i>
                                <span class="badge badge-danger navbar-badge">{{$kontak}}</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <a href="{{route('video')}}">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xl font-weight-bold text-primary text-uppercase mb-1">
                                    Data Video</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                            </div>
                            <div class="col-auto">
                                @php
                                $video = DB::table('videos')->count();
                                @endphp
                                <i class="fas fa-video fa-2x text-gray-300"></i>
                                <span class="badge badge-danger navbar-badge">{{$video}}</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <a href="{{route('compro')}}">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xl font-weight-bold text-primary text-uppercase mb-1">
                                    Data Company PROFILE</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                            </div>
                            <div class="col-auto">
                                @php
                                $compro = DB::table('compros')->count();
                                @endphp
                                <i class="fas fa-building fa-2x text-gray-300"></i>
                                <span class="badge badge-danger navbar-badge">{{$compro}}</span>

                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        @if (Auth::user()->role == 'admin')
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <a href="{{route('user')}}">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xl font-weight-bold text-primary text-uppercase mb-1">
                                    Data Manajemen User</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                            </div>
                            <div class="col-auto">
                                @php
                                $user = DB::table('users')->count();
                                @endphp
                                <i class="fas fa-users fa-2x text-gray-300"></i>
                                <span class="badge badge-danger navbar-badge">{{$user}} </span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        @endif




    </div>


</div>
@endsection
