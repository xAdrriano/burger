@if(session()->has('mssg'))
<div id="mssg">
    <p>{{session('mssg')}}</p>
</div>
@endif
@extends('layouts.layout')
@section('content')
<div class=" full-height">
    <div class="flex-center position-ref full-height">
        <div class="content">
            <img src="/img/logo-burger.png" width="200" height="200" alt="logo burger">
            <div class="title m-b-md">
                Najlepsze burgiry w mieście!
            </div>
        </div>
    </div>
</div>
@endsection

