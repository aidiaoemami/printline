@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">List Users</div>
                <div class="card-body">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <button class="btn btn-success pull-right"> <i class="fe fe-plus"></i> Add User</button>
                            </div>
                            <div class="table-responsive">
                                <table class="table card-table table-striped">
                                    <thead>
                                        <tr>
                                            <th class="w-1">No.</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Level</th>
                                            <th></th>
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
                                                {{ $value->roles[0]->name }}
                                            </td>

                                            <td>
                                                <a class="icon" href="javascript:void(0)">
                                                    <i class="fe fe-edit"></i>
                                                </a>
                                                <a class="icon" href="javascript:void(0)">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection