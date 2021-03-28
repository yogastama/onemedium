@extends('components.layout')
@section('content')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('my_social_media') }}">My Social Media</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h2>
                        <i class="icon-globe"></i> Connect with your social media
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-6 col-sm-3">
            <a href="{{ route('my_social_media.connect', ['social_media_name' => 'instagram']) }}">
                <div class="card rounded">
                    <div class="card-body">
                        <center>
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Instagram_logo_2016.svg/1200px-Instagram_logo_2016.svg.png" alt="" class="image-social-media">
                            <div class="social-media-name mt-1">
                                Instagram
                            </div>
                        </center>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection