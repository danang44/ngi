@extends('master.adminlayout')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"> Data Artikel</h1>

        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard.index')}}">Home</a></li>
                <li class="breadcrumb-item active">Data Artikel</li>
            </ol>


        </div>

    </div>



    <div class="content">
        <div class="card card-info card-outline">
            <div class="card-header d-flex">
                <div class="">
                    <a href="{{route('create-artikel')}}" class="btn btn-success">Tambah Data &nbsp;<i class="fa-solid fa-plus"></i></a>
                </div>
                &nbsp;
                &nbsp;
                <div class=" justify-content-center">
                    <a href="{{route('trash-artikel')}}" class="btn btn-danger">Trash &nbsp;<i class="fa-solid fa-trash "></i></a>
                </div>
            </div>
        </div>

        <div class="card-body">
            <table class="table table-bordered">
                <tr>

                    <th>No</th>
                    <th>Judul</th>
                    <th>Gambar</th>
                    <th>Penulis</th>
                    <th>Tanggal</th>
                    <th>Deskripsi</th>
                    <th class="col-3s text-center">Opsi</th>

                </tr>
                @foreach ($artikel as $item)
                <tr>

                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->judul}}</td>
                    <td>
                        <img src="{{asset('img/'. $item->gambar)}}" width="200px" height="150px"></img>

                    </td>

                    <td>{{$item->author}}</td>
                    <td>{{date('d-m-Y',strtotime($item->tanggal))}}</td>
                    <td>{!! $item->deskripsi !!}</td>

                    <td>
                        <a class="btn btn-primary" href="{{url('update-artikel',$item->id)}}">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>

                        <hr>

                        <a class="btn btn-danger" onclick="confirmation(event)" href="{{url('delete-artikel',$item->id)}}" data-confirm-delete="true" method="post" class="d-inline">

                            <i class="fa-solid fa-trash"></i>

                    </td>
                </tr>
                @endforeach


            </table>
            {{$artikel->links()}}
        </div>

    </div>

</div>
@endsection
