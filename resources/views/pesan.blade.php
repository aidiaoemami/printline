@extends('master')
@section('title', 'Cetak Dokumen')

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
  <form class="form-horizontal" action="{{url('pesan')}}" method="post">
    {{ csrf_field() }}
    <fieldset>

      <!-- Form Name -->

      <legend style="text-align: center; padding-top: 20px;">Pesan</legend>
      <!-- if -->
      <!-- <script type="text/javascript">alert('Data Berhasil Ditambahkan')</script> -->
      <!-- Select Basic -->
      <div class="form-group" style="margin-right: 0px;">

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
@endsection