@extends('master.adminlayout')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"> Data Pesan</h1>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard.index')}}">Home</a></li>
                <li class="breadcrumb-item active">Data Pesan</li>
            </ol>


        </div>

    </div>



    <div class="content">


        <div class="card-body">
            <table class="table table-bordered">
                <tr>

                    <th>No</th>

                    <th>Nama</th>
                    <th>Alamat Email</th>

                    <th>Isi Pesan</th>
                    <th>Send At</th>


                    <th class="col-3s text-center">Opsi</th>

                </tr>
                @foreach ($contactus as $item)
                <tr>

                    <td>{{$loop->iteration}}</td>

                    <td>{{$item->nama}}</td>
                    <td>{{$item->email}}</td>

                    <td>{{$item->isi}}</td>
                    <td>{{date('d-m-Y',strtotime($item->created_at))}}</td>
                    <td>


                        <a href="mailto:{{$item->email}}" class="btn btn-primary"><i class="fa-solid fa-reply"></i> </a>

                        <a class="btn btn-danger" onclick="confirmation(event)" href="{{url('delete-contact-detail',$item->id)}}" data-confirm-delete="true" method="post" class="d-inline">
                            <i class="fa-solid fa-trash"></i>
                        </a>


                    </td>
                </tr>
                @endforeach


            </table>



        </div>

        <!-- Content Row -->

        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->

    <!-- End of Footer -->

</div>
@endsection
