@extends('layout.main')

@section('content')
        <!-- CONTENITORE MAIN -->
    <div id="main-wrapper">
        <!-- BANNER  -->
        <div id="jumbotron"></div>
        <!-- CONTENITORE PRINCIPALE -->
        <div id="contenuto-principale" class="black-background">
        <!-- CURRENT SERIES -->
        <div id="currentSeries"> <strong>CURRENT SERIES</strong> </div>
        <!-- CONTENITORE IMMAGINI -->
        <div id="wrapper-immagini">
            <!-- CARD -->
            <div id="card" v-for="(immagine , i) in immagini" :key="i">
            <!-- CONTENITORE IMMAGINE -->
            <div id="imgBox"><img :src="immagine.thumb" alt=""></div>
            <div id="title"></div>
            </div>
        </div>

        <div id="loadMore">
            LOAD MORE
        </div>

        </div>
        <!-- BARRA INFO -->
        <div id="barra-info" class="blu-teambg">
        <!-- CONTENITORE DELLE SVG -->
        <div id="contenitore-svg">
            <!-- BOX INFO -->
            <div class="svg-box" v-for="(link , i) in links" :key="i">
            <div class="svg"><img class="normal" :src="link.immagine" alt=""></div>
            <div class="svgName"></div>
            </div>
        </div>
        </div>
    </div>
@endsection
