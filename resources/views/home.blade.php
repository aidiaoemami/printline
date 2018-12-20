@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @role('admin')
        <div class="col-sm-6 col-lg-3">
            <div class="card p-3">
                <div class="d-flex align-items-center">
                    <span class="stamp stamp-md bg-blue mr-3">
                        <i class="fe fe-dollar-sign"></i>
                    </span>
                    <div>
                        <h4 class="m-0"><a href="javascript:void(0)">132 <small>Sales</small></a></h4>
                        <small class="text-muted">12 waiting payments</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="card p-3">
                <div class="d-flex align-items-center">
                    <span class="stamp stamp-md bg-green mr-3">
                        <i class="fe fe-shopping-cart"></i>
                    </span>
                    <div>
                        <h4 class="m-0"><a href="javascript:void(0)">78 <small>Orders</small></a></h4>
                        <small class="text-muted">32 shipped</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="card p-3">
                <div class="d-flex align-items-center">
                    <span class="stamp stamp-md bg-red mr-3">
                        <i class="fe fe-users"></i>
                    </span>
                    <div>
                        <h4 class="m-0"><a href="javascript:void(0)">1,352 <small>Members</small></a></h4>
                        <small class="text-muted">163 registered today</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="card p-3">
                <div class="d-flex align-items-center">
                    <span class="stamp stamp-md bg-yellow mr-3">
                        <i class="fe fe-message-square"></i>
                    </span>
                    <div>
                        <h4 class="m-0"><a href="javascript:void(0)">132 <small>Comments</small></a></h4>
                        <small class="text-muted">16 waiting</small>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Top 10 Latest Users</h3>
                </div>
                <div class="card-body o-auto" style="height: 15rem">
                    <ul class="list-unstyled list-separated">
                        <li class="list-separated-item">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="avatar avatar-md d-block" style="background-image: url(demo/faces/female/12.jpg)"></span>
                                </div>
                                <div class="col">
                                    <div>
                                        <a href="javascript:void(0)" class="text-inherit">Amanda Hunt</a>
                                    </div>
                                    <small class="d-block item-except text-sm text-muted h-1x">amanda_hunt@example.com</small>
                                </div>
                                <div class="col-auto">
                                    <div class="item-action dropdown">
                                        <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i>
                                                Action </a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i>
                                                Another action </a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i>
                                                Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-link"></i>
                                                Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-separated-item">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="avatar avatar-md d-block" style="background-image: url(demo/faces/female/21.jpg)"></span>
                                </div>
                                <div class="col">
                                    <div>
                                        <a href="javascript:void(0)" class="text-inherit">Laura Weaver</a>
                                    </div>
                                    <small class="d-block item-except text-sm text-muted h-1x">lauraweaver@example.com</small>
                                </div>
                                <div class="col-auto">
                                    <div class="item-action dropdown">
                                        <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i>
                                                Action </a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i>
                                                Another action </a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i>
                                                Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-link"></i>
                                                Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-separated-item">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="avatar avatar-md d-block" style="background-image: url(demo/faces/female/29.jpg)"></span>
                                </div>
                                <div class="col">
                                    <div>
                                        <a href="javascript:void(0)" class="text-inherit">Margaret Berry</a>
                                    </div>
                                    <small class="d-block item-except text-sm text-muted h-1x">margaret88@example.com</small>
                                </div>
                                <div class="col-auto">
                                    <div class="item-action dropdown">
                                        <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i>
                                                Action </a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i>
                                                Another action </a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i>
                                                Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-link"></i>
                                                Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-separated-item">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="avatar avatar-md d-block" style="background-image: url(demo/faces/female/2.jpg)"></span>
                                </div>
                                <div class="col">
                                    <div>
                                        <a href="javascript:void(0)" class="text-inherit">Nancy Herrera</a>
                                    </div>
                                    <small class="d-block item-except text-sm text-muted h-1x">nancy_83@example.com</small>
                                </div>
                                <div class="col-auto">
                                    <div class="item-action dropdown">
                                        <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i>
                                                Action </a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i>
                                                Another action </a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i>
                                                Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-link"></i>
                                                Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-separated-item">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="avatar avatar-md d-block" style="background-image: url(demo/faces/male/34.jpg)"></span>
                                </div>
                                <div class="col">
                                    <div>
                                        <a href="javascript:void(0)" class="text-inherit">Edward Larson</a>
                                    </div>
                                    <small class="d-block item-except text-sm text-muted h-1x">edward90@example.com</small>
                                </div>
                                <div class="col-auto">
                                    <div class="item-action dropdown">
                                        <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i>
                                                Action </a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i>
                                                Another action </a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i>
                                                Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-link"></i>
                                                Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-separated-item">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="avatar avatar-md d-block" style="background-image: url(demo/faces/female/11.jpg)"></span>
                                </div>
                                <div class="col">
                                    <div>
                                        <a href="javascript:void(0)" class="text-inherit">Joan Hanson</a>
                                    </div>
                                    <small class="d-block item-except text-sm text-muted h-1x">joan.hanson@example.com</small>
                                </div>
                                <div class="col-auto">
                                    <div class="item-action dropdown">
                                        <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i>
                                                Action </a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i>
                                                Another action </a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i>
                                                Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-link"></i>
                                                Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Latest Login</h4>
                </div>
                <table class="table card-table">
                    <tbody>
                        <tr>
                            <td width="1"><i class="fa fa-chrome text-muted"></i></td>
                            <td>Google Chrome</td>
                            <td class="text-right"><span class="text-muted">23%</span></td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-firefox text-muted"></i></td>
                            <td>Mozila Firefox</td>
                            <td class="text-right"><span class="text-muted">15%</span></td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-safari text-muted"></i></td>
                            <td>Apple Safari</td>
                            <td class="text-right"><span class="text-muted">7%</span></td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-internet-explorer text-muted"></i></td>
                            <td>Internet Explorer</td>
                            <td class="text-right"><span class="text-muted">9%</span></td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-opera text-muted"></i></td>
                            <td>Opera mini</td>
                            <td class="text-right"><span class="text-muted">23%</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Invoices</h3>
                </div>
                <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap">
                        <thead>
                            <tr>
                                <th class="w-1">No.</th>
                                <th>Invoice Subject</th>
                                <th>Client</th>
                                <th>VAT No.</th>
                                <th>Created</th>
                                <th>Status</th>
                                <th>Price</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><span class="text-muted">001401</span></td>
                                <td><a href="invoice.html" class="text-inherit">Design Works</a></td>
                                <td>
                                    Carlson Limited
                                </td>
                                <td>
                                    87956621
                                </td>
                                <td>
                                    15 Dec 2017
                                </td>
                                <td>
                                    <span class="status-icon bg-success"></span> Paid
                                </td>
                                <td>$887</td>
                                <td class="text-right">
                                    <a href="javascript:void(0)" class="btn btn-secondary btn-sm">Manage</a>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown">Actions</button>
                                    </div>
                                </td>
                                <td>
                                    <a class="icon" href="javascript:void(0)">
                                        <i class="fe fe-edit"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="text-muted">001402</span></td>
                                <td><a href="invoice.html" class="text-inherit">UX Wireframes</a></td>
                                <td>
                                    Adobe
                                </td>
                                <td>
                                    87956421
                                </td>
                                <td>
                                    12 Apr 2017
                                </td>
                                <td>
                                    <span class="status-icon bg-warning"></span> Pending
                                </td>
                                <td>$1200</td>
                                <td class="text-right">
                                    <a href="javascript:void(0)" class="btn btn-secondary btn-sm">Manage</a>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown">Actions</button>
                                    </div>
                                </td>
                                <td>
                                    <a class="icon" href="javascript:void(0)">
                                        <i class="fe fe-edit"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="text-muted">001403</span></td>
                                <td><a href="invoice.html" class="text-inherit">New Dashboard</a></td>
                                <td>
                                    Bluewolf
                                </td>
                                <td>
                                    87952621
                                </td>
                                <td>
                                    23 Oct 2017
                                </td>
                                <td>
                                    <span class="status-icon bg-warning"></span> Pending
                                </td>
                                <td>$534</td>
                                <td class="text-right">
                                    <a href="javascript:void(0)" class="btn btn-secondary btn-sm">Manage</a>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown">Actions</button>
                                    </div>
                                </td>
                                <td>
                                    <a class="icon" href="javascript:void(0)">
                                        <i class="fe fe-edit"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="text-muted">001404</span></td>
                                <td><a href="invoice.html" class="text-inherit">Landing Page</a></td>
                                <td>
                                    Salesforce
                                </td>
                                <td>
                                    87953421
                                </td>
                                <td>
                                    2 Sep 2017
                                </td>
                                <td>
                                    <span class="status-icon bg-secondary"></span> Due in 2 Weeks
                                </td>
                                <td>$1500</td>
                                <td class="text-right">
                                    <a href="javascript:void(0)" class="btn btn-secondary btn-sm">Manage</a>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown">Actions</button>
                                    </div>
                                </td>
                                <td>
                                    <a class="icon" href="javascript:void(0)">
                                        <i class="fe fe-edit"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="text-muted">001405</span></td>
                                <td><a href="invoice.html" class="text-inherit">Marketing Templates</a></td>
                                <td>
                                    Printic
                                </td>
                                <td>
                                    87956621
                                </td>
                                <td>
                                    29 Jan 2018
                                </td>
                                <td>
                                    <span class="status-icon bg-danger"></span> Paid Today
                                </td>
                                <td>$648</td>
                                <td class="text-right">
                                    <a href="javascript:void(0)" class="btn btn-secondary btn-sm">Manage</a>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown">Actions</button>
                                    </div>
                                </td>
                                <td>
                                    <a class="icon" href="javascript:void(0)">
                                        <i class="fe fe-edit"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="text-muted">001406</span></td>
                                <td><a href="invoice.html" class="text-inherit">Sales Presentation</a></td>
                                <td>
                                    Tabdaq
                                </td>
                                <td>
                                    87956621
                                </td>
                                <td>
                                    4 Feb 2018
                                </td>
                                <td>
                                    <span class="status-icon bg-secondary"></span> Due in 3 Weeks
                                </td>
                                <td>$300</td>
                                <td class="text-right">
                                    <a href="javascript:void(0)" class="btn btn-secondary btn-sm">Manage</a>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown">Actions</button>
                                    </div>
                                </td>
                                <td>
                                    <a class="icon" href="javascript:void(0)">
                                        <i class="fe fe-edit"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @endrole

        @role('seller')
        @endrole

        @role('member')
        @endrole
    </div>
</div>
@endsection