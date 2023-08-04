<head>
    <meta http-equiv="refresh" content="2; /" />
</head>
@extends('layouts.layout')
@extends('layouts.app')
@section('content')
<div class="full-height">
    <div class="margin-top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="border card">
                        <div class="card-header">{{ __('') }}</div>
        
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
        
                            {{ __('Jesteś zalogowany!') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
