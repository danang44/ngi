@extends('master.adminlayoutmaster')
@section('content')
<div class="container-fluid">


    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Create Data SubHeader</h1>

    </div>

    <div class="content">
        <div class="card card-info card-outline">

        </div>

        <div class="card-body">
            <form action="{{route('simpan-header')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}

                <div class="form-group">
                    <label>Judul</label>
                    <input type="text" id="judul" name="judul" class="form-control">
                    <!-- <input type="file" id="judul" name="file" class="form-control" > -->
                </div>


                <div class="form-group">
                    <label>SubJudul</label>
                    <input type="text" id="subjudul" name="subjudul" class="form-control">
                </div>




                <div class="form-group">
                    <button type="submit" class="btn btn-success" onclick="store()"> Simpan</button>
                </div>

        </div>
        </form>

    </div>

</div>
@endsection
