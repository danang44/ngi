<!-- End of Topbar -->
@extends('master.adminlayout')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">


    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Create Data Artikel</h1>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('artikel')}}">Artikel</a></li>
                <li class="breadcrumb-item active">Create Artikel</li>
            </ol>


        </div>


    </div>

    <div class="content">
        <div class="card card-info card-outline">

        </div>
        <div class="card-body">
            <form action="{{route('simpan-artikel')}}" method="post" enctype="multipart/form-data">
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
                    <label>Penulis</label>
                    <input type="text" id="author" name="author" class="form-control">
                </div>
                <div class="form-group">
                    <label>Tanggal</label>
                    <input type="date" id="tanggal" name="tanggal" class="form-control">
                </div>
                <br>
                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea class="form-control mt-5" name="deskripsi" id="editor" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <label>Artikel Lengkap</label>
                    <textarea class="form-control mt-5" name="artikellengkap" id="artikellengkap" cols="30" rows="10"></textarea>
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
        .create(document.querySelector('#artikellengkap'))
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });
</script>

<script>
    CKEDITOR.replace('content', {
        fullPage: true,
        extraPlugins: 'font,panelbutton,colorbutton,colordialog,justify,indentblock,aparat,buyLink',
        // You may want to disable content filtering because if you use full page mode, you probably
        // want to  freely enter any HTML content in source mode without any limitations.
        allowedContent: true,
        autoGrow_onStartup: true,
        enterMode: CKEDITOR.ENTER_BR
    });
</script>

<script>
    CKEDITOR.replace('editor1', {
        fullPage: true,
        allowedContent: true,
        autoGrow_onStartup: true,
        enterMode: CKEDITOR.ENTER_BR
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
