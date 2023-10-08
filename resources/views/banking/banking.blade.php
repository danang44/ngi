    @extends('master.adminlayout')
    @section('content')
    <div class="container-fluid">

        <!-- Page Heading -->

        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"> Data Portfolio</h1>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard.index')}}">Home</a></li>
                    <li class="breadcrumb-item active">Data Portfolio</li>
                </ol>


            </div>

        </div>



        <div class="content">
            <div class="card card-info card-outline">
                <div class="card-header">
                    <div class="card-tools">
                        <a href="{{route('create-banking')}}" class="btn btn-success" onclick="create()">Tambah Data<i class="fas fa-plus-square"></i></a>
                        <a href="{{route('trash-banking')}}" class="btn btn-danger"><i class="fa-solid fa-trash " style="color: #f1f4f9;"></i> Trash </a>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table table-bordered ">
                        <tr>

                            <th>No</th>
                            <th>Judul</th>
                            <th>Gambar</th>
                            <th>Kategori</th>
                            <th>Tanggal</th>
                            <th>Deskripsi</th>
                            <th>Opsi</th>


                        </tr>

                        <tr>
                            @foreach ($banking as $item)
                            <td>{{$loop->iteration}} </td>
                            <td>{{$item->judul}} </td>

                            <td>

                                <img src="{{asset('img/'.$item->gambar)}}" width="150px" height="150px">
                            </td>

                            <td>{{$item->kategori}} </td>
                            <td> {{date('d-m-Y',strtotime($item->tanggal))}}</td>
                            <td>{!!$item->deskripsi!!}</td>

                            <td>
                                <a class="btn btn-primary" href="{{url('update-banking',$item->id)}}">
                                    <i class="fa-solid fa-pen-to-square" style="color: #fafcff;"></i>
                                </a>

                                <a class="btn btn-danger" onclick="confirmation(event)" href="{{url('delete-banking',$item->id)}}  " data-confirm-delete="true" method="post" class="d-inline" style="color : red">



                                    <i class="fa-solid fa-trash" style="color: #fafcff;"></i>
                                </a>


                            </td>
                        </tr>
                        @endforeach



                    </table>

                </div>
                <div class="card-footer"> </div>
            </div>

        </div>

        <!-- Content Row -->

        <!-- /.container-fluid -->

    </div>
    @endsection
