@extends('master.adminlayout')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"> Data Header</h1>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard.index')}}">Home</a></li>
                <li class="breadcrumb-item active">Data Header</li>
            </ol>


        </div>

    </div>



    <div class="content">
        <div class="card card-info card-outline">
            <div class="card-header">
                <div class="card-tools">
                    <a href="#" class="btn btn-success" onclick="create()">Tambah Data<i class="fas fa-plus-square"></i></a>

                </div>
            </div>

            <div class="card-body">
                <table class="table table-bordered">
                    <tr>

                        <th>No</th>
                        <th>Judul</th>
                        <th>Subjudul</th>
                        <th>Opsi</th>


                    </tr>
                    @foreach ($kategoris as $item)
                    <tr>

                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->nama}}</td>



                        <td>
                            <a class="btn btn-primary" href="{{url('update-header',$item->id)}}">
                                <i class="fa-solid fa-pen-to-square" style="color: #fafcff;"></i>

                                <a class="btn btn-danger" href="{{url('delete-header',$item->id)}}" onclick="confirmation(event)" href="{{url('delete-header',$item->id)}}" data-confirm-delete="true" method="post" class="d-inline" style="color : red">




                                    <i class="fa-solid fa-trash" style="color: #fafcff;"></i>

                        </td>
                    </tr>
                    @endforeach


                </table>
            </div>

        </div>

    </div>

    <!-- Content Row -->

    <!-- /.container-fluid -->
    <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create Header</h5>

                </div>
                <div class="modal-body">


                    <div class="card-body">
                        <form action="{{route('simpan-header')}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}

                            <div class="form-group">
                                <label>Judul</label>
                                <input type="text" id="judul" name="judul" class="form-control">

                            </div>


                            <div class="form-group">
                                <label>Sub Judul</label>
                                <input type="text" id="subjudul" name="subjudul" class="form-control">
                            </div>




                            <div class="form-group">
                                <button type="submit" class="btn btn-success"> Simpan</button>
                                <button type="button" class="btn-close btn btn-secondary" id="close" data-bs-dismiss="modal" aria-label="Close"> Batal </button>
                            </div>


                        </form>

                    </div>

                </div>

            </div>
        </div> -->

    <!-- Bootstrap core JavaScript-->
    <!-- Modal Jquery -->
    <script>
        $(document).ready(function() {

        });

        function create() {
            $.get("{{route('create-header')}}", {}, function(data, status) {
                $("#page").html(data);
                $("#exampleModal").modal('show');
            });

        }

        function store() {
            $.post("{{route('simpan-header')}}", {
                "_token": "{{ csrf_token() }}",
                nama: $("#nama").val(),
                logo: $("#logo").val(),
            }, function(data, status) {
                $("#page").html(data);
                $("#exampleModal").modal('hide');
            });

        }
    </script>


</div>
</div>
@endsection
