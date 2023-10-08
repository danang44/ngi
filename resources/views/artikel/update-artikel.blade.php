@extends('master.adminlayout')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            !-->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Ubah Data Artikel</h1>

    </div>

    <div class="content">
        <div class="card card-info card-outline">

        </div>

        <div class="card-body">
            <form action="{{url('ubah-artikel',$artikel->id)}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}

                <div class="form-group">
                    <label>Judul</label>
                    <input type="text" id="judul" name="judul" class="form-control" value="{{$artikel->judul}}">
                </div>

                <!-- <input type="file" id="judul" name="file" class="form-control" > -->

                <div class="form-group">
                    <label>Gambar</label><br>
                    <div class="img-input">
                        <input type="file" id="gambar" name="gambar">
                    </div>
                    <br>
                    <div class="d-flex justify-content-center">
                        <img class="img-preview" src="{{asset('img/'.$artikel->gambar)}}" id="img-view" alt="" width="250px" height="150px">
                    </div>
                </div>

                <div class="form-group">
                    <label>Penulis</label>
                    <input type="text" id="author" name="author" class="form-control" value="{{$artikel->author}}">
                </div>
                <div class="form-group">
                    <label>Tanggal</label>
                    <input type="date" id="tanggal" name="tanggal" class="form-control" value="{{$artikel->tanggal}}">
                </div>
                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea class="form-control mt-5" name="deskripsi" id="deskripsi" cols="30" rows="10" value="{{$artikel->deskripsi}}">{!!$artikel->deskripsi!!}</textarea>
                </div>
                <div class="form-group">
                    <label>Artikel Lengkap</label>
                    <textarea class="form-control mt-5" name="artikellengkap" id="artikellengkap" cols="30" rows="10" value="{{$artikel->artikellengkap}}">{!!$artikel->artikellengkap!!}</textarea>
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
        .create(document.querySelector('#deskripsi'))
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
