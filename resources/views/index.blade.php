@extends('layouts.app')

<style>
    body {
        background: black);
    }

    * {
        margin: 0;
        padding: 0;
    }

    a {
        color: inherit;
        text-decoration: none;
    }

    body,
    html {
        overflow: hidden;
        height: 100%;
        font-size: 16px;
        font-family: 'Montserrat', sans-serif;
        background: #000;
        color: #fff;
    }

    #wrap {
        position: absolute;
        left: 0;
        top: 0;
        width: 150%;
        height: 100%;
        display: flex;
        background: black;
        margin: 0;
    }

    .hb {
        position: relative;
        width: 50%;
        z-index: 1;
        display: flex;
        align-items: center;
        z-index: 2;
        transform: scale(.90);
    }

    .c {
        position: relative;
        display: block;
        max-width: 90%;
    }

    .c img {
        position: relative;
        display: block;
        width: 100%;
        height: auto;
        min-height: 100px;
        z-index: 2;
    }

    .txt {
        position: absolute;
        top: 100%;
        left: 10%;
        width: 80%;
        min-width: 250px;
        opacity: 0;
        padding: 1em 0 0 1em;
        border-left: 1px solid;
        z-index: 1;
        transform: scaleY(1) translateY(-50px);
        transition: transform .2s, opacity .5s;
        color: gray;
    }

    h1 {
        text-transform: uppercase;
        color: white;
    }

    .hb:hover .txt {
        opacity: 1;
        transform: scaleY(1) translateY(0);
        color: white;
    }

    .fullBg {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
        transition: transform .5s, opacity .5s;
        transform: scale(1);
        z-index: 1;
    }

    .fullBg img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        opacity: .5;
    }

    .hb:hover+.fullBg {
        opacity: 1;
        transform: scale(1.02);
    }


    .credits {
        position: fixed;
        top: 0;
        text-align: right;
        font-style: italic;
        color: white;
    }


</style>

@section('content')
    <div class="container p-md-3">
        @livewire('carrousel-component')
    </div>

    <div class="credits container p-md-3">
        @livewire('user-component')
    </div>
@endsection
