@extends('layouts.layout')
@section('content')
    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-sm-6 mb-4 mb-xl-0">
                        <div class="d-lg-flex align-items-center">
                            <div>
                                <h3 class="text-dark font-weight-bold mb-2">
                                    Welcome : {{ auth()->user()->name }}
                                </h3>
                                <p>Role : <b>
                                    @foreach(auth()->user()->roles as $role)
                                        {{ $role->name }}
                                    @endforeach 
                                </b> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
