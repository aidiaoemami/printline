@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Add Users</div>
                <div class="card-body">
                    <form method="POST" action="{{route('users.store')}}">
                        @csrf
                        <div class="form-group">
                            <label class="form-label">Nama *</label>
                            <input name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                placeholder="Nama .." value="{{ old('name') }}" autofocus required>
                            @if ($errors->has('name'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="form-label">Email *</label>
                            <input name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                placeholder="your-email@domain.com" value="{{ old('email') }}" autofocus required>
                            @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="form-label">Alamat</label>
                            <textarea name="address" class="form-control" rows="5" placeholder="Alamat .." value="{{ old('address') }}"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Telepon</label>
                            <input name="phone" class="form-control" placeholder="Telepon .." value="{{ old('phone') }}">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Password *</label>
                            <input name="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                placeholder="Passwrord" autofocus required>
                            @if ($errors->has('password'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="form-label">Ulangi Password *</label>
                            <input name="password_confirmation" type="password" class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}"
                                placeholder="Ulangi Password" autofocus required>
                            @if ($errors->has('password_confirmation'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="form-label">Role *</label>
                            <select name="roles" class="custom-select{{ $errors->has('roles') ? ' is-invalid' : '' }}">
                                <option value="admin">Admin</option>
                                <option value="seller">Seller</option>
                            </select>
                            @if ($errors->has('roles'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('roles') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-footer col-md-2">
                            <button class="btn btn-primary btn-block">Simpan</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection