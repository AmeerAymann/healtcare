@extends('layouts.master')
@section('css')
    <!-- Internal Nice-select css  -->
    <link href="{{ URL::asset('assets/plugins/jquery-nice-select/css/nice-select.css') }}" rel="stylesheet" />


    <!--Internal  Datetimepicker-slider css -->
    <link href="{{ URL::asset('assets/plugins/amazeui-datetimepicker/css/amazeui.datetimepicker.css') }}"
        rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.css') }}"
        rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/pickerjs/picker.min.css') }}" rel="stylesheet">
@endsection

@section('title')
    {{ __('dash.add') }} {{ __('dash.lessons') }}

@stop


@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">{{ __('dash.lessons') }}
                </h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                    {{ __('dash.add') }}

                </span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">


        <div class="col-lg-12 col-md-12">

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>Error</strong>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="card">
                <div class="card-body">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-right">
                            <a class="btn btn-primary btn-sm"
                                href="{{ route('users.index') }}">{{ __('dash.back') }}</a>
                        </div>
                    </div><br>
                    <form class="parsley-style-1" id="selectForm2" autocomplete="off" name="selectForm2"
                        action="{{ route('lessons.store', 'test') }}" method="post">
                        {{ csrf_field() }}

                        <div class="">

                            <div class="row mg-b-20">
                                <div class="parsley-input col-md-6" id="fnWrapper">
                                    <label>{{ __('dash.title') }}
                                        : <span class="tx-danger">*</span></label>
                                    <input class="form-control form-control-sm mg-b-20"
                                        data-parsley-class-handler="#lnWrapper" name="title" required="" type="text">
                                </div>

                                <div class="parsley-input col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                    <label> {{ __('dash.start') }}: <span class="tx-danger">*</span></label>
                                    <input id="datetimepickerstart" class="form-control form-control-sm mg-b-20"
                                        name="start" required="" type="text">

                                </div>
                            </div>

                        </div>

                        <div class="row mg-b-20">
                            <div class="parsley-input col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                <label> {{ __('dash.end') }}: <span class="tx-danger">*</span></label>
                                <input id="datetimepickerend" class="form-control form-control-sm mg-b-20"
                                    data-parsley-class-handler="#lnWrapper" name="end" required="" type="text">
                            </div>

                            <div class="parsley-input col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                <label> {{ __('dash.students') }}: <span class="tx-danger">*</span></label>

                                <select name="students[]" multiple class="select2 form-control  mg-b-20">
                                    <option label="Choose one">
                                    </option>
                                    @foreach ($students as $v)
                                        <option value="{{ $v->id }}"> {{ $v->name }} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row row-sm mg-t-20">
                            <div class="col-lg">
                                <label> {{ __('dash.description') }}: </span></label>

                                <textarea class="form-control" placeholder="description" name="description" rows="3"></textarea>
                            </div>
                        </div>




                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button class="btn btn-main-primary pd-x-20" type="submit"> {{ __('dash.confirm') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
    </div>
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->
@endsection
@section('js')


    <!-- Internal Nice-select js-->
    <script src="{{ URL::asset('assets/plugins/jquery-nice-select/js/jquery.nice-select.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/jquery-nice-select/js/nice-select.js') }}"></script>

    <!--Internal  Parsley.min js -->
    <script src="{{ URL::asset('assets/plugins/parsleyjs/parsley.min.js') }}"></script>
    <!-- Internal Form-validation js -->
    <script src="{{ URL::asset('assets/js/form-validation.js') }}"></script>


    <!--Internal  jquery-simple-datetimepicker js -->
    <script src="{{ URL::asset('assets/plugins/amazeui-datetimepicker/js/amazeui.datetimepicker.min.js') }}"></script>

    <!-- Ionicons js -->
    <script src="{{ URL::asset('assets/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.js') }}"></script>

    <!--Internal  pickerjs js -->
    <script src="{{ URL::asset('assets/plugins/pickerjs/picker.min.js') }}"></script>

    <script>
        $(function() {
            $('#datetimepickerstart').datetimepicker({
                format: 'yyyy-mm-dd hh:ii',
                autoclose: true
            });

            $('#datetimepickerend').datetimepicker({
                format: 'yyyy-mm-dd hh:ii',
                autoclose: true
            });

            $('.select22').select2({
                placeholder: 'Choose one',
                searchInputPlaceholder: 'Search'
            });
        });
    </script>
@endsection
