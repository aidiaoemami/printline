@extends('master')
<!DOCTYPE html>
<html>
<head>
    <title>Home   </title>
</head>
<body>
@section('content')

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
<!-- tampilan seller -->
@if (session()->has('level'))
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <h3>Pesanan Masuk</h3>
        <div class="table-responsive">
              <table id="mytable" class="table table-bordred table-striped">
                   <thead>
                      <th>No</th>
                      <th>Nama Pelanggan</th>
                      <th>Jenis Cetak</th>
                      <th>Ukuran</th>
                      <th>Jilid</th>
                      <th>Tanggal Pesan</th>
                      <th>Tanggal Ambil</th>
                      <th>Harga</th>
                      <th>Catatan</th>
                      <th>Status</th>
                   </thead>
    <tbody>
    @php $no=1; @endphp
    @foreach($data as $value)
        <tr>
        <td>{{$no++}}</td>
        <td>{{$value->nama}}</td>
        @foreach ($dataprint as $print)
        <td>{{$print->jenis_cetak}}</td>
        <td>{{$print->ukuran}}</td>
        @endforeach
        @foreach ($datajilid as $jilid)
        <td>{{$jilid->warna}}</td>
        @endforeach
        <td>{{$value->tgl_pesan}}</td>
        <td>{{$value->tgl_ambil}}</td>
        <td>{{$value->total}}</td>
        <td>{{$value->note}}</td>
        <!-- <td><a href="status/{-{$value->id}}" class="btn btn-warning">{{$value->status}}</a></td> -->
        <td>{{$value->status}}</a></td>
        @if($value->status != 'Selesai')
        <td><a name="status"href="{{route('editstatus', $value->id)}}" value="selesai" class="btn btn-success">Selesai</a></td>
        @endif
        <!-- <td>{{$value->status}}</td>
        <td><p data-placement="top" data-toggle="tooltip" title="Edit"><a href=""></a><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td> -->
        
        </tr>

    @endforeach
    
    
    
    
    
    </tbody>
        
</table>

<div class="clearfix"></div>
<ul class="pagination pull-right">
  <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
  <li class="active"><a href="#">1</a></li>
  <li><a href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li><a href="#">4</a></li>
  <li><a href="#">5</a></li>
  <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
</ul>
                
            </div>
            
        </div>
    </div>
</div>


<!-- <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
      </div>
          <div class="modal-body">
          <div class="form-group">
        <input class="form-control " type="text" placeholder="Mohsin">
        </div>
        <div class="form-group">
        
        <input class="form-control " type="text" placeholder="Irshad">
        </div>
        <div class="form-group">
        <textarea rows="2" class="form-control" placeholder="CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan"></textarea>
    
        
        </div>
      </div>
          <div class="modal-footer ">
        <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
      </div>
        </div>
    /.modal-content 
  </div>
      /.modal-dialog --> 
    <!-- </div>
    
    
    
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
      </div>
          <div class="modal-body">
       
       <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>
       
      </div>
        <div class="modal-footer ">
        <button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
      </div>
        </div> -->
    <!-- /.modal-content --> 
  <!-- </div> -->
      <!-- /.modal-dialog --> 
    <!-- </div> -->
    @endsection
    @endif
</body>
</html>