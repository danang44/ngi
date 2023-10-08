@extends('master.adminlayout')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->


    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"> Data Kontak</h1>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard.index')}}">Home</a></li>
                <li class="breadcrumb-item active">Data Kontak</li>
            </ol>


        </div>

    </div>



    <div class="content">
        <div class="card card-info card-outline">
            <div class="card-header">
                <div class="card-tools">
                    <a href="#" class="btn btn-success" onclick="create()">Tambah Data &nbsp;
                        <i class="fa-solid fa-plus"></i></a>
                    &nbsp;

                </div>
            </div>

            <div class="card-body">
                <table class="table table-bordered ">
                    <tr>

                        <th>No</th>
                        <th>Judul</th>
                        <th>Icon</th>
                        <th>Deskripsi</th>
                        <th>Nama Tombol </th>
                        <th>Url</th>
                        <th>Opsi</th>

                    </tr>
                    @foreach ($kontak as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->judul}}</td>

                        <td>
                            <!-- {{$item->gambar}} -->
                            <img src="{{asset('img/'.$item->ikon)}}" width="50px" height="50px">
                        </td>
                        <td>
                            {{$item->deskripsi}}
                        </td>
                        <td>
                            {{$item->link}}
                        </td>
                        <td>
                            {!!$item->url!!}
                        </td>
                        <td>
                            <a class="btn btn-primary" href="{{url('update-kontak',$item->id)}}">
                                <i class="fa-solid fa-pen-to-square"></i>

                            </a>
                            <hr>
                            <a class="btn btn-danger" onclick="confirmation(event)" href="{{url('delete-kontak',$item->id)}}" data-confirm-delete="true" method="post" class="d-inline">


                                <i class="fa-solid fa-trash"></i>


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
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create Kontak</h5>

                </div>
                <div class="modal-body">
                    <!-- <div id="" class="p-2"> -->

                    <div class="card-body">
                        <form action="{{route('simpan-kontak')}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}

                            <div class="form-group">
                                <label>Judul</label>
                                <input type="text" id="judul" name="judul" class="form-control">
                            </div>

                            <!-- <input type="file" id="judul" name="file" class="form-control" > -->

                            <div class="form-group">
                                <label>Icon</label><br>
                                <div class="img-input">
                                    <input type="file" id="ikon" name="ikon">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Deskripsi</label>
                                <input type="text" id="deskripsi" name="deskripsi" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Nama Tombol</label>
                                <input type="text" id="link" name="link" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>URL</label>
                                <textarea class="form-control" id="url" name="url" class="form-control"> </textarea>

                            </div>


                            <div class="form-group">
                                <button type="submit" class="btn btn-success"> Simpan</button>
                                <button type="button" class="btn-close btn btn-danger" id="close" data-bs-dismiss="modal" aria-label="Close"> Batal </button>
                            </div>

                    </div>
                    </form>

                </div>

            </div>

        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <!-- Modal Jquery -->
    <script>
        $(document).ready(function() {

        });

        function create() {
            $.get("{{route('create-kontak')}}", {}, function(data, status) {
                $("#page").html(data);
                $("#exampleModal").modal('show');
            });
        }
    </script>

</div>



@endsection
