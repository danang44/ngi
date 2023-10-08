@extends('master.adminlayout')
@section('content')
<div class="container-fluid">


    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Create Data Video</h1>

    </div>

    <div class="content">
        <div class="card card-info card-outline">

        </div>

        <div class="card-body">
            <form action="{{route('simpan-video')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}

                <div class="form-group">
                    <label>Judul</label>
                    <input type="text" id="header" name="header" class="form-control">
                    <!-- <input type="file" id="judul" name="file" class="form-control" > -->
                </div>
                <div class="form-group">
                    <label>Subjudul</label>
                    <input type="text" id="subheader" name="subheader" class="form-control">
                    <!-- <input type="file" id="judul" name="file" class="form-control" > -->
                </div>



                <div class="form-group">
                    <label>Video</label>
                    <input type="text" id="video" name="video" class="form-control">
                </div>




                <div class="form-group">
                    <button type="submit" class="btn btn-success" onclick="store()"> Simpan</button>
                </div>

        </div>
        </form>

    </div>

</div>
@endsection
