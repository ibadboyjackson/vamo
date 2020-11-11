@extends('dashboard.admin.template')


@section('scripts')
    <script src="{{ asset('dashboard/assets/libs/bootstrap-select/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/libs/bootstrap-inputmask/inputmask.js') }}"></script>
    <script src="{{ asset('dashboard/assets/libs/summernote/summernote.js') }}"></script>
    <script src="{{ asset('dashboard/assets/js/pages/forms.js') }}"></script>
    <script src="{{ asset('dashboard/assets/libs/bootstrap-validator/js/bootstrapValidator.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/js/pages/form-validation.js') }}"></script>
@stop
@section('styles')
    <link href="{{ asset('dashboard/assets/libs/bootstrap-select/bootstrap-select.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashboard/assets/libs/summernote/summernote.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashboard/assets/css/style.css') }}" rel="stylesheet" type="text/css" />
@stop
@section('content')

    <div class="content-page">
        <!-- ============================================================== -->
        <!-- Start Content here -->
        <!-- ============================================================== -->
        <div class="content">
            <!-- Page Heading Start -->
            <div class="page-heading">
                <h1>Editer un Hotel</h1>
                @include('dashboard.admin.includes.messages')

            </div>
            <!-- Page Heading End-->
            <div class="row">
                <div class="col-sm-12 portlets">
                    <div class="widget">
                        <div class="widget-header transparent">
                            <h2><strong>hotel</strong> Edit</h2>
                            <div class="additional-btn">
                                <a href="form-validation.html#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                                <a href="form-validation.html#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                <a href="form-validation.html#" class="widget-close"><i class="icon-cancel-3"></i></a>
                            </div>
                        </div>
                        <div class="widget-content padding">
                            <form role="form" id="registerForm" method="post" action="{{ route('admin.hotel.update', $hotel->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="form-group">
                                    <label>Nom </label>
                                    <input type="text" class="form-control" name="name" value="{{ $hotel->name }}">
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label for="from">Pays</label>
                                            <input id="text" type="text" class="form-control" name="country" value="{{ $hotel->country}}">
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Ville</label>
                                            <input type="text" class="form-control" name="city" value="{{ $hotel->city }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label>Localisation</label>
                                            <input type="text" class="form-control" name="district" value="{{ $hotel->district }}">
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Prix</label>
                                            <input type="number" class="form-control" name="price" value="{{ $hotel->price }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Upload Image</label>
                                    <input type="file" name="file" class="form-control" value="{{ $hotel->file }}">
                                </div>
                                <div class="form-group">
                                    <label for="">Description</label>
                                    <textarea name="description" class="summernote">{{ $hotel->description }}</textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Enregistrer</button>
                            </form>
                        </div>
                    </div></div>
            </div>
        </div>
    </div>
@stop

