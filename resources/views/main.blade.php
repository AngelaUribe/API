@extends('layouts.app')
<style>
    body {
        background: linear-gradient(45deg, #8a6c50, #f0d7b8, #d2e6e7, #7a88a3);
    }
</style>

@section('content')
    <div class="container jumbotron p-md-3 rounded bg-white ">
        @livewire('user-component')
    </div>
    <div>
        @livewire('gallery-component')
    </div>
@endsection
