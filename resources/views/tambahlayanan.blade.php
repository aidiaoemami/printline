@extends('master')
@section('title', 'Tambah Layanan')

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
<div class="col-md-6">
  <form class="form-horizontal" action="{{route('tambahlayanan')}}" method="post">
  {{ csrf_field() }}
<fieldset>

<!-- Form Name -->

<legend style="text-align: center; padding-top: 20px;">Tambah Layanan Print</legend>
<!-- if -->
  <!-- <script type="text/javascript">alert('Data Berhasil Ditambahkan')</script> -->
<!-- Select Basic -->
<div class="form-group" style="margin-right: 0px;">
  @foreach($data as $value)
  <input class="form-control" name="id" value="{{$value->id}}" type="hidden">
  @endforeach
  <label class="col-md-4 control-label" for="selectbasic">Print</label>
  <div class="col-md-4">
    <select id="selectbasic" name="print" class="form-control">
      <option>---Pilih---</option>
      <option value="warna">Warna</option>
      <option value="bw">Hitam Putih</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group" style="margin-right: 0px;">
  <label class="col-md-4 control-label" for="selectbasic">Ukuran</label>
  <div class="col-md-4">
    <select id="selectbasic" name="ukuran" class="form-control">
      <option>---Pilih---</option>
      <option value="A4">A4</option>
      <option value="A3">A3</option>
      <option value="F4">F4</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group" style="margin-right: 0px;">
  <label class="col-md-4 control-label" for="selectbasic">Ink Coverage</label>
  <div class="col-md-4">
    <select id="selectbasic" name="ink_coverage"class="form-control">
      <option>---Pilih---</option>
      <option value="low">Low</option>
      <option value="medium">Medium</option>
      <option value="full">High</option>
    </select>
  </div>
</div>
<div class="form-group" style="margin-right: 0px;">
  <label class="col-md-4 control-label" for="textinput">Harga</label>  
  <div class="col-md-4">
  <input name="harga" type="number" class="form-control input-md">
  </div>
</div>

<!-- Button -->
<div class="form-group" style="margin-right: 0px;">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" style="background: #76b852; border-color: #76b852"class="btn btn-primary">Simpan</button>
  </div>
</div>

</fieldset>
</form>
</div>
 
 <!-- layanan jilid -->

<form class="form-horizontal" action="{{route('tambahlayananjilid')}}" method="post">
  {{ csrf_field() }}
<fieldset>

<!-- Form Name -->
<legend style="text-align: center; padding-top: 20px;">Tambah Layanan Jilid</legend>


<div class="form-group" style="margin-right: 0px;">
  @foreach($data as $value)
  <input class="form-control" name="id" value="{{$value->id}}" type="hidden">
  @endforeach
</div>
<div class="form-group" style="margin-right: 0px; padding-left: 15px;">
  <label class="col-md-4 control-label" for="textinput">Warna Jilid</label>  
  <div class="col-md-4">
  <input name="warnajilid" type="text" class="form-control input-md">
  </div>
</div>
<div class="form-group" style="margin-right: 0px; padding-left: 15px;">
  <label class="col-md-4 control-label" for="textinput">Harga</label>  
  <div class="col-md-4">
  <input name="hargajilid" type="number" class="form-control input-md">
  </div>
</div>

<!-- Button -->
<div class="form-group" style="margin-right: 0px; padding-left: 15px;">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" style="background: #76b852; border-color: #76b852"class="btn btn-primary">Simpan</button>
  </div>
</div>
<div class="form-group" style="margin-right: 0px;"> 
  <div class="col-md-4">
  <input name="harga" type="hidden" class="form-control input-md">

  </div>
</div>
<div class="form-group" style="margin-right: 0px;"> 
  <div class="col-md-4">
  <input name="harga" type="hidden" class="form-control input-md">
  
  </div>
</div>
<div class="form-group" style="margin-right: 0px;"> 
  <div class="col-md-4">
  <input name="harga" type="hidden" class="form-control input-md">
  
  </div>
</div>

</fieldset>
</form>
@endsection