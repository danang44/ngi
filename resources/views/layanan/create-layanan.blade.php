@extends('master.adminlayout')
@section('content')
<div class="container-fluid">


    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Create Data Link</h1>

    </div>

    <div class="content">
        <div class="card card-info card-outline">

        </div>

        <div class="card-body">
            <form action="{{route('simpan-layanan')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}

                <div class="form-group">
                    <label>Judul</label>
                    <input type="text" id="judul" name="judul" class="form-control">
                </div>

                <!-- <input type="file" id="judul" name="file" class="form-control" > -->



                <div class="form-group">
                    <label>Icon</label>
                    <input type="file" id="icon" name="icon" class="form-control">
                </div>

                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea class="form-control mt-5" name="deskripsi" id="deskripsi" cols="30" rows="10"></textarea>
                </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-success"> Simpan</button>
                </div>

        </div>
        </form>

    </div>

</div>
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
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
@endsection
