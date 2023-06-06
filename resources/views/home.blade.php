@extends('layout.main')


@section('content')
        <!-- CONTENITORE MAIN -->
    <div id="main-wrapper">
        <!-- CONTENITORE PRINCIPALE -->
        <div id="contenuto-principale" class="black-background">
        <!-- CONTENITORE IMMAGINI -->
        <div id="wrapper-immagini">
            @foreach ($films as $film)
                <!-- CARD -->
                <div id="card">
                    <a href="{{route('infoFilm', ['slug'=>$film['slug']])}}">
                        <!-- CONTENITORE IMMAGINE -->
                        <div id="imgBox"><img src="{{ $film ['thumb'] }}" alt=""></div>
                        <div id="title">{{$film['title']}}</div>
                    </a>
                </div>
            @endforeach

        </div>

        <div id="loadMore">
            LOAD MORE
        </div>

        </div>
        <!-- BARRA INFO -->
        <div id="barra-info" class="blu-teambg">
        <!-- CONTENITORE DELLE SVG -->
        <div id="contenitore-svg">
        @foreach ($barraInfo as $info )
            <!-- BOX INFO -->
            <div class="svg-box" >
                <div class="svg"><img src="{{ Vite::asset ( $info ['immagine']) }}" class="normal"></div>
                <div class="svgName">{{ $info ['nome'] }}</div>
            </div>
        @endforeach
        </div>
        </div>
    </div>
@endsection
