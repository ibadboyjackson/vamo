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
                <h1>Editer une croisiere</h1>
                @include('dashboard.admin.includes.messages')
            </div>
            <!-- Page Heading End-->
            <div class="row">
                <div class="col-sm-12 portlets">
                    <div class="widget">
                        <div class="widget-header transparent">
                            <h2><strong>Croisiere</strong> Edit</h2>
                            <div class="additional-btn">
                                <a href="form-validation.html#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                                <a href="form-validation.html#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                <a href="form-validation.html#" class="widget-close"><i class="icon-cancel-3"></i></a>
                            </div>
                        </div>
                        <div class="widget-content padding">
                            <form role="form" id="registerForm" method="post" action="{{ route('admin.cruise.update', $cruise->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="form-group">
                                    <label>Company name</label>
                                    <input type="text" class="form-control" name="name" value="{{ $cruise->name }}">
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label for="from">Ville de depart</label>
                                            <input id="text" type="text" class="form-control" name="from" value="{{ $cruise->from }}">
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Ville de destination</label>
                                            <input type="text" class="form-control" name="to" value="{{ $cruise->to }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Upload Image Pricipal</label>
                                    <input type="file" name="file" class="form-control" value="{{ $cruise->file }}">
                                </div>
                                <div class="form-group">
                                    <label for="">Upload Enterprise logo</label>
                                    <input type="file" name="image" class="form-control" value="{{ $cruise->image }}">
                                </div>
                                <div class="form-group">
                                    <label for="">Prix</label>
                                    <input type="number" name="price" class="form-control" value="{{ $cruise->price }}">
                                </div>
                                <button type="submit" class="btn btn-primary">Enregistrer</button>
                            </form>
                        </div>
                    </div></div>
            </div>
        </div>
    </div>
@stop

