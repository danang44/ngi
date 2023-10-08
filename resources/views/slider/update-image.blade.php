@extends('master.adminlayout')
@section('content')
<div class="container-fluid">


    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Ubah Data Gambar</h1>

    </div>

    <div class="content">
        <div class="card card-info card-outline">

        </div>

        <div class="card-body">

            <form action="{{url('ubah-image',$image->id)}}" method="post" enctype="multipart/form-data">


                {{csrf_field()}}

                <div class="card-body">
                    <form action="{{route('simpan-gambar')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}

                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" id="logo" name="logo" class="form-control" value="{{$image->logo}}">
                        </div>

                        <div class="form-group">
                            <label>Slide</label><br>
                            <div class="img-input">
                                <input type="file" id="slide" name="slide">
                            </div>
                            <br>
                            <div class="d-flex justify-content-center">
                                <img class="img-preview" src="{{asset('img/'.$image->slide)}}" id="img-view" alt="" width="250px" height="150px">
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success"> Simpan</button>
                        </div>





                    </form>
                </div>

        </div>

    </div>

    <!-- Content Row -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!-- /.container-fluid -->
    <script>
        $("#slide").change(function() {
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
@endsection
<!-- End of Main Content -->