@extends('master.adminlayout')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"> Data Layanan</h1>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard.index')}}">Home</a></li>
                <li class="breadcrumb-item active">Data Layanan</li>
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
                    <a href="{{route('trash-layanan')}}" class="btn btn-danger"> Trash <i class="fa-solid fa-trash"></i></a>
                </div>
            </div>

            <div class="card-body">
                <table class="table table-bordered ">
                    <tr>

                        <th>No</th>
                        <th>Judul</th>
                        <th>Icon</th>
                        <th>Deskripsi</th>
                        <th>Opsi</th>


                    </tr>
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
                            <a class="btn btn-primary" href="{{url('update-layanan',$item->id)}}">
                                <i class="fa-solid fa-pen-to-square"></i>

                            </a>
                            <hr>
                            <a class="btn btn-danger" onclick="confirmation(event)" href="{{url('delete-layanan',$item->id)}}" data-confirm-delete="true" method="post" class="d-inline">


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
                    <h5 class="modal-title" id="exampleModalLabel">Create Layanan</h5>

                </div>
                <div class="modal-body">
                    <!-- <div id="" class="p-2"> -->

                    <div class="card-body">
                        <form action="{{route('simpan-layanan')}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}

                            <div class="form-group">
                                <label>Judul</label>
                                <input type="text" id="judul" name="judul" class="form-control">
                            </div>

                            <!-- <input type="file" id="judul" name="file" class="form-control" > -->



                            <div class="form-group">
                                <label>Gambar</label><br>
                                <div class="img-input">
                                    <input type="file" id="icon" name="icon">
                                </div>
                                <br>
                                <div class="d-flex justify-content-center">
                                    <img class="img-preview-icon" src="https://preyash2047.github.io/assets/img/no-preview-available.png?h=824917b166935ea4772542bec6e8f636" id="img-view" alt="" width="250px" height="150px">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Deskripsi</label>
                                <textarea class="form-control mt-5" name="deskripsi" id="deskripsi" cols="30" rows="10"></textarea>
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
            $.get("{{route('create-layanan')}}", {}, function(data, status) {
                $("#page").html(data);
                $("#exampleModal").modal('show');
            });
        }
    </script>

</div>
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<script>
    ClassicEditor
        .create(document.querySelector('#deskripsi'))
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });
</script>
<script>
    $("#icon").change(function() {
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
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

@endsection
