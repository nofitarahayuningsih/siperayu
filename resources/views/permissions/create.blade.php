{{-- \resources\views\permissions\create.blade.php --}}
@extends('layouts.app')

@section('title', '| Create Permission')

@section('content')

<div class='col-lg-4 col-lg-offset-4'>

    <h2><i class='fa fa-key'></i> Tambah Hak Akses</h2>
    <br>

    {{ Form::open(array('url' => 'permissions')) }}

    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', '', array('class' => 'form-control')) }}
    </div><br>
    @if(!$roles->isEmpty()) //Jika roles tidak ada
        <h4>Memberikan Hak Akses untuk Roles</h4>

        @foreach ($roles as $role) 
            {{ Form::checkbox('roles[]',  $role->id ) }}
            {{ Form::label($role->name, ucfirst($role->name)) }}<br>

        @endforeach
    @endif
    <br>
    {{ Form::submit('Tambah', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

</div>

@endsection