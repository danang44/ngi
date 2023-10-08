@extends('master.adminlayout')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"> Trash Heeader</h1>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('header')}}">Header</a></li>
                <li class="breadcrumb-item active">Trash Header</li>
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
                    <th>Subjudul</th>
                    <th>Section</th>
                    <th>Opsi</th>


                </tr>
                @if ($header->count() > 0)
                @foreach ($header as $item)
                <tr>

                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->judul}}</td>


                    <td>{{$item->subjudul}}</td>
                    <td>{{$item->section}}</td>


                    <td>
                        <a class="btn btn-primary" href="{{url('card/restore-header',$item->id)}}"> Restore</a>

                        <hr>
                        <a class="btn btn-danger" onclick="confirmation(event)" href="{{url('header/delete-permanent',$item->id)}}" data-confirm-delete="true" method="post" class="d-inline"> Hapus </a>




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
