@extends('layouts.app')

@section('content')


<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Beranda
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Transaksi </a></li>
        <li class="active">Hari ini</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <div class="panel panel-default">
                <!-- <div class="card-header">Dashboard</div>
 -->
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }} 
                        </div>
                    @endif

                   Transaksi hari ini sabtu, 29 september 2018

                  ini isinya surta masuk dan keluar di tanggal terkahir



                </div>
            </div>

    </section>
    <!-- /.content -->













<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
        </div>
    </div>
</div>
@endsection
