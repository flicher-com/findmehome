@extends('admin.layouts.master')

@section('content')
    @include('admin.partials.nav')

    <div class="container-fluid content">
        <div class="row">
    @include('admin.partials.sidebar')

    <!-- start: Content -->
        <div class="col-md-10 col-sm-11 main ">

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" data-original-title="">
                            <h2><i class="fa fa-user"></i><span class="break"></span>Members</h2>
                            <div class="panel-actions">
                                <a href="table.html#" class="btn-setting"><i class="fa fa-wrench"></i></a>
                                <a href="table.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
                                <a href="table.html#" class="btn-close"><i class="fa fa-times"></i></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline" role="grid"><div class="row">
                                    <div class="col-lg-6">
                                        <div id="DataTables_Table_0_length" class="dataTables_length">
                                            <label><select size="1" name="DataTables_Table_0_length" aria-controls="DataTables_Table_0">
                                                    <option value="10" selected="selected">10</option>
                                                    <option value="25">25</option>
                                                    <option value="50">50</option>
                                                    <option value="100">100</option>
                                                </select> records per page
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 ">

                                        <div class="dataTables_filter" id="DataTables_Table_0_filter ">


                                            <label>
                                                <input type="text" placeholder="enter your keyword here" aria-controls="DataTables_Table_0">
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="inlineRadioOptions" class="search-via" id="inlineRadio2" value="option2"> First Name or Last Name
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="inlineRadioOptions" class="search-via" id="inlineRadio1" value="option1"> ID
                                            </label>
                                            <span class="pull-right search-via">Search by: </span>

                                        </div>
                                    </div>
                                </div>
                                <table class="table table-striped table-bordered bootstrap-datatable datatable dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                                    <thead>
                                        <tr role="row">
                                            <th>ID</th>
                                            <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Username: activate to sort column descending" style="width: 494px;">Name</th>
                                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Date registered: activate to sort column ascending" style="width: 355px;">Date registered</th>
                                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Role: activate to sort column ascending" style="width: 198px;">Role</th>
                                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 195px;">Status</th>
                                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 418px;">Actions</th>
                                        </tr>
                                    </thead>

                                    <tbody role="alert" aria-live="polite" aria-relevant="all">
                                        @foreach($users as $user)
                                        <tr class="odd">
                                            <td>{{ $user->id }}</td>
                                            <td class="  sorting_1">{{ $user->first_name }} {{ $user->last_name }}</td>
                                            <td class=" ">{{ $user->created_at }}</td>
                                            <td class=" ">Staff</td>
                                            <td class=" ">
                                                <span class="label label-success">Active</span>
                                            </td>
                                            <td class=" ">
                                                <form action="{{ route('admin.login.user', $user->id) }}" method="post">
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-success">
                                                        <i class="fa fa-search-plus "></i>
                                                    </button>
                                                </form>
                                                <a class="btn btn-info" href="table.html#">
                                                    <i class="fa fa-edit "></i>
                                                </a>
                                                <a class="btn btn-danger" href="table.html#">
                                                    <i class="fa fa-trash-o "></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="dataTables_info" id="DataTables_Table_0_info">Showing 1 to 10 of 32 entries</div>
                                    </div>
                                    <div class="col-lg-12 center">
                                        <div class="dataTables_paginate paging_bootstrap">
                                            <ul class="pagination">
                                                <li class="prev disabled">
                                                    <a href="#">← Previous</a>
                                                </li>
                                                <li class="active">
                                                    <a href="#">1</a>
                                                </li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#">4</a></li>
                                                <li class="next"><a href="#">Next → </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/col-->

            </div><!--/row-->
        </div>
        <!-- end: Content -->

@endsection