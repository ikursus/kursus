@extends('layouts/app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Borang Tambah User</div>
                <div class="panel-body">

@if ( count( session('session_mesej_berjaya') ) )
<div class="alert alert-success">
    <ul>
        {{ session('session_mesej_berjaya') }}
    </ul>
</div>
@endif

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{!! Form::open() !!}

  <div class="form-group">
    {!! Form::text('username', null, ['placeholder' => 'Username...', 'class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::text('nama', null, ['placeholder' => 'Nama...', 'class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::email('email', null, ['placeholder' => 'emel...', 'class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::text('telefon', null, ['placeholder' => 'telefon...', 'class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::password('password', ['placeholder' => 'password...', 'class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::select('status', ['admin' => 'Admin', 'user' => 'User', 'trainer' => 'Trainer'], null, ['placeholder' => 'Sila Pilih', 'class' => 'form-control']) !!}
  </div>

  <button class="btn btn-primary btn-block">Simpan Maklumat</button>

{!! Form::close() !!}

</div>
</div>
</div>
</div>

@endsection
