@extends('master.adminlayout')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"> Data Company Profile</h1>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard.index')}}">Home</a></li>
                <li class="breadcrumb-item active">Data Company Profile</li>
            </ol>


        </div>

    </div>



    <div class="content">
        <!-- <div class="card card-info card-outline">
                            <div class="card-header d-flex">
                                <div class="">
                                    <a href="{{route('create-compro')}}" class="btn btn-success">Tambah Data<i class="fas fa-plus-square"></i></a>
                                </div>

                            </div>
                        </div> -->

        <div class="card-body">
            <table class="table table-bordered">
                <tr>

                    <th>No</th>

                    <th>Nama</th>
                    <th>Alamat Email</th>
                    <th>No Whatsaap</th>
                    <th>Downloaded At</th>


                    <th class="col-3s text-center">Opsi</th>

                </tr>
                @foreach ($compro as $item)
                <tr>

                    <td>{{$loop->iteration}}</td>

                    <td>{{$item->nama}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->whatsapp}}</td>
                    <td>{{$item->created_at}}</td>


                    <td>

                        <a class="btn btn-danger" onclick="confirmation(event)" href="{{url('delete-compro',$item->id)}}" data-confirm-delete="true" method="post" class="d-inline">



                            <i class="fa-solid fa-trash"></i>
                    </td>

                </tr>

                @endforeach


            </table>
            {{$compro->links()}}

        </div>

        <!-- End of Main Content -->

        <!-- Footer -->

        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->
</div>
@endsection
