@extends('layout')
@section('title', '4in1 Telecom || 404')

@section('content')
     <!-- BREADCRUMBS SETCTION START -->
     <div class="breadcrumbs-section plr-200 mb-80">
            <div class="breadcrumbs overlay-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="breadcrumbs-inner">
                                <h1 class="breadcrumbs-title">404</h1>
                                <ul class="breadcrumb-list">
                                    <li>
                                        <a href="{{ url('/index') }}">Home</a>
                                    </li>
                                    <li>404</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BREADCRUMBS SETCTION END -->

        <!-- Start page content -->
        <div id="page-content" class="page-wrapper">

            <!-- ERROR SECTION START -->
            <div class="error-section mb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="error-404 box-shadow">
                                <img src="{{ asset('frontend/img/others/error.jpg') }}" alt="">
                                <div class="go-to-btn btn-hover-2">
                                    <a href="{{ url('/index') }}">go to home page</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ERROR SECTION END -->
        </div>
        <!-- End page content -->
@endsection


