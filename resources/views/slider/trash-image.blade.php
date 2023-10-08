@extends('master.adminlayout')
@section('content')

<div class="container-fluid">

    <!-- Page Heading -->

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"> Trash Image</h1>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('image')}}">Image</a></li>
                <li class="breadcrumb-item active">Trash Image</li>
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
                    <th>Nama</th>
                    <th>Slide</th>
                    <th>Opsi</th>

                </tr>
                @if ($image->count() > 0)
                @foreach ($image as $item)
                <tr>

                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->logo}}</td>
                    <td>

                        <img src="{{asset('img/'. $item->slide)}}" width="150px" height="100px"></img>
                    </td>

                    <td>
                        <a class="btn btn-primary" href="{{url('image/restore-image',$item->id)}}"> Restore</a>

                        <hr>
                        <a class="btn btn-danger" onclick="confirmation(event)" href="{{url('image/delete-permanent',$item->id)}}" data-confirm-delete="true" method="post" class="d-inline"> Hapus </a>




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
