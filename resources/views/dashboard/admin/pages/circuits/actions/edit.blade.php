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
                <h1>Editer un circuit</h1>
            </div>
            <!-- Page Heading End-->
            <div class="row">
                <div class="col-sm-12 portlets">
                    <div class="widget">
                        <div class="widget-header transparent">
                            <h2><strong>circuit</strong> Edit</h2>
                            <div class="additional-btn">
                                <a href="form-validation.html#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                                <a href="form-validation.html#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                <a href="form-validation.html#" class="widget-close"><i class="icon-cancel-3"></i></a>
                            </div>
                        </div>
                        <div class="widget-content padding">
                            <form role="form" id="registerForm" method="post" action="{{ route('admin.circuit.update', $circuit->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="form-group">
                                    <label>Nom de la ville</label>
                                    <input type="text" class="form-control" name="name" value="{{ $circuit->name }}">
                                </div>
                                <div class="form-group">
                                    <label>Durée de la visite (en heure)</label>
                                    <input type="number" class="form-control" name="tour_number" value="{{ $circuit->tour_number }}">
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label for="from">Date du début de la visite</label>
                                            <input id="text" type="datetime-local" class="form-control" name="from" value="{{ $circuit->from}}">
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Date de fin de la visite</label>
                                            <input type="datetime-local" class="form-control" name="to" value="{{ $circuit->to }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Upload Image</label>
                                    <input type="file" name="file" class="form-control" value="{{ $circuit->file }}">
                                </div>
                                <div class="form-group">
                                    <label for="">Prix</label>
                                    <input type="number" name="price" class="form-control" value="{{ $circuit->price }}">
                                </div>
                                <button type="submit" class="btn btn-primary">Enregistrer</button>
                            </form>
                        </div>
                    </div></div>
            </div>
        </div>
    </div>
@stop

