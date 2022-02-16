@extends('layouts.app')
<style>
    body {
        background: linear-gradient(45deg, #8a6c50, #f0d7b8, #d2e6e7, #7a88a3);
    }
</style>

@section('content')
    <div class="container jumbotron p-md-3 rounded bg-white">
        <div class="row align-items-center p-5">
            <div class="col text-center">
                <img id="img" class="rounded-circle px-1 h-100" style="width: 200px" alt="Album">
            </div>
            <div class="col-sm-6">
                <h2 id="username"></h2>
                <h6 class="label">Bio</h6>
                <p id="bio" class="content" style="color:gray"></p>
            </div>
            <div class="col">
                <h6 class="label">Phone</h6>
                <p id='phone' class="contact"></p>
                <h6 class="label">Email</h6>
                <p id="email" class="contact"></p>
            </div>
        </div>
    </div>

    <div>
        @livewire('gallery-component')
    </div>
@endsection
