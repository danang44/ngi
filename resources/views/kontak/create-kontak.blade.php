@extends('master.adminlayout')
@section('content')
<div class="container-fluid">


    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Create Data Kontak</h1>

    </div>

    <div class="content">
        <div class="card card-info card-outline">

        </div>

        <div class="card-body">
            <form action="{{route('simpan-kontak')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}

                <div class="form-group">
                    <label>Judul</label>
                    <input type="text" id="judul" name="judul" class="form-control">
                </div>

                <!-- <input type="file" id="judul" name="file" class="form-control" > -->

                <div class="form-group">
                    <label>Ikon</label>
                    <input type="file" id="icon" name="ikon" class="form-control">
                </div>

                <div class="form-group">
                    <label>Deskripsi</label>
                    <input type="text" id="deskripsi" name="deskripsi" class="form-control">
                </div>
                <div class="form-group">
                    <label>Link</label>
                    <input type="text" id="link" name="link" class="form-control">
                </div>
                <div class="form-group">
                    <label>URL</label>
                    <input type="text" id="url" name="url" class="form-control">
                </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-success"> Simpan</button>
                </div>

        </div>
        </form>

    </div>

</div>
@endsection
