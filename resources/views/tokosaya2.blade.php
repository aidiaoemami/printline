<div class="container" style="padding-top: 40px;">
  
  <div class="row">
    <!-- left column -->
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="text-center">
        <img src="http://lorempixel.com/200/200/people/9/" class="avatar img-circle img-thumbnail" alt="avatar">
        <h6>Upload a different photo...</h6>
        <input type="file" class="text-center center-block well well-sm">
      </div>
    </div>
    <!-- edit form column -->
    <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
      <div class="alert alert-info alert-dismissable">
        <a class="panel-close close" data-dismiss="alert">×</a> 
        <i class="fa fa-coffee"></i>
        This is an <strong>.alert</strong>. Use this to show important messages to the user.
      </div>
      <h3>Toko Saya</h3>
      
      <form action="{{route('tokosaya')}}" method="post" class="form-horizontal" role="form">
        {{ csrf_field() }}
        <div class="form-group">
          <label class="col-lg-3 control-label">Nama Toko:</label>
          <div class="col-lg-8">
            @foreach($data as $value)
            <input class="form-control" name="id" value="{{$value->id}}" type="hidden">
            <input class="form-control" name="nama" value="{{$value->nama_toko}}" type="text">
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Alamat:</label>
          <div class="col-lg-8">
            <input class="form-control" name="alamat" value="{{$value->alamat}}" type="text">
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Deskripsi:</label>
          <div class="col-lg-8">
            <input class="form-control" name="deskripsi" value="{{$value->deskripsi}}" type="text">
          </div>
        </div>
       @endforeach
        <div class="form-group">
          <label class="col-md-3 control-label"></label>
          <div class="col-md-8">
            <input class="btn btn-primary" style="background: #5cb85c" value="Save Changes" type="submit">
            <span></span>
            <input class="btn btn-default" value="Cancel" type="reset">
          </div>
        </div>
      </form>
      <a href="http://localhost/aparanji_git/public/user/Order_history" data-original-title="Change Password" class="btn btn-success btn-sm" type="button" >Tambah Layanan</a>
    </div>
  </div>
</div>