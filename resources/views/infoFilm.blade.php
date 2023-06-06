@extends('layout.main')

@section('content')

<div id="info-wrapper">
    <div id="info-container">
        <div id="info-img-box">
            <img src="{{$film['thumb']}}">
        </div>
        <div id="info-box-info">
            <span><strong>Descrizione:</strong>
            <br> <br>
            {{$film['description']}}
            </span>
        </div>
    </div>

    <!-- <a href="home">
        <div id="button-box">
            <button>HOME</button>
        </div>
    </a> -->
</div>

@endsection

