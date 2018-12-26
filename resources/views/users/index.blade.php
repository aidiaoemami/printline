@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Admin and Seller List</div>
                @if(Session::has('message'))
                <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                @endif
                <div class="card-body">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <a href="{{route('users.create')}}" class="btn btn-success pull-right"> <i class="fe fe-plus"></i> Add User</a>
                            </div>
                            <div class="table-responsive">
                                <table class="table card-table table-striped">
                                    <thead>
                                        <tr>
                                            <th class="w-1">No.</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Level</th>
                                            <th class="w-4"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if($users->count() > 0)
                                        @foreach($users as $key => $value)
                                        <tr>
                                            <td><span class="text-muted">{{ $key+1 }}</span></td>
                                            <td>
                                                {{ $value->name }}
                                            </td>
                                            <td>
                                                {{ $value->email }}
                                            </td>
                                            <td>
                                                @if($value->roles[0]->name == "admin")
                                                <span class="badge badge-success">Administrator</span>
                                                @endif

                                                @if($value->roles[0]->name == "seller")
                                                <span class="badge badge-primary">Seller</span>
                                                @endif

                                                @if($value->roles[0]->name == "member")
                                                <span class="badge badge-warning">Member</span>
                                                @endif
                                            </td>

                                            <td>
                                                <a class="icon" href="javascript:void(0)" title="Edit">
                                                    <i class="fe fe-edit"></i>
                                                </a>
                                                <a class="icon" href="javascript:void(0)" title="Delete">
                                                    <i class="fe fe-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection