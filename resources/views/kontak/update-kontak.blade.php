@extends('master.adminlayout')
@section('content')
<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Ubah Data Kontak</h1>

    </div>

    <div class="content">
        <div class="card card-info card-outline">

        </div>


        <div class="card-body">
            <form action="{{url('ubah-kontak',$kontak->id)}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}

                <div class="form-group">
                    <label>Judul</label>
                    <input type="text" id="judul" name="judul" class="form-control" value="{{$kontak->judul}}">
                    <!-- <input type="file" id="judul" name="file" class="form-control" > -->
                </div>

                <div class="form-group">
                    <label>Ikon</label><br>
                    <div class="img-input">
                        <input type="file" id="ikon" name="ikon">
                    </div>
                    <br>
                    <div class="d-flex justify-content-center">
                        <img class="img-preview-icon" src="{{asset('img/'.$kontak->ikon)}}" id="img-view" alt="" width="250px" height="150px">
                    </div>
                </div>

                <div class="form-group">
                    <label>Deskripsi</label>
                    <input type="text" id="deskripsi" name="deskripsi" class="form-control" value="{{$kontak->deskripsi}}">
                    <!-- <input type="file" id="judul" name="file" class="form-control" > -->
                </div>
                <div class="form-group">
                    <label>Link</label>
                    <input type="text" id="link" name="link" class="form-control" value="{{$kontak->link}}">
                    <!-- <input type="file" id="judul" name="file" class="form-control" > -->
                </div>

                <div class="form-group">
                    <label>URL</label>
                    <textarea class="form-control mt-5" id="url" name="url" class="form-control" value="{{$kontak->url}}">{{$kontak->url}} </textarea>

                </div>



                <div class="form-group">
                    <button type="submit" class="btn btn-success"> Simpan</button>
                </div>


            </form>

        </div>


    </div>

</div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<script>
    $("#ikon").change(function() {
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
