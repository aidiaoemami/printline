@extends('master')

@section('title', 'Toko Saya')
@section('content')
<style type="text/css">
  body{
    background: -webkit-linear-gradient(left, #14374d, #14374d);
}
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
.emp-profile{
    padding: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #fff;
}
.profile-img{
    text-align: center;
}
.profile-img img{
    width: 70%;
    height: 100%;
}
.profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -20%;
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    background: #212529b8;
}
.profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}
.profile-head h5{
    color: #333;
}
.profile-head h6{
    color: #0062cc;
}
.profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 70%;
    padding: 2%;
    font-weight: 600;
    color: #6c757d;
    cursor: pointer;
}
.proile-rating{
    font-size: 12px;
    color: #818182;
    margin-top: 5%;
}
.proile-rating span{
    color: #495057;
    font-size: 15px;
    font-weight: 600;
}
.profile-head .nav-tabs{
    margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
    font-weight:600;
    border: none;
}
.profile-head .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #0062cc;
}
.profile-work{
    padding: 14%;
    margin-top: -15%;
}
.profile-work p{
    font-size: 12px;
    color: #818182;
    font-weight: 600;
    margin-top: 10%;
}
.profile-work a{
    text-decoration: none;
    color: #495057;
    font-weight: 600;
    font-size: 14px;
}
.profile-work ul{
    list-style: none;
}
.profile-tab label{
    font-weight: 600;
}
.profile-tab p{
    font-weight: 600;
    color: #0062cc;
}
</style>
<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container emp-profile">
            
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt=""/>
                            <!-- <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file"/>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    @foreach($data as $value)
                                    <h2>
                                        {{$value->nama_toko}}
                                    </h2>
                                    <h4>
                                        {{$value->alamat}}
                                    </h4>
                                    <p class="proile-rating">Deskripsi toko : <span>{{$value->deskripsi}}</span></p>
                                    <p class="proile-rating">Saldo : <span>{{$value->saldo}}</span></p>
                                    @endforeach
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Account</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="home-tab" data-toggle="tab" href="#toko" role="tab" aria-controls="toko" aria-selected="true">Toko</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#print" role="tab" aria-controls="print" aria-selected="false">Daftar Harga Print</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#jilid" role="tab" aria-controls="jilid" aria-selected="false">Daftar Harga Jilid</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                        
                    
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <!-- <p>WORK LINK</p>
                            <a href="">Website Link</a><br/>
                            <a href="">Bootsnipp Profile</a><br/>
                            <a href="">Bootply Profile</a>
                            <p>SKILLS</p>
                            <a href="">Web Designer</a><br/>
                            <a href="">Web Developer</a><br/>
                            <a href="">WordPress</a><br/>
                            <a href="">WooCommerce</a><br/>
                            <a href="">PHP, .Net</a><br/> -->
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nama Lengkap</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$value->nama}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Username</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$value->username}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$value->email}}</p>
                                            </div>
                                        </div>
                                        <div class="col-md-2" style="padding-left: 0px">
                                <a href="{{url('editaccount', $value->id)}}" class="btn btn-primary">Edit Account</a>
                            </div>
                            </div>
                            <div class="tab-pane fade show active" id="toko" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nama Toko</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$value->nama_toko}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Alamat</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$value->alamat}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Deskripsi</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$value->deskripsi}}</p>
                                            </div>
                                        </div>
                                        <div class="col-md-2" style="padding-left: 0px">
                                <a href="{{url('edittoko', $value->id)}}" class="btn btn-primary">Edit Toko</a>
                            </div>
                            </div>
                            <div class="tab-pane fade" id="print" role="tabpanel" aria-labelledby="profile-tab">
                                <table id="customers">
                                    <tr>
                                      <th>No</th>
                                      <th>Jenis Cetak</th>
                                      <th>Ukuran</th>
                                      <th>Harga</th>
                                      <th>Edit</th>
                                      <th>Delete</th>
                                    </tr>
                                    @php $no=1; @endphp
                                    @foreach($dataprint    as $value)
                                  <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$value->jenis_cetak}}</td>
                                    <td>{{$value->ukuran}}</td>
                                    <td>{{$value->harga}}</td>
                                     <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                                    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                                  </tr>
                                  <tr>
                                    @endforeach
                                    
                                </table>
                              </tr>
                              <br>
                            </table>

                          </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <table id="customers">
                                    <tr>
                                      <th>No</th>
                                      <th>Warna</th>
                                      <th>Harga</th>
                                    </tr>
                                    @php $no=1; @endphp
                                    @foreach($datajilid as $value)
                                  <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$value->warna}}</td>
                                    <td>{{$value->harga}}</td>
                                  </tr>
                                  <tr>
                                    @endforeach
                                    
                                </table>
                              </tr>
                            </table>
                          </div>
                            <div class="tab-pane fade" id="jilid" role="tabpanel" aria-labelledby="profile-tab">
                                <table id="customers">
                                    <tr>
                                      <th>No</th>
                                      <th>Warna Jilid</th>
                                      <th>Harga Jilid</th>
                                      <th>Edit</th>
                                      <th>Delete</th>
                                    </tr>
                                    @php $no=1; @endphp
                                    @foreach($datajilid as $value)
                                  <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$value->warna}}</td>
                                    <td>{{$value->harga}}</td>
                                    <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                                    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                                  </tr>
                                  <tr>
                                    @endforeach
                                    
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                       
        </div>  

 
@endsection
