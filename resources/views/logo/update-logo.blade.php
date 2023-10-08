@extends('master.adminlayout')
@section('content')
<div class="container-fluid">


    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Ubah Data Logo</h1>

    </div>

    <div class="content">
        <div class="card card-info card-outline">

        </div>


        <div class="card-body">
            <form action="{{url('ubah-logo',$logo->id)}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}

                <div class="form-group">
                    <label>NAMA</label>
                    <input type="text" id="nama" name="nama" class="form-control" value="{{$logo->nama}}">
                    <!-- <input type="file" id="judul" name="file" class="form-control" > -->
                </div>

                <div class="form-group">
                    <label>Logo</label><br>
                    <div class="img-input">
                        <input type="file" id="logo" name="logo">
                    </div>
                    <br>
                    <div class="d-flex justify-content-center">
                        <img class="img-preview" src="{{asset('img/'.$logo->logo)}}" id="img-view" alt="" width="250px" height="150px">
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
@endsection
