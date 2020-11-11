@extends('dashboard.admin.template')

@section('scripts')
    <script src="{{ asset('dashboard/assets/libs/bootstrap-validator/js/bootstrapValidator.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/js/pages/form-validation.js') }}"></script>
@stop
@section('content')

    <div class="content-page">
        <!-- ============================================================== -->
        <!-- Start Content here -->
        <!-- ============================================================== -->
        <div class="content">
            <!-- Page Heading Start -->
            <div class="page-heading">
                <h1>Ajouter un vol</h1>
            </div>
            <!-- Page Heading End-->
            <div class="row">
                <div class="col-sm-12 portlets">
                    <div class="widget">
                        <div class="widget-header transparent">
                            <h2><strong>Flight</strong> Add</h2>
                            <div class="additional-btn">
                                <a href="form-validation.html#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                                <a href="form-validation.html#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                <a href="form-validation.html#" class="widget-close"><i class="icon-cancel-3"></i></a>
                            </div>
                        </div>
                        <div class="widget-content padding">
                            <form role="form" id="registerForm" method="post" action="{{ route('admin.flight.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Nom de la compagnie</label>
                                    <input type="text" class="form-control" name="company_name">
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label for="from">Ville ou pays de depart</label>
                                            <input id="text" type="text" class="form-control" name="from">
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Ville ou pays de destination</label>
                                            <input type="text" class="form-control" name="to">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label>Numbre maximun d'enfants</label>
                                            <input type="number" class="form-control" name="child_number">
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Numbre maximun d'adultes</label>
                                            <input type="number" class="form-control" name="adult_number">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Upload Image</label>
                                    <input type="file" name="file" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Prix</label>
                                    <input type="number" name="price" class="form-control">
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label>Date de depart</label>
                                            <input type="datetime-local" class="form-control" name="date_depart">
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Date d'arrivée</label>
                                            <input type="datetime-local" class="form-control" name="date_back">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Enregistrer</button>
                            </form>
                        </div>
                    </div></div>
            </div>
        </div>
    </div>
@stop

