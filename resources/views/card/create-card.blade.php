@extends('master.adminlayout')
@section('content')
<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Create Data Portfolio</h1>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('card')}}">Portfolio</a></li>
                <li class="breadcrumb-item active">Create Portfolio</li>
            </ol>


        </div>

    </div>

    <div class="content">
        <div class="card card-info card-outline">

        </div>

        <div class="card-body">
            <form action="{{route('simpan-card')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}

                <div class="form-group">
                    <label>Judul</label>
                    <input type="text" id="judul" name="judul" class="form-control">
                </div>

                <!-- <input type="file" id="judul" name="file" class="form-control" > -->

                <div class="form-group">
                    <label>Gambar</label><br>
                    <div class="img-input">
                        <input type="file" id="gambar" name="gambar">
                    </div>
                    <br>
                    <div class="d-flex justify-content-center">
                        <img class="img-preview" src="https://preyash2047.github.io/assets/img/no-preview-available.png?h=824917b166935ea4772542bec6e8f636" id="img-view" alt="" width="250px" height="150px">
                    </div>
                </div>

                <div class="form-group">
                    <label>Kategori</label>
                    <input type="text" id="kategori" name="kategori" class="form-control">


                </div>
                <div class="form-group">
                    <label>Tanggal</label>
                    <input type="date" id="tanggal" name="tanggal" class="form-control">
                </div>
                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea class="form-control mt-5" name="deskripsi" maxlength="30" id="editor" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <label>Konten Lengkap</label>
                    <textarea class="form-control mt-5" name="kontenlengkap" id="kontenlengkap" cols="30" rows="50"></textarea>
                </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-success"> Simpan</button>
                </div>

        </div>
        </form>

    </div>


</div>
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });
</script>

<script>
    ClassicEditor
        .create(document.querySelector('#kontenlengkap'))
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });
</script>
<script>
    $("#gambar").change(function() {
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
@endsection
