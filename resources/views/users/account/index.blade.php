@extends('components.layout')

@section('content')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('account') }}">Account</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-2 text-center">
                            <div class="icon-account">
                                <i class="fa fa-user"></i>
                            </div>
                        </div>
                        <div class="col-10 align-self-center">
                            <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">{{ Auth::user()->name }}!</h3>
                            <div class="email-account">
                                {{ Auth::user()->email }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="list-group list-group-flush shadow-sm">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  <a href="" class="link-list-account text-dark">
                    Change Account
                    <span class="badge badge-light badge-pill float-right">
                        <i class="icon-arrow-right"></i>
                    </span>
                  </a>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();" class="link-list-account text-dark">
                        Logout
                        <span class="badge badge-light badge-pill float-right">
                            <i class="icon-arrow-right"></i>
                        </span>
                    </a>
                </li>
              </ul>
        </div>
    </div>
</div>
@endsection