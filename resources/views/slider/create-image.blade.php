@extends('master.adminlayout')
@section('content')
<div class="container-fluid">


    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Create Data Image</h1>

    </div>

    <div class="content">
        <div class="card card-info card-outline">

        </div>

        <div class="card-body">
            <form action="{{route('simpan-gambar')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}

                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" id="logo" name="logo" class="form-control">
                </div>

                <div class="form-group">
                    <label>Slide</label><br>
                    <div class="img-input">
                        <input type="file" id="slide" name="slide">
                    </div>
                    <br>
                    <div class="d-flex justify-content-center">
                        <img class="img-preview" id="img-view" src="https://preyash2047.github.io/assets/img/no-preview-available.png?h=824917b166935ea4772542bec6e8f636" id="img-view" alt="" width="250px" height="150px">
                    </div>
                </div>

                <div class="form-group">
                    <label>Gambar</label><br>
                    <div class="img-input">
                        <input type="file" id="slide" name="slide">
                    </div>
                    <br>
                    <div class="d-flex justify-content-center">
                        <img class="img-preview" src="https://preyash2047.github.io/assets/img/no-preview-available.png?h=824917b166935ea4772542bec6e8f636" id="img-view" alt="" width="250px" height="150px">
                    </div>
                </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-success"> Simpan</button>
                </div>





            </form>
        </div>





    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
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
</div>
@endsection