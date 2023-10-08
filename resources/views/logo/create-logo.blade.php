@extends('master.adminlayout')
@section('content')
<div class="container-fluid">


    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Create Data Logo</h1>

    </div>

    <div class="content">
        <div class="card card-info card-outline">

        </div>

        <div class="card-body">
            <form action="{{route('simpan-logo')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}

                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" id="nama" name="nama" class="form-control">
                    <!-- <input type="file" id="judul" name="file" class="form-control" > -->
                </div>

                <div class="form-group">
                    <label>Logo</label>
                    <input type="file" id="logo" name="logo" class="form-control">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success" onclick="store()"> Simpan</button>
                </div>

        </div>
        </form>

    </div>

</div>
@endsection