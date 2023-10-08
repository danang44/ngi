@extends('master.adminlayout')
@section('content')
<div class="container-fluid">


    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Ubah Data Layanan</h1>

    </div>

    <div class="content">
        <div class="card card-info card-outline">

        </div>


        <div class="card-body">
            <form action="{{url('ubah-layanan',$layanan->id)}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}

                <div class="form-group">
                    <label>Judul</label>
                    <input type="text" id="judul" name="judul" class="form-control" value="{{$layanan->judul}}">
                    <!-- <input type="file" id="judul" name="file" class="form-control" > -->
                </div>

                <div class="form-group">
                    <label>Gambar</label><br>
                    <div class="img-input">
                        <input type="file" id="icon" name="icon">
                    </div>
                    <br>
                    <div class="d-flex justify-content-center">
                        <img class="img-preview-icon" src="{{asset('img/'.$layanan->icon)}}" id="img-view" alt="" width="250px" height="150px">
                    </div>
                </div>

                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea class="form-control mt-5" name="deskripsi" id="deskripsi" cols="30" rows="10" value="{{$layanan->deskripsi}}">{!!$layanan->deskripsi!!}</textarea>
                    <!-- <input type="file" id="judul" name="file" class="form-control" > -->
                </div>



                <div class="form-group">
                    <button type="submit" class="btn btn-success"> Simpan</button>
                </div>


            </form>

        </div>


    </div>

</div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

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
@endsection
