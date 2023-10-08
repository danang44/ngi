@extends('master.adminlayout')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"> Trash Layanan</h1>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('layanan')}}">Layanan</a></li>
                <li class="breadcrumb-item active">Trash Artikel</li>
            </ol>


        </div>

    </div>



    <div class="content">
        <!-- <div class="card card-info card-outline">
                            <div class="card-header d-flex">
                                <div class="">
                                    <a href="" class="btn btn-primary">Restore All<i class="fas fa-plus-square"></i></a>
                                </div>
                                <div class=" justify-content-center">
                                    <a href="" class="btn btn-danger">Delete All<i class="fa-solid fa-minus-square"></i></a>
                                </div>
                            </div>
                        </div> -->

        <div class="card-body">
            <table class="table table-bordered">
                <tr>

                    <th>No</th>
                    <th>Judul</th>
                    <th>Icon</th>
                    <th>Deskripsi</th>
                    <th>Opsi</th>

                </tr>
                @if ($layanan->count() > 0)
                @foreach ($layanan as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->judul}}</td>

                    <td>
                        <!-- {{$item->gambar}} -->
                        <img src="{{asset('img/'.$item->icon)}}" width="50px" height="50px">
                    </td>
                    <td>{{$item->deskripsi}}</td>

                    <td>
                        <a class="btn btn-primary" href="{{url('layanan/restore-layanan',$item->id)}}"> Restore</a>

                        <hr>
                        <a class="btn btn-danger" onclick="confirmation(event)" href="{{url('layanan/delete-permanent',$item->id)}}" data-confirm-delete="true" method="post" class="d-inline"> Hapus </a>




                    </td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="7" class="text-center">Data Kosong</td>
                </tr>
                @endif

            </table>
        </div>
        <div class="card-footer"> </div>
    </div>

</div>
@endsection
