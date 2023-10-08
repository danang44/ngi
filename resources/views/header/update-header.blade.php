@extends('master.adminlayout')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            !-->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Ubah Data Header</h1>

    </div>

    <div class="content">
        <div class="card card-info card-outline">

        </div>


        <div class="card-body">
            <form action="{{url('ubah-header',$header->id)}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}

                <div class="form-group">
                    <label>Judul</label>
                    <input type="text" id="judul" name="judul" class="form-control" value=" {{$header->judul }} ">
                    <!-- <input type="file" id="judul" name="file" class="form-control" > -->
                </div>


                <div class="form-group">
                    <label>SubJudul</label>
                    <input type="text" id="subjudul" name="subjudul" class="form-control" value="{{$header->subjudul}}">
                </div>
                <div class="form-group">
                    <label>Section</label>
                    <input type="text" id="section" name="section" class="form-control" value="{{$header->section}}">
                </div>




                <div class="form-group">
                    <button type="submit" class="btn btn-success" onclick="store()"> Simpan</button>
                </div>

        </div>
        </form>

    </div>


</div>
@endsection
