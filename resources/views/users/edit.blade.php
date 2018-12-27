@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Update Users</div>
                <div class="card-body">
                    {!! Form::open(['route' => ['users.update', $user->id ], 'method' => 'PATCH']) !!}
                        <div class="form-group">
                            <label class="form-label">Nama *</label>
                            <input name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                placeholder="Nama .." value="{{ old('name') }}{{$user->name}}" autofocus required>
                            @if ($errors->has('name'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="form-label">Email *</label>
                            <input name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                placeholder="your-email@domain.com" value="{{ old('email') }}{{$user->email}}" autofocus required>
                            @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="form-label">Alamat</label>
                            <textarea name="address" class="form-control" rows="5" placeholder="Alamat .." value="{{ old('address') }}">{{$user->address}}</textarea>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Telepon</label>
                            <input name="phone" class="form-control" placeholder="Telepon .." value="{{ old('phone') }}{{$user->phone}}">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Role *</label>
                            {!! Form::select('roles', array('admin' => 'Admin', 'seller' => 'Seller'), $user->roles[0]->name, ['class' => 'custom-select']); !!}
                            @if ($errors->has('roles'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('roles') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-footer col-md-2">
                            <button class="btn btn-primary btn-block">Simpan</button>
                        </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection