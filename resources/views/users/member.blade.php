@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Member List</div>
                <div class="card-body">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="table-responsive">
                                <table class="table card-table table-striped">
                                    <thead>
                                        <tr>
                                            <th class="w-1">No.</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Alamat</th>
                                            <th>Phone</th>
                                            <th>Saldo</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if($members->count() > 0)
                                        @foreach($members as $key => $value)
                                        <tr>
                                            <td><span class="text-muted">{{ $key+1 }}</span></td>
                                            <td>
                                                {{ $value->name }}
                                            </td>
                                            <td>
                                                {{ $value->email }}
											</td>
											<td>
                                                {{ $value->address }}
											</td>
											<td>
                                                {{ $value->phone }}
											</td>
											<td>
                                                Rp. 100.000
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
			{{ $members->links() }}
        </div>
    </div>
</div>
@endsection