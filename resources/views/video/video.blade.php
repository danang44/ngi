@extends('master.adminlayout')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"> Data Video</h1>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard.index')}}">Home</a></li>
                <li class="breadcrumb-item active">Data Video</li>
            </ol>


        </div>

    </div>



    <div class="content">
        <div class="card card-info card-outline">
            <div class="card-header">
                <div class="card-tools">
                    <a href="#" class="btn btn-success" onclick="create()">Tambah Data &nbsp;<i class="fa-solid fa-plus"></i></a>

                </div>
            </div>

            <div class="card-body">
                <table class="table table-bordered">
                    <tr>

                        <th>No</th>
                        <th>Judul</th>
                        <th>Deskripsi</th>


                        <th>Video</th>
                        <th>Opsi</th>


                    </tr>
                    @foreach ($video as $item)
                    <tr>

                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->header}}</td>
                        <td>{{$item->subheader}}</td>



                        <td>

                            {{$item->video}}
                        </td>

                        <td>
                            <a class="btn btn-primary" href="{{url('update-video',$item->id)}}"> <i class="fas fa-edit"></i></a>
                            <hr>
                            <a class="btn btn-danger" onclick=" confirmation(event)" href="{{url('delete-video',$item->id)}}" data-confirm-delete="true" method="post" class="d-inline">




                                <i class="fa-solid fa-trash"></i>

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
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create Video</h5>

                </div>
                <div class="modal-body">
                    <!-- <div id="" class="p-2"> -->

                    <div class="card-body">
                        <form action="{{route('simpan-video')}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}

                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" id="nama" name="nama" class="form-control">
                                <!-- <input type="file" id="judul" name="file" class="form-control" > -->
                            </div>


                            <div class="form-group">
                                <label>Video</label>
                                <input type="text" id="video" name="video" class="form-control">
                            </div>




                            <div class="form-group">
                                <button type="submit" class="btn btn-success"> Simpan</button>
                                <button type="button" class="btn-close btn btn-danger" id="close" data-bs-dismiss="modal" aria-label="Close"> Batal </button>
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
                $.get("{{route('create-video')}}", {}, function(data, status) {
                    $("#page").html(data);
                    $("#exampleModal").modal('show');
                });

            }

            function store() {
                $.post("{{route('simpan-video')}}", {
                    "_token": "{{ csrf_token() }}",
                    nama: $("#nama").val(),
                    video: $("#video").val(),
                }, function(data, status) {
                    $("#page").html(data);
                    $("#exampleModal").modal('hide');
                });

            }
        </script>

    </div>
</div>
@endsection
