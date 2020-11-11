@extends('dashboard.admin.template')
@section('content')

    <!-- Start right content -->
    <div class="content-page">
        <!-- ============================================================== -->
        <!-- Start Content here -->
        <!-- ============================================================== -->
        <div class="content">
            <!-- Page Heading Start -->
            <div class="page-heading">
                <h1>
                    <i class='fa fa-table'></i>
                    List des voitures
                </h1>
                <h3>Administrer les voitures</h3>
                <br>
                @include('dashboard.admin.includes.messages')
            </div>
            <!-- Page Heading End-->				<!-- Your awesome content goes here -->

            <div class="row">
                <div class="col-md-12">
                    <div class="widget">
                        <div class="widget-header transparent">
                            <h2><strong>Voitures</strong> Liste</h2>
                            <div class="additional-btn">
                                <a href="tables.html#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                                <a href="tables.html#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                <a href="tables.html#" class="widget-close"><i class="icon-cancel-3"></i></a>
                            </div>
                        </div>
                        <div class="widget-content">
                            <div class="data-table-toolbar">
                                <div class="row">
                                    <div class="col-md-4">
                                        <form role="form">
                                            <input type="text" class="form-control" placeholder="Recherche...">
                                        </form>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="toolbar-btn-action">
                                            <a class="btn btn-success" href="{{ route('admin.car.create') }}"><i class="fa fa-plus-circle"></i> Add new</a>
                                            <a class="btn btn-danger"><i class="fa fa-trash-o"></i> Delete</a>
                                            <a class="btn btn-primary"><i class="fa fa-refresh"></i> Update</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table data-sortable class="table table-hover table-striped">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th style="width: 30px" data-sortable="false"><input type="checkbox" class="rows-check"></th>
                                        <th>Nom ou Marque</th>
                                        <th>Type de voiture</th>
                                        <th>Location</th>
                                        <th>Assurance</th>
                                        <th>Kilometrage</th>
                                        <th data-sortable="false">Prix : Off</th>
                                        <th>Status</th>
                                        <th data-sortable="false">Option</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($cars as $car)
                                        <tr>
                                            <td>{{ $car->id }}</td><td><input type="checkbox" class="rows-check"></td>
                                            <td><strong>{{ $car->name }}</strong></td>
                                            <td>{{ $car->type }}</td>
                                            <td>{{ $car->location }}</td>
                                            <td>
                                                {{ $car->assurance  }}
                                            </td>
                                            <td>
                                                {{ $car->kilometer  }}
                                            </td>
                                            <td>{{ $car->price }}</td><td><span class="label label-success">Active</span></td>
                                            <td>
                                                <div class="btn-group btn-group-xs">
                                                    <a data-toggle="tooltip" title="delete" class="btn btn-default" href=""><i class="fa fa-trash-o"></i></a>
                                                    <a data-toggle="tooltip" title="Edit" class="btn btn-default" href="{{ route('admin.car.edit', $car->id) }}"><i class="fa fa-edit"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <div class="data-table-toolbar">
                                {{ $cars->links() }}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
@stop
