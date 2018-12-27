@extends('master')
@section('title', 'Edit Account')

@section('content')
<head>
  <style>
  .col-md-4{
    margin-right: 0px;
    padding-right: 0px;

  }
  .form-group{
    margin-right: 0px;
  }
</style>
</head>
<!-- layanan print -->
  <form class="form-horizontal" action="{{url('editaccount')}}" method="post">
    {{ csrf_field() }}
    <fieldset>

      <!-- Form Name -->

      <legend style="text-align: center; padding-top: 20px;">Edit Account</legend>
      <!-- if -->
      <!-- <script type="text/javascript">alert('Data Berhasil Ditambahkan')</script> -->
      <div class="form-group" style="margin-right: 0px;">
        @foreach($data as $value)
        <input type="hidden" name="id" value="{{$value->id}}">
        <label class="col-md-4 control-label" for="textinput">Nama Lengkap</label>  
        <div class="col-md-4">
          <input name="nama" type="text" value="{{$value->nama}}" class="form-control input-md">
        </div>
      </div>
      <div class="form-group" style="margin-right: 0px;">
        <label class="col-md-4 control-label" for="textinput">Username</label>  
        <div class="col-md-4">
          <input name="username" value="{{$value->username}}"type="text" class="form-control input-md">
        </div>
      </div>
      <div class="form-group" style="margin-right: 0px;">
        <label class="col-md-4 control-label" for="textinput">Email</label>  
        <div class="col-md-4">
          <input name="email" value="{{$value->email}}"type="text" class="form-control input-md">
        </div>
      </div>
      @endforeach
      <!-- Button -->
      <div class="form-group" style="margin-right: 0px;">
        <label class="col-md-4 control-label" for="singlebutton"></label>
        <div class="col-md-4">
          <button id="singlebutton" style="background: #76b852; border-color: #76b852"class="btn btn-primary">Simpan</button>
        </div>
      </div>

    </fieldset>
  </form>
@endsection