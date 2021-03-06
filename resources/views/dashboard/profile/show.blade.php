@extends('layouts.master')
@section('css')
    <!-- Internal Data table css -->
    <link href="{{ URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
@section('title')
    {{ __('dash.Profile') }}
@stop

@endsection

@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto"> {{ __('dash.dash') }} </h4><span
                class="text-muted mt-1 tx-13 mr-2 mb-0">
                {{ __('dash.Profile') }}
            </span>
        </div>

    </div>


</div>
<!-- breadcrumb -->
@endsection

@section('content')
<div class="">
    <div class="content-wrapper">

        <div class="row">
            <!-- Col -->
            <div class="col-lg-6">
                <div class="card mg-b-20">
                    <div class="card-body">
                        <div class="pl-0">
                            <div class="main-profile-overview">

                                <div class="d-flex justify-content-between mg-b-20">
                                    <div>
                                        <div class="main-img-user profile-user">
                                            <img alt=""
                                                src="{{ url('/') }}/uploads/{{ Auth()->user()->profile->photo }}"><a
                                                class="fas fa-camera profile-edit"
                                                href="{{ route('edit.profile') }}"></a>
                                        </div>

                                        <h5 class="main-profile-name">{{ Auth()->user()->name ?? '----' }}</h5>
                                        <br />
                                        <h5 class="main-profile-name">
                                            {{ Auth()->user()->profile->name_ko ?? '----' }}</h5>



                                        <p class="main-profile-name-text">
                                            {{ __('dash.username') }} :
                                            {{ Auth()->user()->username ?? '----' }}
                                        </p>
                                        <p class="main-profile-name-text">
                                            {{ __('dash.email') }} :
                                            {{ Auth()->user()->email ?? '----' }}
                                        </p>

                                    </div>

                                </div>
                                <a class="btn btn-primary btn-sm" href="{{ route('edit.profile') }}">
                                    {{ __('dash.editprof') }}</a>
                                <!-- main-profile-bio -->

                                @if (auth()->user()->hasRole('Student'))


                                    <hr class="mg-y-30">

                                    <label class="main-content-label tx-13 mg-b-20">

                                        {{ __('dash.mySubscription') }}
                                    </label>
                                    @if (isset($subscription))

                                        <div class="main-profile-social-list">

                                            <div class="media">
                                                <div class="media-icon bg-primary-transparent text-primary">
                                                    <i style="margin: auto !important;" class="fas fa-info"></i>
                                                </div>
                                                <div class="media-body">
                                                    <span>????????????: </span>
                                                    {{ $subscription->UID }}
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <div class="media-icon bg-primary-transparent text-primary">
                                                    <i style="margin: auto !important;" class="fas fa-info"></i>
                                                </div>
                                                <div class="media-body">
                                                    <span>????????? :: </span>
                                                    {{ $subscription->name }}
                                                    </a>
                                                </div>
                                            </div>


                                            <div class="media">
                                                <div class="media-icon bg-primary-transparent text-primary">
                                                    <i style="margin: auto !important;" class="fas fa-calendar-day"></i>
                                                </div>
                                                <div class="media-body">
                                                    <span>?????? ?????????: </span>
                                                    {{ $subscription->start }}
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <div class="media-icon bg-success-transparent text-success">
                                                    <i style="margin: auto !important;" class="fas fa-calendar-day"></i>
                                                </div>
                                                <div class="media-body">
                                                    <span>?????? ????????? : </span>
                                                    {{ $subscription->end }}
                                                </div>
                                            </div>
                                            <div class="media">
                                                <div class="media-icon bg-info-transparent text-info">
                                                    <i class="icon ion-logo-linkedin"></i>
                                                </div>
                                                <div class="media-body">
                                                    <span>?????? ?????? : </span>
                                                    <div class="d-flex">
                                                        @foreach ($subscription->day_lesson as $day)
                                                            <span class="tag mr-2"> {{ $day }}</span>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <div class="media-icon bg-danger-transparent text-danger">
                                                    <i class="icon ion-md-link"></i>
                                                </div>
                                                <div class="media-body">
                                                    <span>??????</span>

                                                    @if ($subscription->status == 'active')
                                                        <span
                                                            class="tag tag-green d-flex">{{ $subscription->status }}</span>
                                                    @else
                                                        <span
                                                            class="tag tag-red d-flex">{{ $subscription->status }}</span>
                                                    @endif

                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        <div class="alert alert-solid-danger mg-b-0" role="alert">
                                            <button aria-label="Close" class="close" data-dismiss="alert"
                                                type="button">
                                                <span aria-hidden="true">&times;</span></button>
                                            {{ __('dash.subInfo') }}
                                        </div>
                                    @endif
                                @endif
                                <hr class="mg-y-30">
                            </div><!-- main-profile-overview -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">

                <div class="card mg-b-20">
                    <div class="card-body">
                        <div class="main-content-label tx-13 mg-b-25">
                            {{ __('dash.conatct') }}
                        </div>
                        <div class="main-profile-contact-list">
                            <div class="media">
                                <div class="media-icon bg-primary-transparent text-primary">
                                    <i class="icon ion-md-phone-portrait"></i>
                                </div>
                                <div class="media-body">
                                    <span>
                                        {{ __('dash.phone') }}
                                    </span>
                                    <div>
                                        {{ Auth()->user()->profile->phone ?? '----' }}
                                    </div>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-icon bg-success-transparent text-success">
                                    <i class="icon ion-logo-slack"></i>
                                </div>
                                <div class="media-body">
                                    <span>
                                        {{ __('dash.skyId') }}
                                    </span>
                                    <div>
                                        {{ Auth()->user()->profile->skype_id ?? '----' }}
                                    </div>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-icon bg-info-transparent text-info">
                                    <i class="icon ion-md-locate"></i>
                                </div>
                                <div class="media-body">
                                    <span>
                                        {{ __('dash.Zoom_url') }}
                                    </span>
                                    <div>
                                        {{ Auth()->user()->profile->zoom_url ?? '----' }}
                                    </div>
                                </div>
                            </div>
                        </div><!-- main-profile-contact-list -->
                    </div>
                </div>
            </div>


        </div>
    </div>

@endsection
