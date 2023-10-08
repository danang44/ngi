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
                    <label>Gambar</label>
                    <input type="file" id="gambar" name="gambar" class="form-control">
                    <img src="{{asset('img/'.$artikel->gambar)}}" height="100%" width:="100%" alt="#">
                </div>

                <div class="form-group">
                    <label>Author</label>
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

    ClassicEditor
        .create(document.querySelector('#kontenlengkap'))
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });
</script>
@endsection
