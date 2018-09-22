{{-- \resources\views\suratkeluar\index.blade.php --}}
@extends('layouts.app')

@section('title', '| Surat Keluar')

@section('content')

<div class="col-lg-10 col-lg-offset-1">
   <h1><i class="fa fa-file"></i> Surat Keluar

   <!--  <a href="{{ route('users.index') }}" class="btn btn-default pull-right">Pengguna</a>
    <a href="{{ route('permissions.index') }}" class="btn btn-default pull-right">Hak Akses</a></h1> -->
    <hr>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                	<th>Nomor Surat</th>
                	<th>Nomor Agenda</th>
                    <th>Tanggal</th>
                    <th>Asal</th>
                    <th>Perihal</th>
                    <th>Tujuan</th>
                    <th>Petugas</th>
                    <th>File</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($tb_suratkeluar as $suratkeluar)
                <tr>

                    <td>{{ $suratkeluar->no_surat }}</td>

                    <td>{{ $suratkeluar->no_agenda }}</td>

                    <td>{{ $suratkeluar->Y/m/d }}</td>

                    <td>{{ $suratkeluar->asal }}</td>

                    <td>{{ $suratkeluar->perihal }}</td>

                    <td>{{ $suratkeluar->tujuan }}</td>

                    <td>{{ $suratkeluar->petugas }}</td>

                     <td>{{ $suratkeluar->file }}</td>
                    
                    <td>
                    <a href="" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>

                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>

    <a href="{{ URL::to('suratkeluar/create') }}" class="btn btn-success">Tambah Surat Keluar</a>


</div>
@endsection