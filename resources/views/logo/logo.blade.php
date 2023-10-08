@extends('master.adminlayout')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"> Data Logo</h1>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard.index')}}">Home</a></li>
                <li class="breadcrumb-item active">Data Logo</li>
            </ol>


        </div>

    </div>



    <div class="content">

        <div class="card card-info card-outline">
            <div class="card-header">
                <div class="card-tools">
                    <a href="#" class="btn btn-success" onclick="create()">Tambah Data &nbsp;<i class="fa-solid fa-plus"></i></a>
                    &nbsp;
                    <a href="{{route('trash-logo')}}" class="btn btn-danger">Trash <i class="fa-solid fa-trash "></i> </a>
                </div>

            </div>



            <div class="card-body">
                <table class="table table-bordered">
                    <tr>

                        <th>No</th>
                        <th>Nama</th>
                        <th>Logo</th>
                        <th>Opsi</th>


                    </tr>
                    @foreach ($logo as $item)
                    <tr>

                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->nama}}</td>

                        <td>
                            <!-- {{$item->gambar}} -->
                            <img src="{{asset('img/'.$item->logo)}}" width="150px" height="100px">
                        </td>

                        <td>
                            <a class="btn btn-primary" href="{{url('update-logo',$item->id)}}">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            <a class="btn btn-danger" onclick=" confirmation(event)" href="{{url('delete-logo',$item->id)}}" data-confirm-delete="true" method="post" class="d-inline">


                                <i class="fa-solid fa-trash"></i>


                        </td>
                    </tr>
                    @endforeach


                </table>
                {{$logo->links()}}

            </div>
            <div class="card-footer"> </div>
        </div>

    </div>

    <!-- Content Row -->

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create Logo</h5>

                </div>
                <div class="modal-body">
                    <!-- <div id="" class="p-2"> -->

                    <div class="card-body">
                        <form action="{{route('simpan-logo')}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}

                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" id="nama" name="nama" class="form-control">
                                <!-- <input type="file" id="judul" name="file" class="form-control" > -->
                            </div>

                            <div class="form-group">
                                <label>Logo</label><br>
                                <div class="img-input">
                                    <input type="file" id="logo" name="logo">
                                </div>
                                <br>
                                <div class="d-flex justify-content-center">
                                    <img class="img-preview" src="https://preyash2047.github.io/assets/img/no-preview-available.png?h=824917b166935ea4772542bec6e8f636" id="img-view" alt="" width="250px" height="150px">
                                </div>
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
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function() {

            });

            function create() {
                $.get("{{route('create-logo')}}", {}, function(data, status) {
                    $("#page").html(data);
                    $("#exampleModal").modal('show');
                });

            }

            function store() {
                $.post("{{route('simpan-logo')}}", {
                    "_token": "{{ csrf_token() }}",
                    nama: $("#nama").val(),
                    logo: $("#logo").val(),
                }, function(data, status) {
                    $("#page").html(data);
                    $("#exampleModal").modal('hide');
                });

            }
        </script>
        <!-- /.container-fluid -->
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script>
            $("#logo").change(function() {
                previewImage(this);
            });

            function previewImage(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#img-view').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }
        </script>
        <script>
            $("#logo").change(function() {
                previewImage(this);
            });

            function previewImage(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#img-view').attr('src', e.target.result);

                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }
        </script>
    </div>

</div>
@endsection
